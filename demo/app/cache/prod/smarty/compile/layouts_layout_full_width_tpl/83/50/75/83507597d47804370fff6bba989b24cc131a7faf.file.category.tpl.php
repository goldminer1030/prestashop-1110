<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\catalog\listing\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262215a103bae8ac157-64210936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83507597d47804370fff6bba989b24cc131a7faf' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\catalog\\listing\\category.tpl',
      1 => 1510920075,
      2 => 'file',
    ),
    '0ac69267279123f0a13dbee9034fb6e544781818' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1510985283,
      2 => 'file',
    ),
    '2734f2ebd54cae4dcf7753065b878bfb4e49327c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\layouts\\layout-full-width.tpl',
      1 => 1510305652,
      2 => 'file',
    ),
    '900200b2f600541fb886dc408562a8afee873a6f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1510849665,
      2 => 'file',
    ),
    '01c88d0e48f3779e906219e04e91ca2f9ebdec08' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\_partials\\stylesheets.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
    '8a123ac1ccd51e40f4257d6a78c780ce5c12cc16' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\_partials\\javascript.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
    'b6286b785d16352cfb19acd3a8dba53dc438e94a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\_partials\\head.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
    '12cc358986e23b890d80042b5fd172f02cdfca9e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
    '16d4a348cb31bf6d4df64985f2c8b6463f9b3925' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\_partials\\header.tpl',
      1 => 1510755971,
      2 => 'file',
    ),
    '9528322cc0cb80e82fbea4a785348f56de2f499b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\_partials\\notifications.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
    '002e0517337a5489025d3f2b124cef4799984d7d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\_partials\\breadcrumb.tpl',
      1 => 1510914311,
      2 => 'file',
    ),
    'ab59b8304dc1ae3130cbc1060fe17338b4ad202d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\catalog\\listing\\category-main.tpl',
      1 => 1510997701,
      2 => 'file',
    ),
    'b57ac4690de4dc579165c85f0257b013e74b8c06' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\catalog\\listing\\category-product.tpl',
      1 => 1510992974,
      2 => 'file',
    ),
    'e0d4aa4fd4083da279ef55ebaa5d8e4610bc3506' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\errors\\not-found.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
    'f9fb64b750a8274b776a3f487bacea7a1fadaa1e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\catalog\\listing\\category-sub.tpl',
      1 => 1510992886,
      2 => 'file',
    ),
    'df1102e4cb606c95b633fa86f2a3621ad1dfaf7f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\demo\\themes\\classic\\templates\\_partials\\footer.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262215a103bae8ac157-64210936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a103baeaa0b52_42720320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a103baeaa0b52_42720320')) {function content_5a103baeaa0b52_42720320($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '262215a103bae8ac157-64210936');
content_5a103bae8da3a5_30169560($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '262215a103bae8ac157-64210936');
content_5a103bae941428_04127111($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      

      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '262215a103bae8ac157-64210936');
content_5a103bae94f0a4_22501072($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>

      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '262215a103bae8ac157-64210936');
content_5a103bae968172_36181683($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      

      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayOrderConfirmation2'),$_smarty_tpl);?>

      <?php }?>
      <section id="wrapper">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperTop"),$_smarty_tpl);?>

        <div class="container-fluid">
          
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '262215a103bae8ac157-64210936');
content_5a103bae9993f5_73086820($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
          

          

          
  <div id="content-wrapper">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    
  <section id="main">
    <div class="container">

      

      <section id="products">

        <?php if (count($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
          
          
            <?php /*  Call merged included template "catalog/listing/category-main.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/listing/category-main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, '262215a103bae8ac157-64210936');
content_5a103bae9c9bf1_71597044($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/listing/category-main.tpl" */?>
          
        <?php } else { ?>
          
            <?php /*  Call merged included template "catalog/listing/category-sub.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/listing/category-sub.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, '262215a103bae8ac157-64210936');
content_5a103bae9f9c70_88491955($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/listing/category-sub.tpl" */?>
          
          
          

            
              
                
              
            

            
              
                
              
            

            
              
                
              
            

            
              
                
              
            

          

            

          
        <?php }?>

      </section>

    </div>

  </section>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>


          
        </div>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperBottom"),$_smarty_tpl);?>

      </section>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '262215a103bae8ac157-64210936');
content_5a103baea85177_25393504($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '262215a103bae8ac157-64210936');
content_5a103bae915686_20656058($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\_partials\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103bae8da3a5_30169560')) {function content_5a103bae8da3a5_30169560($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">



  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '262215a103bae8ac157-64210936');
content_5a103bae901004_70676082($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '262215a103bae8ac157-64210936');
content_5a103bae915686_20656058($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\_partials\stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103bae901004_70676082')) {function content_5a103bae901004_70676082($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\_partials\javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103bae915686_20656058')) {function content_5a103bae915686_20656058($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\catalog\_partials\product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103bae941428_04127111')) {function content_5a103bae941428_04127111($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\_partials\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103bae94f0a4_22501072')) {function content_5a103bae94f0a4_22501072($_smarty_tpl) {?>
  
  <div class="header-banner">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>

  </div>
  

  
  <nav class="header-nav">
    <div class="container-fluid">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="right-nav">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
  

  
  <div class="header-top">
    <div class="container-fluid">
      <div class="row">
        <div class="text-md-center hidden-sm-down" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="text-md-center hidden-sm-down">
          <a class="btn-social-link" href="#">
            <img class="icon-social" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
fa-facebook.png" alt="social link">
          </a>
          <a class="btn-social-link" href="#">
            <img class="icon-social" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
fa-instagram.png" alt="social link">
          </a>
          <a class="btn-social-link" href="#">
            <img class="icon-social" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
fa-pinterest.png" alt="social link">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="position-static">
          <div class="col-xs-12">
            <div class="row top-menu-wrapper">
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>

  
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\_partials\notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103bae968172_36181683')) {function content_5a103bae968172_36181683($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\_partials\breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103bae9993f5_73086820')) {function content_5a103bae9993f5_73086820($_smarty_tpl) {?>
<div class="container">
  <nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
      <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
        
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
              <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
            <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
          </li>
        
      <?php } ?>
    </ol>
  </nav>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\catalog\listing\category-main.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103bae9c9bf1_71597044')) {function content_5a103bae9c9bf1_71597044($_smarty_tpl) {?>

  <div class="container">
    <div class="main-category-container">
      <p class="main-category-desc"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['description'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</p>
      <?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['subcategory']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
 $_smarty_tpl->tpl_vars['subcategory']->iteration++;
?>
        
        <?php if ($_smarty_tpl->tpl_vars['subcategory']->iteration%2!=0) {?>
          <div class="row main-category-row">
        <?php }?>

        
        <div class="col-md-6 main-category-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->iteration%4, ENT_QUOTES, 'UTF-8');?>
">
          <div class="main-category-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['url']) {?>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><img class="main-category-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
"></a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['subcategory']->value['name']) {?>
              <a class="main-category-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['name'];?>
</a>
            <?php }?>
          </div>
        </div>

        
        <?php if ($_smarty_tpl->tpl_vars['subcategory']->iteration%2==0||(count($_smarty_tpl->tpl_vars['subcategories']->value)%2!=0&&$_smarty_tpl->tpl_vars['subcategory']->iteration==count($_smarty_tpl->tpl_vars['subcategories']->value))) {?>
          </div>
        <?php }?>
      <?php } ?>
    </div>
  </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\catalog\listing\category-sub.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103bae9f9c70_88491955')) {function content_5a103bae9f9c70_88491955($_smarty_tpl) {?>

  <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
    <div class="container">
      <div class="sub-category-container">
        <p class="sub-category-desc"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['description'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</p>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-9">
            <div class="row">
              <div id="js-product-list">
                <div class="products row">
                  <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                    
                      <?php /*  Call merged included template "catalog/listing/category-product.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/listing/category-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '262215a103bae8ac157-64210936');
content_5a103baea07e09_97726902($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/listing/category-product.tpl" */?>
                    
                  <?php } ?>
                </div>

                
                  
                

                <div class="hidden-md-up text-xs-right up">
                  <a href="#header" class="btn btn-secondary">
                    <?php echo smartyTranslate(array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

                    <i class="material-icons">&#xE316;</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php } else { ?>

    <?php /*  Call merged included template "errors/not-found.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '262215a103bae8ac157-64210936');
content_5a103baea386d4_60592645($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "errors/not-found.tpl" */?>

  <?php }?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\catalog\listing\category-product.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103baea07e09_97726902')) {function content_5a103baea07e09_97726902($_smarty_tpl) {?>

  <div class="col-lg-6 gm-product">
    <div class="gm-product-thumbnail">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
        <img
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8');?>
<?php }?>"
          data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          >
      </a>
    </div>
    <div class="gm-product-description">
      <h1 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8');?>
</a></h1>

      
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <div class="product-price-and-shipping">
            
              

              
              
              
                
              
            

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>


            <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
            <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

          </div>
        <?php }?>
      
    </div>
  </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\errors\not-found.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103baea386d4_60592645')) {function content_5a103baea386d4_60592645($_smarty_tpl) {?>
<section id="content" class="page-content page-not-found">
  

    <h4><?php echo smartyTranslate(array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h4>
    <p><?php echo smartyTranslate(array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</p>

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displaySearch'),$_smarty_tpl);?>

    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNotFound'),$_smarty_tpl);?>

    

  
</section>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 08:54:54
         compiled from "E:\xampp\htdocs\prestashop\demo\themes\classic\templates\_partials\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a103baea85177_25393504')) {function content_5a103baea85177_25393504($_smarty_tpl) {?>
<div class="container">
  <div class="row">
    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

    
  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          
            <a class="_blank" href="http://www.prestashop.com" target="_blank">
              <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

            </a>
          
        </p>
      </div>
    </div>
  </div>
</div>
<?php }} ?>