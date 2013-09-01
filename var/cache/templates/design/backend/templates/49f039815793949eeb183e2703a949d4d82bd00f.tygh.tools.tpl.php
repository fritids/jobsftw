<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:44:07
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\common\tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3257752219ec7ea8964-59184084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49f039815793949eeb183e2703a949d4d82bd00f' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\common\\tools.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3257752219ec7ea8964-59184084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'skip_check_permissions' => 0,
    'tools_list' => 0,
    'tool_meta' => 0,
    'hide_tools' => 0,
    'override_meta' => 0,
    'link_text' => 0,
    'icon' => 0,
    'caret' => 0,
    'prefix' => 0,
    'hide_actions' => 0,
    'runtime' => 0,
    'tool_href' => 0,
    'tool_id' => 0,
    'tool_onclick' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219ec8072082_68312340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219ec8072082_68312340')) {function content_52219ec8072082_68312340($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['skip_check_permissions']->value||fn_check_view_permissions($_smarty_tpl->tpl_vars['tools_list']->value)){?>
<div class="btn-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tool_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['hide_tools']->value&&$_smarty_tpl->tpl_vars['tools_list']->value){?>
    <a class="<?php if ($_smarty_tpl->tpl_vars['override_meta']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['override_meta']->value, ENT_QUOTES, 'UTF-8');?>
<?php }else{ ?>btn<?php }?> dropdown-toggle" data-toggle="dropdown">
        <?php if ($_smarty_tpl->tpl_vars['link_text']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['icon']->value){?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['caret']->value){?><span class="caret"></span><?php }?>
    </a>
    <ul id="tools_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-menu cm-smart-position">
        <?php echo $_smarty_tpl->tpl_vars['tools_list']->value;?>

    </ul>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_actions']->value){?>
        <?php if (!($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!fn_check_view_permissions($_smarty_tpl->tpl_vars['tool_href']->value))){?>
            <a class="btn cm-tooltip" <?php if ($_smarty_tpl->tpl_vars['tool_id']->value){?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tool_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['tool_href']->value){?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['tool_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['tool_onclick']->value){?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tool_onclick']->value, ENT_QUOTES, 'UTF-8');?>
; return false;"<?php }?> <?php if ($_smarty_tpl->tpl_vars['title']->value){?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['icon']->value){?><i class="icon-plus"></i><?php }?>
                <?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>

            </a>
        <?php }?>
    <?php }?>
</div>
<?php }?><?php }} ?>