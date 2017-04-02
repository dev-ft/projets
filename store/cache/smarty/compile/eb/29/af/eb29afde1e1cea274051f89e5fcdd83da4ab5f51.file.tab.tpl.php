<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 14:02:21
         compiled from "C:\wamp64\www\store\themes\blackhawk3.2\modules\blocknewproducts\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2857158c000dd3e4476-26281554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb29afde1e1cea274051f89e5fcdd83da4ab5f51' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\themes\\blackhawk3.2\\modules\\blocknewproducts\\tab.tpl',
      1 => 1488977943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2857158c000dd3e4476-26281554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c000dd3ff2f3_33485373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c000dd3ff2f3_33485373')) {function content_58c000dd3ff2f3_33485373($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp64\\www\\store\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts"><?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></li><?php }} ?>
