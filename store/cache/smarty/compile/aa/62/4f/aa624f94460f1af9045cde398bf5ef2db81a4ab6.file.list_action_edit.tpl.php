<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 14:01:53
         compiled from "C:\wamp64\www\store\admin68184nnpp\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1783558c000c16c89b4-65556448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa624f94460f1af9045cde398bf5ef2db81a4ab6' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\admin68184nnpp\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1488969584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1783558c000c16c89b4-65556448',
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
  'unifunc' => 'content_58c000c16eb341_83618207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c000c16eb341_83618207')) {function content_58c000c16eb341_83618207($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
