<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:44
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\views\block_manager\render\block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76655221955089ce35-70704728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527fc73a51a857194a496f82cd1d41ed28cb2980' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\views\\block_manager\\render\\block.tpl',
      1 => 1377345941,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '76655221955089ce35-70704728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
    'content_alignment' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522195508cf008_18192238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522195508cf008_18192238')) {function content_522195508cf008_18192238($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT'){?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']){?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'){?> float-right<?php }elseif($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT'){?>
    float-left<?php }?>">
<?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT'){?>
    </div>
<?php }?><?php }} ?>