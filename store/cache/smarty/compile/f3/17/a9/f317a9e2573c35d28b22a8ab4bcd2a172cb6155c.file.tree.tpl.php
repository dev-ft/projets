<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 10:54:55
         compiled from "C:\wamp64\www\store\admin\themes\default\template\helpers\tree\tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:539558bfe2ff2a2517-42405775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f317a9e2573c35d28b22a8ab4bcd2a172cb6155c' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\admin\\themes\\default\\template\\helpers\\tree\\tree.tpl',
      1 => 1488969584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '539558bfe2ff2a2517-42405775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bfe2ff326a62_06039590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfe2ff326a62_06039590')) {function content_58bfe2ff326a62_06039590($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>
