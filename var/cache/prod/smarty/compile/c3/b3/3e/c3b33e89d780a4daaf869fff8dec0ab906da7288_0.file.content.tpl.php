<?php
/* Smarty version 3.1.39, created on 2023-10-16 16:29:32
  from '/var/www/html/prestashop/prestanew/admin868e5zmg4/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652d1794138ae2_24432507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3b33e89d780a4daaf869fff8dec0ab906da7288' => 
    array (
      0 => '/var/www/html/prestashop/prestanew/admin868e5zmg4/themes/default/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d1794138ae2_24432507 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
