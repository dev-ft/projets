<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 14:34:28
         compiled from "C:\wamp64\www\store\modules\bankwire\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2273258c008644ad6b7-39775177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82ceb124a6d100ae4e42f5e5d8ef2d781369064a' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\modules\\bankwire\\views\\templates\\hook\\infos.tpl',
      1 => 1488969730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2273258c008644ad6b7-39775177',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c0086454cbc0_98896115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0086454cbc0_98896115')) {function content_58c0086454cbc0_98896115($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
