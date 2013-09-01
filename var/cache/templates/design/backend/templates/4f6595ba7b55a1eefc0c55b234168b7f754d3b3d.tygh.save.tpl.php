<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:52:33
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\buttons\save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5485221a0c14e2bc6-69531740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f6595ba7b55a1eefc0c55b234168b7f754d3b3d' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\buttons\\save.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5485221a0c14e2bc6-69531740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221a0c14fca12_85393274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221a0c14fca12_85393274')) {function content_5221a0c14fca12_85393274($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>