<?php
/* Smarty version 3.1.39, created on 2023-10-16 16:02:18
  from '/var/www/html/prestashop/themes/classic/templates/errors/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652d113255c114_88693872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f975ede8b11c73720442aa5a01f9ea2d35e28e5' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/errors/404.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_652d113255c114_88693872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46759141652d1132533910_58832888', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1480266556652d1132536514_04026504', 'page_title');
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available yet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2138692458652d113254a923_15220127', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "breadcrumb"} */
class Block_46759141652d1132533910_58832888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_46759141652d1132533910_58832888',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "breadcrumb"} */
/* {block 'page_title'} */
class Block_1480266556652d1132536514_04026504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1480266556652d1132536514_04026504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_2138692458652d113254a923_15220127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2138692458652d113254a923_15220127',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
}
}
/* {/block 'page_content_container'} */
}
