<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:52:33
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\common\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27435221a0c149b403-59960035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e583e9e0806fb9f355401f575aecc49bad22a7' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\common\\tooltip.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '27435221a0c149b403-59960035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221a0c14b2908_79973670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221a0c14b2908_79973670')) {function content_5221a0c14b2908_79973670($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value){?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value){?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>