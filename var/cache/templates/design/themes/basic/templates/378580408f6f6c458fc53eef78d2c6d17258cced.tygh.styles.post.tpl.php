<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:40
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\addons\hybrid_auth\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221405221954c5f46f2-12340268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '378580408f6f6c458fc53eef78d2c6d17258cced' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\addons\\hybrid_auth\\hooks\\index\\styles.post.tpl',
      1 => 1377345948,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '221405221954c5f46f2-12340268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221954c635713_64604406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221954c635713_64604406')) {function content_5221954c635713_64604406($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.style.php';
if (!is_callable('smarty_function_set_id')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_style(array('src'=>"addons/hybrid_auth/colorbox.css"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/hybrid_auth/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php echo smarty_function_style(array('src'=>"addons/hybrid_auth/colorbox.css"),$_smarty_tpl);?>
<?php }?><?php }} ?>