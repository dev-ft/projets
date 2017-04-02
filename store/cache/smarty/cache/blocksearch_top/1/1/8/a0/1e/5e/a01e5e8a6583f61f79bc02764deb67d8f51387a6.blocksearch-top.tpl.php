<?php /*%%SmartyHeaderCode:1874458c00a56d8ea48-05609785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01e5e8a6583f61f79bc02764deb67d8f51387a6' => 
    array (
      0 => 'C:\\wamp64\\www\\store\\themes\\blackhawk3.2\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1488977943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1874458c00a56d8ea48-05609785',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c01d6763df81_94369548',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c01d6763df81_94369548')) {function content_58c01d6763df81_94369548($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-md-3 col-sm-4 ">
	<form id="searchbox" method="get" action="http://localhost/store/recherche" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
