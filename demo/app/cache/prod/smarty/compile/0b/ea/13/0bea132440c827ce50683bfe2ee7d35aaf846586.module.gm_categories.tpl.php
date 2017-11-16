<?php /* Smarty version Smarty-3.1.19, created on 2017-11-16 10:47:55
         compiled from "module:gm_categories/gm_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284295a0db32ba06e21-39125846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bea132440c827ce50683bfe2ee7d35aaf846586' => 
    array (
      0 => 'module:gm_categories/gm_categories.tpl',
      1 => 1510835159,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '284295a0db32ba06e21-39125846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'node' => 0,
    'sub_node' => 0,
    'gm_categories_desc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0db32ba2a2d7_57081731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0db32ba2a2d7_57081731')) {function content_5a0db32ba2a2d7_57081731($_smarty_tpl) {?>
<div class="row">
  <?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?>
      <?php  $_smarty_tpl->tpl_vars['sub_node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_node']->key => $_smarty_tpl->tpl_vars['sub_node']->value) {
$_smarty_tpl->tpl_vars['sub_node']->_loop = true;
?>
        <div class="col-sm-12 col-md-6 gm-category">
          <?php if (isset($_smarty_tpl->tpl_vars['sub_node']->value['image'])) {?>
            <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_node']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_node']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_node']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="gm-category-content">
              <p class="gm-category-title"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sub_node']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</p>
              <p class="gm-category-desc"><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['sub_node']->value['desc']), ENT_QUOTES, 'UTF-8');?>
</p>
              <a class="gm-category-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_node']->value['link'], ENT_QUOTES, 'UTF-8');?>
">Shop</a>
            </div>
          <?php } else { ?>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gm_categories_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
          <?php }?>
        </div>
      <?php } ?>
    <?php }?>
  <?php } ?>
</div>
<?php }} ?>
