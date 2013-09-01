<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:24:39
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\buttons\save_cancel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1561352219a3735d834-92594936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e149b993f8d3c75efd6052611f8b5e773095f754' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\buttons\\save_cancel.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1561352219a3735d834-92594936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_target_id' => 0,
    'but_target_form' => 0,
    'save' => 0,
    'but_name' => 0,
    'but_href' => 0,
    'cancel_action' => 0,
    'r' => 0,
    'hide_first_button' => 0,
    'but_text' => 0,
    'but_label' => 0,
    'but_onclick' => 0,
    'but_role' => 0,
    'but_meta' => 0,
    'hide_second_button' => 0,
    'but_label2' => 0,
    'extra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219a3743efb4_04736475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219a3743efb4_04736475')) {function content_52219a3743efb4_04736475($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save','save_and_close','create','create_and_close','cancel'));
?>
<?php if ($_smarty_tpl->tpl_vars['but_target_id']->value||$_smarty_tpl->tpl_vars['but_target_form']->value){?>
<?php $_smarty_tpl->tpl_vars["but_role"] = new Smarty_variable("submit-link", null, 0);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars["but_role"] = new Smarty_variable("button_main", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['save']->value){?>
    <?php $_smarty_tpl->tpl_vars["but_label"] = new Smarty_variable($_smarty_tpl->__("save"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["but_label2"] = new Smarty_variable($_smarty_tpl->__("save_and_close"), null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars["but_label"] = new Smarty_variable($_smarty_tpl->__("create"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["but_label2"] = new Smarty_variable($_smarty_tpl->__("create_and_close"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['but_name']->value){?><?php $_smarty_tpl->tpl_vars["r"] = new Smarty_variable($_smarty_tpl->tpl_vars['but_name']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["r"] = new Smarty_variable($_smarty_tpl->tpl_vars['but_href']->value, null, 0);?><?php }?>

<?php if ($_smarty_tpl->tpl_vars['cancel_action']->value=="close"){?>
    <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
<?php }?>

<?php if (fn_check_view_permissions($_smarty_tpl->tpl_vars['r']->value)){?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_first_button']->value){?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_label']->value : $tmp),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>"btn-primary ".((string)$_smarty_tpl->tpl_vars['but_meta']->value)), 0);?>

    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars["skip_or"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_second_button']->value&&$_smarty_tpl->tpl_vars['cancel_action']->value!="close"){?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_text'=>$_smarty_tpl->tpl_vars['but_label2']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>"cm-save-and-close btn-primary ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>

    <?php }?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars["skip_or"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['extra']->value){?>
    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

<?php }?>
<?php }} ?>