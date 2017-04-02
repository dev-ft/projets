<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 14:04:00
         compiled from "C:\wamp64\www\store\themes\blackhawk3.2\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:947658c001407ecee2-66585573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ecffb879eef325a9ebd125a4dfadf365a2694c0' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\themes\\blackhawk3.2\\category-count.tpl',
      1 => 1488977941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '947658c001407ecee2-66585573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c00140829869_00004567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c00140829869_00004567')) {function content_58c00140829869_00004567($_smarty_tpl) {?>
<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0) {?><?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }} ?>
