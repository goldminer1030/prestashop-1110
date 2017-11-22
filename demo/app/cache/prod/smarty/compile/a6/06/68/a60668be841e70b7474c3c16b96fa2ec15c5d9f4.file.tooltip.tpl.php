<?php /* Smarty version Smarty-3.1.19, created on 2017-11-22 12:37:38
         compiled from "E:\xampp\htdocs\prestashop\demo\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31045a15b5e2d65ec7-31001071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a60668be841e70b7474c3c16b96fa2ec15c5d9f4' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1508764876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31045a15b5e2d65ec7-31001071',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a15b5e2d6ad64_87299951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a15b5e2d6ad64_87299951')) {function content_5a15b5e2d6ad64_87299951($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
