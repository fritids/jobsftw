<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:51
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\views\block_manager\render\location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2272252219557a48ce5-42435407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e08ddb9573d0bec056f8a1094035aa79f56eade8' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\views\\block_manager\\render\\location.tpl',
      1 => 1377351487,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2272252219557a48ce5-42435407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'containers' => 0,
    'show_entry_page' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219557adcbd3_33555237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219557adcbd3_33555237')) {function content_52219557adcbd3_33555237($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('choose_your_country'));
?>
<?php if ($_smarty_tpl->tpl_vars['containers']->value['top_panel']){?>
<div class="tygh-top-panel clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['top_panel'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['header']){?>
<div class="tygh-header clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['header'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['content']){?>
<div class="tygh-content clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['content'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['footer']){?>
<div class="tygh-footer clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['footer'];?>

</div>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")){?>
    
    <?php if ($_smarty_tpl->tpl_vars['show_entry_page']->value){?>
        <div id="entry_page"></div>
            <script type="text/javascript">
                $('#entry_page').ceDialog('open', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
href: fn_url('companies.entry_page'), resizable: false, title: '<?php echo $_smarty_tpl->__("choose_your_country");?>
', width: 325, height: 420, dialogClass: 'entry-page'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
            </script>
    <?php }?>
<?php }?>

<?php if (fn_check_meta_redirect($_REQUEST['meta_redirect_url'])){?>
    <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars(fn_url(fn_check_meta_redirect($_REQUEST['meta_redirect_url'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?><?php }} ?>