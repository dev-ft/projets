<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 14:02:24
         compiled from "C:\wamp64\www\store\themes\blackhawk3.2\modules\blockuserinfo\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3009158c000e0028fc1-74783344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94a20a1a40ef390562ab8828aa16a75dbbc74076' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\themes\\blackhawk3.2\\modules\\blockuserinfo\\nav.tpl',
      1 => 1488977943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3009158c000e0028fc1-74783344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c000e008ce25_66008238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c000e008ce25_66008238')) {function content_58c000e008ce25_66008238($_smarty_tpl) {?><!-- Block user information module NAV  -->
<div class="userbar col-xs-12">
<div class="header_user_info">

	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
		<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php } else { ?>
		<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php }?>
</div>
<!-- /Block usmodule NAV --><?php }} ?>
