<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:43
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\addons\wishlist\hooks\profiles\my_account_menu.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115185221954f5aa842-08950939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdaefa1c3ca9e547442e93cfafbc4923f30e6499' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\addons\\wishlist\\hooks\\profiles\\my_account_menu.post.tpl',
      1 => 1377345955,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '115185221954f5aa842-08950939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'wishlist_count' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221954f61ac14_60971494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221954f61ac14_60971494')) {function content_5221954f61ac14_60971494($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('wishlist','wishlist'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><li><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("wishlist");?>
<?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0){?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/wishlist/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><li><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("wishlist");?>
<?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0){?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li><?php }?><?php }} ?>