<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:44:25
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\common\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1873852219ed9c3f0f5-77634419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8cf8a435cb7cfa90abf72c996b1ba591ca5c492' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\common\\image.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1873852219ed9c3f0f5-77634419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'href' => 0,
    'image_data' => 0,
    'image_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219ed9cb7358_08920396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219ed9cb7358_08920396')) {function content_52219ed9cb7358_08920396($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_image'));
?>
<?php $_smarty_tpl->tpl_vars["image_data"] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value){?><a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image']->value['image_path'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['href']->value){?>target="_blank"<?php }?>><?php }?><?php if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']){?><img <?php if ($_smarty_tpl->tpl_vars['image_id']->value){?>id="image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['generate_image']){?>class="spinner cm-generate-image" data-ca-image-path="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" /><?php }else{ ?><div class="no-image" style="width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><i class="glyph-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></div><?php }?><?php if ($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value){?></a><?php }?><?php }} ?>