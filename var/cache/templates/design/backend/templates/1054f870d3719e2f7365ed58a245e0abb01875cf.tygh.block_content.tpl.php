<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:24:50
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\views\block_manager\components\block_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:480052219a42ccafc8-95960684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1054f870d3719e2f7365ed58a245e0abb01875cf' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\views\\block_manager\\components\\block_content.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '480052219a42ccafc8-95960684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_scheme' => 0,
    'setting_data' => 0,
    'name' => 0,
    'block' => 0,
    'editable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219a42d03036_03632238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219a42d03036_03632238')) {function content_52219a42d03036_03632238($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['block_scheme']->value['content']){?><?php  $_smarty_tpl->tpl_vars['setting_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting_data']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['block_scheme']->value['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting_data']->key => $_smarty_tpl->tpl_vars['setting_data']->value){
$_smarty_tpl->tpl_vars['setting_data']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['setting_data']->key;
?><?php if ($_smarty_tpl->tpl_vars['setting_data']->value['type']!="function"){?><?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/setting_element.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('option'=>$_smarty_tpl->tpl_vars['setting_data']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value,'html_id'=>"block_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_content_".((string)$_smarty_tpl->tpl_vars['name']->value),'html_name'=>"block_data[content][".((string)$_smarty_tpl->tpl_vars['name']->value)."]",'editable'=>$_smarty_tpl->tpl_vars['editable']->value,'value'=>$_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value]), 0);?>
<?php }?><?php } ?><?php }?><?php }} ?>