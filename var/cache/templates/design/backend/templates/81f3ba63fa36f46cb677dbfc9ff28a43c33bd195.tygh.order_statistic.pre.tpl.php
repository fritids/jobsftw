<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:24:16
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\addons\statistics\hooks\index\order_statistic.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296152219a20c0dee3-05160612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81f3ba63fa36f46cb677dbfc9ff28a43c33bd195' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\addons\\statistics\\hooks\\index\\order_statistic.pre.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '296152219a20c0dee3-05160612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_terms' => 0,
    'term' => 0,
    'query' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219a20c7dd07_39196227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219a20c7dd07_39196227')) {function content_52219a20c7dd07_39196227($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('stat_top_search_terms','stat_search_term','qty','stat_results','empty'));
?>
<?php if (fn_check_view_permissions("statistics.reports","GET")){?>
    <div class="dashboard-table dashboard-table-top-search">
        <h4><?php echo $_smarty_tpl->__("stat_top_search_terms");?>
</h4>
        <div class="table-wrap">
            <table class="table">
                <thead>
                <tr>
                    <th width="50%"><?php echo $_smarty_tpl->__("stat_search_term");?>
</th>
                    <th width="20%" class="center"><?php echo $_smarty_tpl->__("qty");?>
</th>
                    <th width="30%" class="center"><?php echo $_smarty_tpl->__("stat_results");?>
</th>
                </tr>
                </thead>
            </table>
            <div class="scrollable-table">
            <table class="table table-striped">
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars["term"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["term"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_terms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["term"]->key => $_smarty_tpl->tpl_vars["term"]->value){
$_smarty_tpl->tpl_vars["term"]->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable(http_build_query($_smarty_tpl->tpl_vars['term']->value['search_string']), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url("products.search?".((string)$_smarty_tpl->tpl_vars['query']->value),'C'), null, 0);?>
                        <tr>
                            <td width="50%"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['term']->value['search_string']['q']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['term']->value['search_string']['q'], ENT_QUOTES, 'UTF-8');?>
<?php }else{ ?>-&nbsp;<?php echo $_smarty_tpl->__("empty");?>
&nbsp;-<?php }?></a></td>
                            <td width="20%" class="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['term']->value['count'], ENT_QUOTES, 'UTF-8');?>
</td>
                            <td width="30%" class="center"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['term']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
<?php }?><?php }} ?>