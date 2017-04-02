<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 10:54:55
         compiled from "C:\wamp64\www\store\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3004258bfe2ffc04d00-68982489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2444120606cbaee2ad98b9e88841a9a7fdad0aad' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1488969585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3004258bfe2ffc04d00-68982489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bfe2ffc279c2_43394019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfe2ffc279c2_43394019')) {function content_58bfe2ffc279c2_43394019($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
