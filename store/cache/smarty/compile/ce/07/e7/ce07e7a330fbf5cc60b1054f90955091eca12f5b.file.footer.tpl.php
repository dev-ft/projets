<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 14:02:24
         compiled from "C:\wamp64\www\store\themes\blackhawk3.2\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2442358c000e066f463-71658821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce07e7a330fbf5cc60b1054f90955091eca12f5b' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\themes\\blackhawk3.2\\footer.tpl',
      1 => 1488977942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2442358c000e066f463-71658821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c000e06a36e7_82285162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c000e06a36e7_82285162')) {function content_58c000e06a36e7_82285162($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer"  class="container">
					<div class="row">
						<div class="col-xs-12 ">
							<div class="footerblock">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

							
							</div>
							
						</div>
						
				</footer>
			</div><!-- #footer -->
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</body>
</html><?php }} ?>
