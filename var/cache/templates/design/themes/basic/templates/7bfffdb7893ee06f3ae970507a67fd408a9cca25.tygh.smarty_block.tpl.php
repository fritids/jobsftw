<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:45
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\blocks\smarty_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70885221955104b730-78087599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bfffdb7893ee06f3ae970507a67fd408a9cca25' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\blocks\\smarty_block.tpl',
      1 => 1377761065,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '70885221955104b730-78087599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219551096656_99371487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219551096656_99371487')) {function content_52219551096656_99371487($_smarty_tpl) {?><?php if (!is_callable('smarty_function_eval_string')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.eval_string.php';
if (!is_callable('smarty_function_set_id')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><!--<div class="wysiwyg-content">-->
	<?php echo smarty_function_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>

<!--</div>--><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="blocks/smarty_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/smarty_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><!--<div class="wysiwyg-content">-->
	<?php echo smarty_function_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>

<!--</div>--><?php }?><?php }} ?>