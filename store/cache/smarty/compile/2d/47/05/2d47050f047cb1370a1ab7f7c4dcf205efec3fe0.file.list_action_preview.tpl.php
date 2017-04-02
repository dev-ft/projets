<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 10:54:49
         compiled from "C:\wamp64\www\store\admin\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:745958bfe2f95408f4-50794141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d47050f047cb1370a1ab7f7c4dcf205efec3fe0' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\admin\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1488969584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '745958bfe2f95408f4-50794141',
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
  'unifunc' => 'content_58bfe2f95a4636_93602158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfe2f95a4636_93602158')) {function content_58bfe2f95a4636_93602158($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
