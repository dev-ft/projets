<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 10:54:48
         compiled from "C:\wamp64\www\store\admin\themes\default\template\helpers\form\form_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1436458bfe2f85b90e9-44431634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b90dfc0d73b2f8eb5349ef51392f43bca856a87' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\admin\\themes\\default\\template\\helpers\\form\\form_group.tpl',
      1 => 1488969583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1436458bfe2f85b90e9-44431634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
    'id_checkbox' => 0,
    'fields_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bfe2f8644fd3_70333175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfe2f8644fd3_70333175')) {function content_58bfe2f8644fd3_70333175($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['groups']->value)&&isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
<div class="row">
	<div class="col-lg-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="fixed-width-xs">
						<span class="title_box">
							<input type="checkbox" name="checkme" id="checkme" onclick="checkDelBoxes(this.form, 'groupBox[]', this.checked)" />
						</span>
					</th>
					<th class="fixed-width-xs"><span class="title_box"><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
					<th>
						<span class="title_box">
							<?php echo smartyTranslate(array('s'=>'Group name'),$_smarty_tpl);?>

						</span>
					</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
				<tr>
					<td>
						<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((('groupBox').('_')).($_smarty_tpl->tpl_vars['group']->value['id_group']), null, 0);?>
						<input type="checkbox" name="groupBox[]" class="groupBox" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?>checked="checked"<?php }?> />
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
</td>
					<td>
						<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</label>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php } else { ?>
<p>
	<?php echo smartyTranslate(array('s'=>'No group created'),$_smarty_tpl);?>

</p>
<?php }?><?php }} ?>
