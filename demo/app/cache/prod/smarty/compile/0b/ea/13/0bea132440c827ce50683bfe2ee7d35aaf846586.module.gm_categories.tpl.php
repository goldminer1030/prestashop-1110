<?php /* Smarty version Smarty-3.1.19, created on 2017-11-15 13:35:25
         compiled from "module:gm_categories/gm_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102235a0c88ed95ebb8-67705857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bea132440c827ce50683bfe2ee7d35aaf846586' => 
    array (
      0 => 'module:gm_categories/gm_categories.tpl',
      1 => 1510633043,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '102235a0c88ed95ebb8-67705857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gm_categories_img' => 0,
    'gm_categories_desc' => 0,
    'gm_categories_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0c88ed9792f5_29338309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0c88ed9792f5_29338309')) {function content_5a0c88ed9792f5_29338309($_smarty_tpl) {?>
<div class="row">
  <div class="col-sm-12 col-md-6 gm-category">
    <?php if (isset($_smarty_tpl->tpl_vars['gm_categories_img']->value)) {?>
      <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_desc']->value, ENT_QUOTES, 'UTF-8');?>
">
      <div class="gm-category-content">
        <h6>Category 1</h6>
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_desc']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        <a class="gm-category-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_link']->value, ENT_QUOTES, 'UTF-8');?>
">Shop</a>
      </div>
    <?php } else { ?>
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    <?php }?>
  </div>
  <div class="col-sm-12 col-md-6 gm-category">
    <?php if (isset($_smarty_tpl->tpl_vars['gm_categories_img']->value)) {?>
      <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_desc']->value, ENT_QUOTES, 'UTF-8');?>
">
      <div class="gm-category-content">
        <h6>Category 2</h6>
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_desc']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        <a class="gm-category-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_link']->value, ENT_QUOTES, 'UTF-8');?>
">Shop</a>
      </div>
    <?php } else { ?>
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    <?php }?>
  </div>
</div>
<?php }} ?>
