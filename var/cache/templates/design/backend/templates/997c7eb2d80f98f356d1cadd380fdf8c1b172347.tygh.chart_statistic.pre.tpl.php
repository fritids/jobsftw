<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:24:16
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\addons\statistics\hooks\index\chart_statistic.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1948352219a2095aae1-84789726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997c7eb2d80f98f356d1cadd380fdf8c1b172347' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\addons\\statistics\\hooks\\index\\chart_statistic.pre.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1948352219a2095aae1-84789726',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219a20969c20_17301560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219a20969c20_17301560')) {function content_52219a20969c20_17301560($_smarty_tpl) {?><?php if (fn_check_view_permissions("statistics.reports","GET")){?>
	<div id="content_visits_chart">
	    <div id="dashboard_statistics_visits_chart" class="dashboard-statistics-chart spinner">
	    </div>
	</div>
<?php }?><?php }} ?>