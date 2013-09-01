<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:52:32
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\common\subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126255221a0c0ef9299-05072009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03ec13b20fc71893b0181819d006ea6ce79f738b' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\common\\subheader.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '126255221a0c0ef9299-05072009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notes' => 0,
    'notes_id' => 0,
    'meta' => 0,
    'target' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221a0c0f3cfc0_26017567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221a0c0f3cfc0_26017567')) {function content_5221a0c0f3cfc0_26017567($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['notes']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>$_smarty_tpl->tpl_vars['notes']->value,'id'=>$_smarty_tpl->tpl_vars['notes_id']->value), 0);?>

<?php }?>
<h4 class="subheader <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['target']->value){?> hand<?php }?>" <?php if ($_smarty_tpl->tpl_vars['target']->value){?>data-toggle="collapse" data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['target']->value){?><span class="exicon-collapse"></span><?php }?>
</h4><?php }} ?>