<?php /* Smarty version Smarty-3.1.19, created on 2017-11-17 23:38:37
         compiled from "modules\blockinstagram\views\templates\hook\blockinstagram.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146225a0fb94dc97d92-97938314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cffc4ec1bb5a79fc0050fb9ca3179e170c90f96f' => 
    array (
      0 => 'modules\\blockinstagram\\views\\templates\\hook\\blockinstagram.tpl',
      1 => 1510905664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146225a0fb94dc97d92-97938314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instagram_pics' => 0,
    'instagram_user' => 0,
    'pic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0fb94dd19065_14364149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0fb94dd19065_14364149')) {function content_5a0fb94dd19065_14364149($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['instagram_pics']->value)&&count($_smarty_tpl->tpl_vars['instagram_pics']->value)>0) {?>
<div id="gm-instagram" class="tab-content">
	<div class="container">
		<p class="gm-instagram-title">ACTUS INSTAGRAM</p>
		<div class="page-heading">
			<?php echo smartyTranslate(array('s'=>'Follow','mod'=>'blockinstagram'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_user']->value['full_name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'on','mod'=>'blockinstagram'),$_smarty_tpl);?>

			<a href="https://www.instagram.com/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_user']->value['username'], ENT_QUOTES, 'UTF-8');?>
/" target="_blank" rel="nofollow">Instagram</a>
		</div>
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['instagram_pics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value) {
$_smarty_tpl->tpl_vars['pic']->_loop = true;
?>
				<div class="col-sm-6 col-md-3">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pic']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pic']->value['caption'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="nofollow">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pic']->value['image'], ENT_QUOTES, 'UTF-8');?>
" class="img-responsive" />
					</a>
					<p class="text-center">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pic']->value['date'], ENT_QUOTES, 'UTF-8');?>
<br/>
						<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pic']->value['likes'], ENT_QUOTES, 'UTF-8');?>
</strong> <?php echo smartyTranslate(array('s'=>'likes','mod'=>'blockinstagram'),$_smarty_tpl);?>
 /
						<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pic']->value['comments'], ENT_QUOTES, 'UTF-8');?>
</strong> <?php echo smartyTranslate(array('s'=>'comments','mod'=>'blockinstagram'),$_smarty_tpl);?>

					</p>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php }?><?php }} ?>
