<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:51
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\blocks\static_templates\copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629252219557894168-43964480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc65530f9b87e10a8bdd7d562fadce5de15e8a52' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\blocks\\static_templates\\copyright.tpl',
      1 => 1377785616,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1629252219557894168-43964480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522195579450d7_52072935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522195579450d7_52072935')) {function content_522195579450d7_52072935($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Dropbox\\www\\favishop\\app\\lib\\other\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('powered_by','product_link','copyright_shopping_cart','powered_by','product_link','copyright_shopping_cart'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<!--
<p class="bottom-copyright">&copy; <?php if (smarty_modifier_date_format(@constant('TIME'),"%Y")!=$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'UTF-8');?>
-<?php }?><?php echo htmlspecialchars(smarty_modifier_date_format(@constant('TIME'),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
. &nbsp;<?php echo $_smarty_tpl->__("powered_by");?>
 <a class="bottom-copyright" href="<?php echo $_smarty_tpl->__("product_link");?>
" target="_blank"><?php echo $_smarty_tpl->__("copyright_shopping_cart");?>
</a>
</p>
-->

<p class="bottom-copyright">
	Copyright &copy; 2013 eBili.ph. All Rights Reserved.
</p><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="blocks/static_templates/copyright.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/copyright.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?>
<!--
<p class="bottom-copyright">&copy; <?php if (smarty_modifier_date_format(@constant('TIME'),"%Y")!=$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'UTF-8');?>
-<?php }?><?php echo htmlspecialchars(smarty_modifier_date_format(@constant('TIME'),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
. &nbsp;<?php echo $_smarty_tpl->__("powered_by");?>
 <a class="bottom-copyright" href="<?php echo $_smarty_tpl->__("product_link");?>
" target="_blank"><?php echo $_smarty_tpl->__("copyright_shopping_cart");?>
</a>
</p>
-->

<p class="bottom-copyright">
	Copyright &copy; 2013 eBili.ph. All Rights Reserved.
</p><?php }?><?php }} ?>