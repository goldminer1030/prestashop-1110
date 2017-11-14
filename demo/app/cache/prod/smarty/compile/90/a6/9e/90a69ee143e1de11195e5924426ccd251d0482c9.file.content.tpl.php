<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 17:08:51
         compiled from "E:\xampp\htdocs\prestashop\demo\admin030d4c6z9\themes\new-theme\template\controllers\addons_catalog\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211035a0a17f35c15c4-34033002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90a69ee143e1de11195e5924426ccd251d0482c9' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\admin030d4c6z9\\themes\\new-theme\\template\\controllers\\addons_catalog\\content.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211035a0a17f35c15c4-34033002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0a17f35eafb8_23817980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0a17f35eafb8_23817980')) {function content_5a0a17f35eafb8_23817980($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
