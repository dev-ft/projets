<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 10:54:52
         compiled from "C:\wamp64\www\store\admin\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2674358bfe2fcd9f9b3-28748884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cd052e3236e4f61802b3e6f80b1a74827321371' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\admin\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1488969584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2674358bfe2fcd9f9b3-28748884',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bfe2fcdb6288_42945128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfe2fcdb6288_42945128')) {function content_58bfe2fcdb6288_42945128($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
