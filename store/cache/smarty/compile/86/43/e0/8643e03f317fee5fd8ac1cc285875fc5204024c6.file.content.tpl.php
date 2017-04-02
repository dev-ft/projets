<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 10:54:03
         compiled from "C:\wamp64\www\store\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:830358bfe2cb1c11f8-63302367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8643e03f317fee5fd8ac1cc285875fc5204024c6' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\admin\\themes\\default\\template\\content.tpl',
      1 => 1488969563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '830358bfe2cb1c11f8-63302367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bfe2cb6331f6_59546757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfe2cb6331f6_59546757')) {function content_58bfe2cb6331f6_59546757($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
