<?php /* Smarty version Smarty-3.1.19, created on 2017-11-16 10:47:56
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\catalog\_partials\miniatures\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177285a0db32c061f89-10575565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5ef6c735514ec4ecaf8a0181ed3761f2f61b96a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1510761757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177285a0db32c061f89-10575565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0db32c08a747_45112831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0db32c08a747_45112831')) {function content_5a0db32c08a747_45112831($_smarty_tpl) {?>

  <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
      
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
          <img
            src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
            alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8');?>
<?php }?>"
            data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          >
        </a>
      

      
        
          
        

        
          
            
              
                

                
                
                
                  
                
              

              

              
              

              

              
            
          
        

        
          
        
      

      
        
          
            
          
        
      

      
        
          
            
          
        

        
          
            
          
        
      

    </div>
  </article>

<?php }} ?>
