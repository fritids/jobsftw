<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:23:39
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\common\loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27366522199fba146b9-09110681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cd37bf8fcc26ec8388d798fc2b83e8e43150f50' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\common\\loading_box.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '27366522199fba146b9-09110681',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522199fba1bb70_78327921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522199fba1bb70_78327921')) {function content_522199fba1bb70_78327921($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('loading'));
?>
<div id="ajax_loading_box" class="hidden ajax-loading-box">
    <strong><?php echo $_smarty_tpl->__("loading");?>
</strong>
</div>
<?php }} ?>