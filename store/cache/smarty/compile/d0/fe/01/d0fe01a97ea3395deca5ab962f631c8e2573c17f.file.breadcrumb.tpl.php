<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 14:04:01
         compiled from "C:\wamp64\www\store\themes\blackhawk3.2\breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228158c00141e16142-33903880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0fe01a97ea3395deca5ab962f631c8e2573c17f' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\themes\\blackhawk3.2\\breadcrumb.tpl',
      1 => 1488977941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228158c00141e16142-33903880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c00141eccb17_21980465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c00141eccb17_21980465')) {function content_58c00141eccb17_21980465($_smarty_tpl) {?>

<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb clearfix">
	<a class="home" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
"><i class="icon-home"></i></a>
	<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value) {?>
		<span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1) {?>style="display:none;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')) {?>
			<span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

		<?php }?>
	<?php }?>
</div>
<?php if (isset($_GET['search_query'])&&isset($_GET['results'])&&$_GET['results']>1&&isset($_SERVER['HTTP_REFERER'])) {?>
<div class="pull-right">
	<strong>
		<a href="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8', true);?>
" name="back">
			<i class="icon-chevron-left left"></i> <?php echo smartyTranslate(array('s'=>'Back to Search results for "%s" (%d other results)','sprintf'=>array($_GET['search_query'],$_GET['results'])),$_smarty_tpl);?>

		</a>
	</strong>
</div>
<?php }?>
<!-- /Breadcrumb --><?php }} ?>
