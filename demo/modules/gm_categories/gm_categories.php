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
        return $this->installFixture((int)$params['object']->id);
    }

    protected function installFixtures()
    {
        $languages = Language::getLanguages(false);

        foreach ($languages as $lang) {
            $this->installFixture((int)$lang['id_lang'], 'sale70.png');
        }

        return true;
    }

    protected function installFixture($id_lang)
    {
        $values['GM_CATEGORIES_DESC'][(int)$id_lang] = '';

        Configuration::updateValue('GM_CATEGORIES_DESC', $values['GM_CATEGORIES_DESC']);
    }

    public function uninstall()
    {
        Configuration::deleteByName('GM_CATEGORIES_DESC');

        return parent::uninstall();
    }

    public function postProcess()
    {
        if (Tools::isSubmit('submitStoreConf')) {
            $languages = Language::getLanguages(false);
            $values = array();

            foreach ($languages as $lang) {
                $values['GM_CATEGORIES_DESC'][$lang['id_lang']] = Tools::getValue('GM_CATEGORIES_DESC'.$lang['id_lang']);
            }

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
                        'type' => 'text',
                        'lang' => true,
                        'label' => $this->trans('GM_Categories description', array(), 'Modules.Gm_Categories.Admin'),
                        'name' => 'GM_CATEGORIES_DESC',
                        'desc' => $this->trans('Please enter a short but meaningful description for the gm_categories.', array(), 'Modules.Gm_Categories.Admin')
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
        return array(
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
