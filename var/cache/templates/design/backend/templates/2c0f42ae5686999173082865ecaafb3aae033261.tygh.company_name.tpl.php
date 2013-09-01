<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:44:07
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\views\companies\components\company_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1953152219ec7b122b3-63569431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c0f42ae5686999173082865ecaafb3aae033261' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\views\\companies\\components\\company_name.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1953152219ec7b122b3-63569431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'simple' => 0,
    '_company_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219ec7b449c1_98092677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219ec7b449c1_98092677')) {function content_52219ec7b449c1_98092677($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['object']->value['company_id']){?>
    <?php if (!$_smarty_tpl->tpl_vars['object']->value['company_name']){?>
        <?php $_smarty_tpl->tpl_vars['_company_name'] = new Smarty_variable(fn_get_company_name($_smarty_tpl->tpl_vars['object']->value['company_id']), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['simple']->value){?>
        <small class="muted"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
    <?php }else{ ?>
        <p class="muted"><small><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small></p>
    <?php }?>
<?php }?><?php }} ?>