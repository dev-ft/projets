<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 14:30:15
         compiled from "C:\wamp64\www\store\modules\paypal\\views\templates\admin\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1850258c007670db5b4-00344394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7408ec9717252a2835bb468774d12d5a065ae254' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\modules\\paypal\\\\views\\templates\\admin\\header.tpl',
      1 => 1488979806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1850258c007670db5b4-00344394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_PPP' => 0,
    'PayPal_PVZ' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c0076714be56_07525242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0076714be56_07525242')) {function content_58c0076714be56_07525242($_smarty_tpl) {?>

<script type="text/javascript">
	var PayPal_WPS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_WPS']->value);?>
';
	var PayPal_HSS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_HSS']->value);?>
';
	var PayPal_ECS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_ECS']->value);?>
';
	var PayPal_PPP = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_PPP']->value);?>
';
	var PayPal_PVZ = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_PVZ']->value);?>
';
</script>

<script type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/views/js/back_office.js"></script><?php }} ?>
