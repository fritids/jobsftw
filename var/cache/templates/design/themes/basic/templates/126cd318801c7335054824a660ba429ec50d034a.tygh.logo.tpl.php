<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:44
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\blocks\static_templates\logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2029252219550ab87f0-03655909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '126cd318801c7335054824a660ba429ec50d034a' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\blocks\\static_templates\\logo.tpl',
      1 => 1377345941,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2029252219550ab87f0-03655909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'logos' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219550b365d3_34548384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219550b365d3_34548384')) {function content_52219550b365d3_34548384($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="logo-container">
    <a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_x'], ENT_QUOTES, 'UTF-8');?>
px; height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_y'], ENT_QUOTES, 'UTF-8');?>
px;" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" class="logo">
    </a>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="blocks/static_templates/logo.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/logo.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?>
<div class="logo-container">
    <a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_x'], ENT_QUOTES, 'UTF-8');?>
px; height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_y'], ENT_QUOTES, 'UTF-8');?>
px;" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" class="logo">
    </a>
</div><?php }?><?php }} ?>