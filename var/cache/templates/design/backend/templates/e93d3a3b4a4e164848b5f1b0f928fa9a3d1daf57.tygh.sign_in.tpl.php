<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:23:40
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\buttons\sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9341522199fc483be5-52272837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e93d3a3b4a4e164848b5f1b0f928fa9a3d1daf57' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\buttons\\sign_in.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9341522199fc483be5-52272837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522199fc494b47_04073520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522199fc494b47_04073520')) {function content_522199fc494b47_04073520($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>