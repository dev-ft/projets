<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 14:43:17
         compiled from "C:\wamp64\www\store\themes\blackhawk3.2\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2183758c00a7537ee07-06670169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372c19b35d58b64a7c11c31717a11daf9a5eafcb' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\themes\\blackhawk3.2\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1488977943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2183758c00a7537ee07-06670169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c00a7542fb02_67847419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c00a7542fb02_67847419')) {function content_58c00a7542fb02_67847419($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp64\\www\\store\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1) {?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
