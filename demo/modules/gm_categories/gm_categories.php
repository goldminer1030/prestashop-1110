<?php
/*
*  @author goldminer1030
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class Gm_Categories extends Module implements WidgetInterface
{
    private $templateFile;

    public function __construct()
    {
        $this->name = 'gm_categories';
        $this->version = '1.0.0';
        $this->author = 'goldminer1030';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('GM_Categories', array(), 'Modules.Gm_Categories.Admin');
        $this->description = $this->trans('Displays a categories on your shop.', array(), 'Modules.Gm_Categories.Admin');

        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:gm_categories/gm_categories.tpl';
    }

    public function install()
    {
        return (parent::install() &&
                $this->registerHook('displayHome') &&
                $this->registerHook('actionObjectLanguageAddAfter') &&
                $this->installFixtures() &&
                $this->disableDevice(Context::DEVICE_MOBILE));
    }

    public function hookActionObjectLanguageAddAfter($params)
    {
        return $this->installFixture((int)$params['object']->id, Configuration::get('GM_CATEGORIES_IMG', (int)Configuration::get('PS_LANG_DEFAULT')));
    }

    protected function installFixtures()
    {
        $languages = Language::getLanguages(false);

        foreach ($languages as $lang) {
            $this->installFixture((int)$lang['id_lang'], 'sale70.png');
        }

        return true;
    }

    protected function installFixture($id_lang, $image = null)
    {
        $values['GM_CATEGORIES_IMG'][(int)$id_lang] = $image;
        $values['GM_CATEGORIES_LINK'][(int)$id_lang] = '';
        $values['GM_CATEGORIES_DESC'][(int)$id_lang] = '';

        Configuration::updateValue('GM_CATEGORIES_IMG', $values['GM_CATEGORIES_IMG']);
        Configuration::updateValue('GM_CATEGORIES_LINK', $values['GM_CATEGORIES_LINK']);
        Configuration::updateValue('GM_CATEGORIES_DESC', $values['GM_CATEGORIES_DESC']);
    }

    public function uninstall()
    {
        Configuration::deleteByName('GM_CATEGORIES_IMG');
        Configuration::deleteByName('GM_CATEGORIES_LINK');
        Configuration::deleteByName('GM_CATEGORIES_DESC');

        return parent::uninstall();
    }

    public function postProcess()
    {
        if (Tools::isSubmit('submitStoreConf')) {
            $languages = Language::getLanguages(false);
            $values = array();
            $update_images_values = false;

            foreach ($languages as $lang) {
                if (isset($_FILES['GM_CATEGORIES_IMG_'.$lang['id_lang']])
                    && isset($_FILES['GM_CATEGORIES_IMG_'.$lang['id_lang']]['tmp_name'])
                    && !empty($_FILES['GM_CATEGORIES_IMG_'.$lang['id_lang']]['tmp_name'])) {
                    if ($error = ImageManager::validateUpload($_FILES['GM_CATEGORIES_IMG_'.$lang['id_lang']], 4000000)) {
                        return $error;
                    } else {
                        $ext = substr($_FILES['GM_CATEGORIES_IMG_'.$lang['id_lang']]['name'], strrpos($_FILES['GM_CATEGORIES_IMG_'.$lang['id_lang']]['name'], '.') + 1);
                        $file_name = md5($_FILES['GM_CATEGORIES_IMG_'.$lang['id_lang']]['name']).'.'.$ext;

                        if (!move_uploaded_file($_FILES['GM_CATEGORIES_IMG_'.$lang['id_lang']]['tmp_name'], dirname(__FILE__).DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.$file_name)) {
                            return $this->displayError($this->trans('An error occurred while attempting to upload the file.', array(), 'Admin.Notifications.Error'));
                        } else {
                            if (Configuration::hasContext('GM_CATEGORIES_IMG', $lang['id_lang'], Shop::getContext())
                                && Configuration::get('GM_CATEGORIES_IMG', $lang['id_lang']) != $file_name) {
                                @unlink(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . Configuration::get('GM_CATEGORIES_IMG', $lang['id_lang']));
                            }

                            $values['GM_CATEGORIES_IMG'][$lang['id_lang']] = $file_name;
                        }
                    }

                    $update_images_values = true;
                }

                $values['GM_CATEGORIES_LINK'][$lang['id_lang']] = Tools::getValue('GM_CATEGORIES_LINK_'.$lang['id_lang']);
                $values['GM_CATEGORIES_DESC'][$lang['id_lang']] = Tools::getValue('GM_CATEGORIES_DESC_'.$lang['id_lang']);
            }

            if ($update_images_values) {
                Configuration::updateValue('GM_CATEGORIES_IMG', $values['GM_CATEGORIES_IMG']);
            }

            Configuration::updateValue('GM_CATEGORIES_LINK', $values['GM_CATEGORIES_LINK']);
            Configuration::updateValue('GM_CATEGORIES_DESC', $values['GM_CATEGORIES_DESC']);

            $this->_clearCache($this->templateFile);

            return $this->displayConfirmation($this->trans('The settings have been updated.', array(), 'Admin.Notifications.Success'));
        }

        return '';
    }

    public function getContent()
    {
        return $this->postProcess().$this->renderForm();
    }

    private function getCategories()
    {
      $range = '';
      $maxdepth = 3;

      $resultIds = array();
      $resultParents = array();
      $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
        SELECT c.id_parent, c.id_category, cl.name, cl.description, cl.link_rewrite
        FROM `'._DB_PREFIX_.'category` c
        INNER JOIN `'._DB_PREFIX_.'category_lang` cl ON (c.`id_category` = cl.`id_category` AND cl.`id_lang` = '.(int)$this->context->language->id.Shop::addSqlRestrictionOnLang('cl').')
        INNER JOIN `'._DB_PREFIX_.'category_shop` cs ON (cs.`id_category` = c.`id_category` AND cs.`id_shop` = '.(int)$this->context->shop->id.')
        WHERE (c.`active` = 1 OR c.`id_category` = '.(int)Configuration::get('PS_HOME_CATEGORY').')
        AND c.`id_category` != '.(int)Configuration::get('PS_ROOT_CATEGORY').'
        '.((int)$maxdepth != 0 ? ' AND `level_depth` > 1 AND `level_depth` <= '.(int)$maxdepth : '').'
        '.$range.'
        AND c.id_category IN (
          SELECT id_category
          FROM `'._DB_PREFIX_.'category_group`
          WHERE `id_group` IN ('.pSQL(implode(', ', Customer::getGroupsStatic((int)$this->context->customer->id))).')
        )
        ORDER BY `level_depth` ASC, cs.`position` ASC');
      foreach ($result as &$row) {
        $resultParents[$row['id_parent']][] = &$row;
        $resultIds[$row['id_category']] = &$row;
      }

      return $this->getTree($resultParents, $resultIds, $maxdepth, null);
    }

    public function getTree($resultParents, $resultIds, $maxDepth, $id_category = null, $currentDepth = 0)
    {
      if (is_null($id_category)) {
        $id_category = $this->context->shop->getCategory();
      }

      $children = [];

      if (isset($resultParents[$id_category]) && count($resultParents[$id_category]) && ($maxDepth == 0 || $currentDepth < $maxDepth)) {
        foreach ($resultParents[$id_category] as $subcat) {
          $children[] = $this->getTree($resultParents, $resultIds, $maxDepth, $subcat['id_category'], $currentDepth + 1);
        }
      }

      if (isset($resultIds[$id_category])) {
        $link = $this->context->link->getCategoryLink($id_category, $resultIds[$id_category]['link_rewrite']);
        $image = $this->context->link->getCatImageLink(
          $resultIds[$id_category]['name'],
          $id_category,
          'category_default');
        $name = $resultIds[$id_category]['name'];
        $desc = $resultIds[$id_category]['description'];
      } else {
        $link = $name = $desc = '';
        $image = _THEME_CAT_DIR_ . 'default-medium_default.jpg';
      }

      return [
        'id' => $id_category,
        'link' => $link,
        'image' => $image,
        'name' => $name,
        'desc'=> $desc,
        'children' => $children
      ];
    }

    public function renderForm()
    {
        $fields_form = array(
          'form' => array(
            'legend' => array(
              'title' => $this->trans('Settings', array(), 'Admin.Global'),
              'icon' => 'icon-cogs'
            ),
            'input' => array(
              array(
                'type' => 'file_lang',
                'label' => $this->trans('Category image', array(), 'Modules.Gm_Categories.Admin'),
                'name' => 'GM_CATEGORIES_IMG',
                'desc' => $this->trans('Upload an image for your category. The recommended dimensions are 1110 x 214px if you are using the default theme.', array(), 'Modules.Gm_Categories.Admin'),
                'lang' => true,
              ),
              array(
                'type' => 'text',
                'lang' => true,
                'label' => $this->trans('Category Link', array(), 'Modules.Gm_Categories.Admin'),
                'name' => 'GM_CATEGORIES_LINK',
                'desc' => $this->trans('Enter the link associated to your category. When clicking on the category, the link opens in the same window. If no link is entered, it redirects to the homepage.', array(), 'Modules.Gm_Categories.Admin')
              ),
              array(
                'type' => 'text',
                'lang' => true,
                'label' => $this->trans('Category description', array(), 'Modules.Gm_Categories.Admin'),
                'name' => 'GM_CATEGORIES_DESC',
                'desc' => $this->trans('Please enter a short but meaningful description for the category.', array(), 'Modules.Gm_Categories.Admin')
              )
            ),
            'submit' => array(
              'title' => $this->trans('Save', array(), 'Admin.Actions')
            )
          ),
        );

        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitStoreConf';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
          'uri' => $this->getPathUri(),
          'fields_value' => $this->getConfigFieldsValues(),
          'languages' => $this->context->controller->getLanguages(),
          'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        $languages = Language::getLanguages(false);
        $fields = array();

        foreach ($languages as $lang) {
            $fields['GM_CATEGORIES_IMG'][$lang['id_lang']] = Tools::getValue('GM_CATEGORIES_IMG_'.$lang['id_lang'], Configuration::get('GM_CATEGORIES_IMG', $lang['id_lang']));
            $fields['GM_CATEGORIES_LINK'][$lang['id_lang']] = Tools::getValue('GM_CATEGORIES_LINK_'.$lang['id_lang'], Configuration::get('GM_CATEGORIES_LINK', $lang['id_lang']));
            $fields['GM_CATEGORIES_DESC'][$lang['id_lang']] = Tools::getValue('GM_CATEGORIES_DESC_'.$lang['id_lang'], Configuration::get('GM_CATEGORIES_DESC', $lang['id_lang']));
        }

        return $fields;
    }

    public function renderWidget($hookName, array $params)
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId('gm_categories'))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $params));
        }

        return $this->fetch($this->templateFile, $this->getCacheId('gm_categories'));
    }

    public function getWidgetVariables($hookName, array $params)
    {
        $imgname = Configuration::get('GM_CATEGORIES_IMG', $this->context->language->id);

        if ($imgname && file_exists(_PS_MODULE_DIR_.$this->name.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.$imgname)) {
            $this->smarty->assign('gm_categories_img', $this->context->link->protocol_content . Tools::getMediaServer($imgname) . $this->_path . 'img/' . $imgname);
        }

        $gm_categories_link = Configuration::get('GM_CATEGORIES_LINK', $this->context->language->id);
        if (!$gm_categories_link) {
            $gm_categories_link = $this->context->link->getPageLink('index');
        }

        return array(
          'categories'         => $this->getCategories(),
          'gm_categories_link' => $this->updateUrl($gm_categories_link),
          'gm_categories_desc' => Configuration::get('GM_CATEGORIES_DESC', $this->context->language->id)
        );
    }

    private function updateUrl($link)
    {
        if (substr($link, 0, 7) !== "http://" && substr($link, 0, 8) !== "https://") {
            $link = "http://" . $link;
        }

        return $link;
    }
}
