<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:44
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\views\block_manager\render\grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2402252219550903c84-61011804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5a37061c9c67ea55ea2cbf4ff4c461d71a38227' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\views\\block_manager\\render\\grid.tpl',
      1 => 1377345941,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2402252219550903c84-61011804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grid' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219550931348_51499828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219550931348_51499828')) {function content_52219550931348_51499828($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']){?><div class="row"><?php }?>
    <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['width'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['offset']){?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
" >
        <?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A"&&$_smarty_tpl->tpl_vars['content']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php }?>
    </div>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']){?></div><?php }?><?php }} ?>