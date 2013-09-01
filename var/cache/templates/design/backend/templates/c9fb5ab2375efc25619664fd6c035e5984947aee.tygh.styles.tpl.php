<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:23:33
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\views\statuses\components\styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16943522199f59d7487-35961453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9fb5ab2375efc25619664fd6c035e5984947aee' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\views\\statuses\\components\\styles.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16943522199f59d7487-35961453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'statuses' => 0,
    'status' => 0,
    'status_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522199f5bf61a4_22867164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522199f5bf61a4_22867164')) {function content_522199f5bf61a4_22867164($_smarty_tpl) {?><style type="text/css">
<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? @constant('STATUSES_ORDER') : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable(fn_get_statuses($_smarty_tpl->tpl_vars['type']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['statuses']->value){?>
    <?php  $_smarty_tpl->tpl_vars["status_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["status_data"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["status_data"]->key => $_smarty_tpl->tpl_vars["status_data"]->value){
$_smarty_tpl->tpl_vars["status_data"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["status_data"]->key;
?>
        .<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 {
            .buttonBackground(lighten(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
, 15%), darken(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
, 5%));
        }
    <?php } ?>
<?php }?>
</style>
<?php }} ?>