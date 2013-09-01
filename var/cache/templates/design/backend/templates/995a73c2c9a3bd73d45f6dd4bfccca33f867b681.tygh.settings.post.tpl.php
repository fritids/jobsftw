<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:24:51
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\addons\twigmo\hooks\block_manager\settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1823852219a43405854-40676073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '995a73c2c9a3bd73d45f6dd4bfccca33f867b681' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\addons\\twigmo\\hooks\\block_manager\\settings.post.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1823852219a43405854-40676073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_twigmo_location' => 0,
    'html_id' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219a434242d3_58315320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219a434242d3_58315320')) {function content_52219a434242d3_58315320($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['is_twigmo_location']->value){?>
	<div class="control-group cm-no-hide-input">
		<label class="control-label" for="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_hide_header"><?php echo $_smarty_tpl->__('twgadmin_hide_header');?>
:</label>
        <div class="controls">
            <input type="hidden" name="block_data[properties][hide_header]" value="N">
            <input type="checkbox" class="checkbox" name="block_data[properties][hide_header]" value="Y" id="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_hide_header" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_header']&&$_smarty_tpl->tpl_vars['block']->value['properties']['hide_header']=="Y"){?>checked="checked"<?php }?> >
        </div>
	</div>
<?php }?><?php }} ?>