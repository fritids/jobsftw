<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:24:17
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\addons\news_and_emails\hooks\index\recent_activity_item.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1919052219a210126c2-50159000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f84d78150888e7321cebc15cce0130b2dd6743f9' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\addons\\news_and_emails\\hooks\\index\\recent_activity_item.post.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1919052219a210126c2-50159000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219a2102bd75_90626050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219a2102bd75_90626050')) {function content_52219a2102bd75_90626050($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['item']->value['type']=="news"){?>
    <a href="<?php echo htmlspecialchars(fn_url("news.update?news_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['news'], ENT_QUOTES, 'UTF-8');?>
</a><br>                        
<?php }?><?php }} ?>