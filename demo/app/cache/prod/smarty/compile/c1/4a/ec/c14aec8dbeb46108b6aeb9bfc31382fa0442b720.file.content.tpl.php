<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 21:07:10
         compiled from "E:\xampp\htdocs\prestashop\demo\admin030d4c6z9\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275125a0a4fce4eaae9-27620428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c14aec8dbeb46108b6aeb9bfc31382fa0442b720' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\admin030d4c6z9\\themes\\default\\template\\content.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275125a0a4fce4eaae9-27620428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0a4fce4f1ad3_28601462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0a4fce4f1ad3_28601462')) {function content_5a0a4fce4f1ad3_28601462($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
