<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:24:16
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\addons\statistics\hooks\index\finance_statistic.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3025052219a20846123-81149755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14dacd2721551389502433db01434b87940b22d5' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\addons\\statistics\\hooks\\index\\finance_statistic.post.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3025052219a20846123-81149755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'visitors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219a20874880_34382605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219a20874880_34382605')) {function content_52219a20874880_34382605($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('visits'));
?>
<?php if (fn_check_view_permissions("statistics.reports","GET")){?>
	<td>
	    <div class="dashboard-card">
	        <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("visits");?>
</div>
	        <div class="dashboard-card-content">
	            <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitors']->value['total'], ENT_QUOTES, 'UTF-8');?>
</h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitors']->value['prev_total'], ENT_QUOTES, 'UTF-8');?>
, <?php if ($_smarty_tpl->tpl_vars['visitors']->value['total']>$_smarty_tpl->tpl_vars['visitors']->value['prev_total']){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['visitors']->value['diff'];?>
%
	        </div>
	    </div>
	</td>
<?php }?><?php }} ?>