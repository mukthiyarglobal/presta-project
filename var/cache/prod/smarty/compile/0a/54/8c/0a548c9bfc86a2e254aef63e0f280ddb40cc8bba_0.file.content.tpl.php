<?php
/* Smarty version 3.1.39, created on 2023-10-16 16:01:11
  from '/var/www/html/prestashop/admin868e5zmg4/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652d10efcc9fd3_64536773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a548c9bfc86a2e254aef63e0f280ddb40cc8bba' => 
    array (
      0 => '/var/www/html/prestashop/admin868e5zmg4/themes/default/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d10efcc9fd3_64536773 (Smarty_Internal_Template $_smarty_tpl) {
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
