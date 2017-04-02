<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 14:18:55
         compiled from "C:\wamp64\www\store\admin68184nnpp\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1287758c004bf2ca729-87417641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e0a8e61ad1efb60ce5112d5c3b70136867290d' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\admin68184nnpp\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1488969584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1287758c004bf2ca729-87417641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c004bf31ec84_35717757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c004bf31ec84_35717757')) {function content_58c004bf31ec84_35717757($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
