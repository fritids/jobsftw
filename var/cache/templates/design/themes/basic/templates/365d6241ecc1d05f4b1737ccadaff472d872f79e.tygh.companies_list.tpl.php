<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:51
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\blocks\companies_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26218522195571ca033-09991045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '365d6241ecc1d05f4b1737ccadaff472d872f79e' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\blocks\\companies_list.tpl',
      1 => 1377345941,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '26218522195571ca033-09991045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'k' => 0,
    'v' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219557271da1_13277366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219557271da1_13277366')) {function content_52219557271da1_13277366($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('view_all','view_all'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value['companies']){?>
    <ul>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value['companies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <li><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['k']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
    <?php } ?>
    </ul>

    <?php if (count($_smarty_tpl->tpl_vars['items']->value['companies'])<$_smarty_tpl->tpl_vars['items']->value['count']){?>
        <p class="right">
            <a class="extra-link" href="<?php echo htmlspecialchars(fn_url("companies.catalog"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_all");?>
</a>
        </p>
    <?php }?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="blocks/companies_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/companies_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value['companies']){?>
    <ul>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value['companies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <li><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['k']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
    <?php } ?>
    </ul>

    <?php if (count($_smarty_tpl->tpl_vars['items']->value['companies'])<$_smarty_tpl->tpl_vars['items']->value['count']){?>
        <p class="right">
            <a class="extra-link" href="<?php echo htmlspecialchars(fn_url("companies.catalog"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_all");?>
</a>
        </p>
    <?php }?>
<?php }?><?php }?><?php }} ?>