<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:39
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224275221954b972a00-33634887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '181967fe62cbb785e5e9a5fdb262672eb2e52f47' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\meta.tpl',
      1 => 1377345941,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '224275221954b972a00-33634887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'display_base_href' => 0,
    'config' => 0,
    'meta_description' => 0,
    'location_data' => 0,
    'meta_keywords' => 0,
    'store_trigger' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221954bac7f51_68593655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221954bac7f51_68593655')) {function content_5221954bac7f51_68593655($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:meta")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:meta"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['display_base_href']->value){?>
<base href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/" />
<?php }?>
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo htmlspecialchars(@constant('CHARSET'), ENT_QUOTES, 'UTF-8');?>
" />
<meta name="description" content="<?php echo htmlspecialchars((($tmp = @html_entity_decode($_smarty_tpl->tpl_vars['meta_description']->value,@constant('ENT_COMPAT'),"UTF-8"))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<meta name="keywords" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['meta_keywords']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_keywords'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<meta name="mode" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_trigger']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:meta"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="meta.tpl" id="<?php echo smarty_function_set_id(array('name'=>"meta.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:meta")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:meta"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['display_base_href']->value){?>
<base href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/" />
<?php }?>
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo htmlspecialchars(@constant('CHARSET'), ENT_QUOTES, 'UTF-8');?>
" />
<meta name="description" content="<?php echo htmlspecialchars((($tmp = @html_entity_decode($_smarty_tpl->tpl_vars['meta_description']->value,@constant('ENT_COMPAT'),"UTF-8"))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<meta name="keywords" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['meta_keywords']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_keywords'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<meta name="mode" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_trigger']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:meta"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }} ?>