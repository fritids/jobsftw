<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:24:15
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1351652219a1fbd4fe3-08147450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fd054da722e76f65752c8aa4870081fff10920d' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\views\\index\\index.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1351652219a1fbd4fe3-08147450',
  'function' => 
  array (
    'get_orders' => 
    array (
      'parameter' => 
      array (
        'limit' => 5,
      ),
      'compiled' => '',
    ),
    'show_log_row' => 
    array (
      'parameter' => 
      array (
        'item' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'is_day' => 0,
    'orders_stat' => 0,
    'status' => 0,
    'time_from' => 0,
    'time_to' => 0,
    'params' => 0,
    'limit' => 0,
    'orders' => 0,
    'order' => 0,
    'order_statuses' => 0,
    'settings' => 0,
    'graphs' => 0,
    'chart' => 0,
    'graph' => 0,
    'date' => 0,
    'data' => 0,
    'general_stats' => 0,
    'order_by_statuses' => 0,
    'order_status' => 0,
    'url' => 0,
    'item' => 0,
    '_type' => 0,
    '_action' => 0,
    'logs' => 0,
    'show_welcome' => 0,
    'company_2' => 0,
    'company_1' => 0,
    'config' => 0,
    'auth' => 0,
    'user_data' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219a2020c0e2_27643514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219a2020c0e2_27643514')) {function content_52219a2020c0e2_27643514($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\block.hook.php';
?><?php
fn_preload_lang_vars(array('previous_period','current_period','orders','sales','taxes','users_carts','order','by','no_data','recent_orders','statistics','active_products','out_of_stock_products','registered_customers','categories','vendors','web_pages','order_by_status','status','qty','shipping','recent_activity','order','dashboard','installer_complete_title','installer_complete_storefronts_description','installer_complete_storefront_description','installer_complete_storefront_description','settings_wizard','go_to_settings_wizard','installer_complete_storefronts_configuring','installer_complete_administrator_info','installer_complete_thank_you','close'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php $_smarty_tpl->tpl_vars["show_latest_orders"] = new Smarty_variable(fn_check_permissions("orders",'manage','admin'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_orders"] = new Smarty_variable(fn_check_permissions("sales_reports",'reports','admin'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_inventory"] = new Smarty_variable(fn_check_permissions("products",'manage','admin'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_users"] = new Smarty_variable(fn_check_permissions("profiles",'manage','admin'), null, 0);?>

<script type="text/javascript">
//<![CDATA[
(function(_, $) {

    _.drawChart = function(is_day) {
        if (typeof google == "undefined") {
            return false;
        }

        function get_data(div) {
            var id = $(div).attr('id');
            var dataTable = new google.visualization.DataTable();
            if (is_day) {
                dataTable.addColumn('timeofday', 'Date');
            } else {
                dataTable.addColumn('date', 'Date');
            }
            dataTable.addColumn('number', '<?php echo $_smarty_tpl->__("previous_period");?>
');
            dataTable.addColumn('number', '<?php echo $_smarty_tpl->__("current_period");?>
');
            dataTable.addRows(_.chart_data[id]);

            var dataView = new google.visualization.DataView(dataTable);
            dataView.setColumns([0, 1, 2]);

            return dataView;
        }

        var options = {
            chartArea: {
                left: 7,
                top: 10,
                width: 556,
                height: 208
            },
            colors: ['#f491a5','#8fd1ff'],
            tooltip: {
                showColorCode: true
            },
            lineWidth: 4,
            hAxis: {
                baselineColor: '#e1e1e1',
                textStyle: {
                    color: '#a1a1a1',
                    fontSize: 11
                },
                gridlines: {
                    count: 6
                }
            },
            legend: {
                position: 'none'
            },
            pointSize: 10,
            vAxis: {
                minValue: 0,
                baselineColor: '#e1e1e1',
                textPosition: 'in',
                textStyle: {
                    color: '#a1a1a1',
                    fontSize: 11
                },
                gridlines: {
                    count: 10
                }
            }
        };
        if (!is_day) {
            options.hAxis.format = 'MMM d';
        }

        $('.dashboard-statistics-chart:visible').each(function(i, div) {
            var dataView = get_data(div);
            var chart = new google.visualization.AreaChart(div);
            chart.draw(dataView, options);
        });

        $('#statistics_tabs .tabs li').on('click', function() {
            $('.dashboard-statistics-chart:visible').each(function(i, div) {
                var dataView = get_data(div);
                var chart = new google.visualization.AreaChart(div);
                chart.draw(dataView, options);
            });
        });
    }

    $(document).ready(function() {
        $.getScript('//www.google.com/jsapi', function() {
            setTimeout(function() { // do not remove it - otherwise it will be slow in ff
                google.load('visualization', '1.0', {
                    packages: ['corechart'],
                    callback: function() {
                        _.drawChart(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
);
                    }
                });
            }, 0);
        });

    });
}(Tygh, Tygh.$));
//]]>
</script>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:index")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:index"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="dashboard" id="dashboard">
    <table class="dashboard-card-table">
        <tbody>
            <tr>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:finance_statistic")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:finance_statistic"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (!empty($_smarty_tpl->tpl_vars['orders_stat']->value['orders'])){?>
                    <td>
                        <div class="dashboard-card">
                            <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("orders");?>
</div>
                            <div class="dashboard-card-content">
                                <h3><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['orders_stat']->value['orders']), ENT_QUOTES, 'UTF-8');?>
</h3><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['orders_stat']->value['prev_orders']), ENT_QUOTES, 'UTF-8');?>
, <?php if ($_smarty_tpl->tpl_vars['orders_stat']->value['diff']['orders_count']>0){?>+<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orders_stat']->value['diff']['orders_count'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                        </div>
                    </td>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['orders_stat']->value['orders_total'])){?>
                    <td>
                        <div class="dashboard-card">
                            <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("sales");?>
</div>
                            <div class="dashboard-card-content">
                                <h3><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['orders_stat']->value['orders_total']['totally_paid']), 0);?>
</h3><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['orders_stat']->value['prev_orders_total']['totally_paid']), 0);?>
, <?php if ($_smarty_tpl->tpl_vars['orders_stat']->value['orders_total']['totally_paid']>$_smarty_tpl->tpl_vars['orders_stat']->value['prev_orders_total']['totally_paid']){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['orders_stat']->value['diff']['sales'];?>
%
                            </div>
                        </div>
                    </td>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['orders_stat']->value['taxes'])){?>
                    <td>
                        <div class="dashboard-card">
                            <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("taxes");?>
</div>
                            <div class="dashboard-card-content">
                                <h3><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['orders_stat']->value['taxes']['subtotal']), 0);?>
</h3><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['orders_stat']->value['taxes']['prev_subtotal']), 0);?>
, <?php if ($_smarty_tpl->tpl_vars['orders_stat']->value['taxes']['subtotal']>$_smarty_tpl->tpl_vars['orders_stat']->value['taxes']['prev_subtotal']){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['orders_stat']->value['taxes']['diff'];?>
%
                            </div>
                        </div>
                    </td>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['orders_stat']->value['abandoned_cart_total'])){?>
                    <td>
                        <div class="dashboard-card">
                            <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("users_carts");?>
</div>
                            <div class="dashboard-card-content">
                                <h3><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orders_stat']->value['abandoned_cart_total'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
</h3><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orders_stat']->value['prev_abandoned_cart_total'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
, <?php if ($_smarty_tpl->tpl_vars['orders_stat']->value['abandoned_cart_total']>$_smarty_tpl->tpl_vars['orders_stat']->value['prev_abandoned_cart_total']){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['orders_stat']->value['diff']['abandoned_carts'];?>
%
                            </div>
                        </div>
                    </td>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:finance_statistic"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </tr>
        </tbody>
    </table>

    <?php if (!is_callable('smarty_modifier_date_format')) include 'C:\Dropbox\www\favishop\app\lib\other\smarty\plugins\modifier.date_format.php';
?><?php if (!function_exists('smarty_template_function_get_orders')) {
    function smarty_template_function_get_orders($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['get_orders']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
        <?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array('status'=>$_smarty_tpl->tpl_vars['status']->value,'time_from'=>$_smarty_tpl->tpl_vars['time_from']->value,'time_to'=>$_smarty_tpl->tpl_vars['time_to']->value,'period'=>'C'), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['orders'] = new Smarty_variable(fn_get_orders($_smarty_tpl->tpl_vars['params']->value,$_smarty_tpl->tpl_vars['limit']->value), null, 0);?>

        <table class="table table-middle table-last-td-align-right">
            <tbody>
            <?php  $_smarty_tpl->tpl_vars["order"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["order"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["order"]->key => $_smarty_tpl->tpl_vars["order"]->value){
$_smarty_tpl->tpl_vars["order"]->_loop = true;
?>
                <tr>
                    <td>
                        <span class="label btn-info o-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['order']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['order']->value['status']]['description'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </td>
                    <td><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</a> <?php echo $_smarty_tpl->__("by");?>
 <?php if ($_smarty_tpl->tpl_vars['order']->value['user_id']){?><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['order']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['order']->value['user_id']){?></a><?php }?></td>
                    <td><span class="date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span></td>
                    <td><h4><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['order']->value['total']), 0);?>
</h4></td>
                </tr>
            <?php }
if (!$_smarty_tpl->tpl_vars["order"]->_loop) {
?>
                <tr><td><?php echo $_smarty_tpl->__("no_data");?>
</td></tr>
            <?php } ?>
            </tbody>
        </table>
    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


    <div class="dashboard-row">
        <?php if (!empty($_smarty_tpl->tpl_vars['order_statuses']->value)){?>
            <div class="dashboard-recent-orders cm-j-tabs tabs" data-ca-width="500">
                <h4><?php echo $_smarty_tpl->__("recent_orders");?>
</h4>
                <ul class="nav nav-pills">
                    <li id="tab_recent_all" class="cm-active cm-js"><a href="#status_all" data-toggle="tab">All</a></li>
                    <?php  $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["status"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["status"]->key => $_smarty_tpl->tpl_vars["status"]->value){
$_smarty_tpl->tpl_vars["status"]->_loop = true;
?>
                        <li id="tab_recent_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value['status'], ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a href="#status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value['status'], ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                    <?php } ?>
                </ul>

                <div class="tab-content cm-tabs-content">
                    <div class="tab-pane" id="content_tab_recent_all">
                        <?php smarty_template_function_get_orders($_smarty_tpl,array('status'=>''));?>

                    </div>
                    <?php  $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["status"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["status"]->key => $_smarty_tpl->tpl_vars["status"]->value){
$_smarty_tpl->tpl_vars["status"]->_loop = true;
?>
                        <div class="tab-pane" id="content_tab_recent_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value['status'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php smarty_template_function_get_orders($_smarty_tpl,array('status'=>$_smarty_tpl->tpl_vars['status']->value['status']));?>

                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['graphs']->value)){?>
            <div class="dashboard-statistics">
                <h4>
                    <?php echo $_smarty_tpl->__("statistics");?>

                </h4>
                 <?php $_smarty_tpl->_capture_stack[0][] = array("chart_tabs", null, null); ob_start(); ?>
                <div id="content_sales_chart">
                    <div id="dashboard_statistics_sales_chart" class="dashboard-statistics-chart spinner">
                    </div>
                </div>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:chart_statistic")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:chart_statistic"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:chart_statistic"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <div id="statistics_tabs">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('content'=>Smarty::$_smarty_vars['capture']['chart_tabs']), 0);?>

                    <script>
                        Tygh.chart_data = {
                            <?php  $_smarty_tpl->tpl_vars["graph"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["graph"]->_loop = false;
 $_smarty_tpl->tpl_vars["chart"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['graphs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["graph"]->key => $_smarty_tpl->tpl_vars["graph"]->value){
$_smarty_tpl->tpl_vars["graph"]->_loop = true;
 $_smarty_tpl->tpl_vars["chart"]->value = $_smarty_tpl->tpl_vars["graph"]->key;
?>
                                '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart']->value, ENT_QUOTES, 'UTF-8');?>
': [
                                    <?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_smarty_tpl->tpl_vars["date"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['graph']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
 $_smarty_tpl->tpl_vars["date"]->value = $_smarty_tpl->tpl_vars["data"]->key;
?>
                                        [<?php if ($_smarty_tpl->tpl_vars['is_day']->value){?>[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'UTF-8');?>
, 0, 0, 0]<?php }else{ ?>new Date(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'UTF-8');?>
)<?php }?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['prev'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['cur'], ENT_QUOTES, 'UTF-8');?>
],
                                    <?php } ?>
                                ],
                            <?php } ?>
                        };
                        Tygh.drawChart(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
);
                    </script>
                <!--statistics_tabs--></div>
            </div>
        <?php }?>
    </div>

    <div class="dashboard-row-bottom">
        <div class="dashboard-tables">
            <table class="dashboard-card-table dashboard-card-table-center nowrap">
                <tbody>
                    <tr>
                        <?php if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['products'])){?>
                            <td>
                                <div class="dashboard-card">
                                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("active_products");?>
</div>
                                    <div class="dashboard-card-content">
                                        <h3><a href="<?php echo htmlspecialchars(fn_url("products.manage?status=A"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['products']['total_products']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dashboard-card">
                                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("out_of_stock_products");?>
</div>
                                    <div class="dashboard-card-content">
                                        <h3><a href="<?php echo htmlspecialchars(fn_url("products.manage?amount_from=&amount_to=0&tracking[0]=B&tracking[1]=O"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['products']['out_of_stock_products']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                                    </div>
                                </div>
                            </td>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['customers'])){?>
                            <td>
                                <div class="dashboard-card">
                                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("registered_customers");?>
</div>
                                    <div class="dashboard-card-content">
                                        <h3><a href="<?php echo htmlspecialchars(fn_url("profiles.manage?user_type=C"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['customers']['registered_customers']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                                    </div>
                                </div>
                            </td>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['categories'])){?>
                            <td>
                                <div class="dashboard-card">
                                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("categories");?>
</div>
                                    <div class="dashboard-card-content">
                                        <h3><a href="<?php echo htmlspecialchars(fn_url("categories.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['categories']['total_categories']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                                    </div>
                                </div>
                            </td>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['companies'])){?>
                            <td>
                                <div class="dashboard-card">
                                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendors");?>
</div>
                                    <div class="dashboard-card-content">
                                        <h3><a href="<?php echo htmlspecialchars(fn_url("companies.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['companies']['total_companies']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                                    </div>
                                </div>
                            </td>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['pages'])){?>
                            <td>
                                <div class="dashboard-card">
                                    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("web_pages");?>
</div>
                                    <div class="dashboard-card-content">
                                        <h3><a href="<?php echo htmlspecialchars(fn_url("pages.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['general_stats']->value['pages']['total_pages']), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                                    </div>
                                </div>
                            </td>
                        <?php }?>
                    </tr>
                </tbody>
            </table>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:order_statistic")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:order_statistic"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:order_statistic"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php if (fn_check_view_permissions("orders.manage","GET")){?>
                <div class="dashboard-table dashboard-table-order-by-statuses">
                    <h4><?php echo $_smarty_tpl->__("order_by_status");?>
</h4>
                     <div class="table-wrap" id="dashboard_order_by_status">
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="25%"><?php echo $_smarty_tpl->__("status");?>
</th>
                                <th width="25%"><?php echo $_smarty_tpl->__("qty");?>
</th>
                                <th width="25%"><?php echo $_smarty_tpl->__('total');?>
</th>
                                <th width="25%"><?php echo $_smarty_tpl->__("shipping");?>
</th>
                            </tr>
                            </thead>
                        </table>
                        <div class="scrollable-table">
                        <table class="table table-striped">
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars["order_status"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["order_status"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_by_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["order_status"]->key => $_smarty_tpl->tpl_vars["order_status"]->value){
$_smarty_tpl->tpl_vars["order_status"]->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url("orders.manage?is_search=Y&period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status[]=".((string)$_smarty_tpl->tpl_vars['order_status']->value['status'])), null, 0);?>
                                    <tr>
                                        <td width="25%"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['status_name'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                                        <td width="25%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['count'], ENT_QUOTES, 'UTF-8');?>
</td>
                                        <td width="25%"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['order_status']->value['total']), 0);?>
</td>
                                        <td width="25%"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['order_status']->value['shipping']), 0);?>
</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    <!--dashboard_order_by_status--></div>
                </div>
            <?php }?>
        </div>

        <?php if (fn_check_view_permissions("logs.manage","GET")){?>
            <div class="dashboard-activity">
                <div class="pull-right"><a href="<?php echo htmlspecialchars(fn_url("logs.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__('show_all');?>
</a></div>
                <h4><?php echo $_smarty_tpl->__("recent_activity");?>
</h4>
                <?php if (!is_callable('smarty_block_hook')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\Dropbox\www\favishop\app\lib\other\smarty\plugins\modifier.date_format.php';
?><?php if (!function_exists('smarty_template_function_show_log_row')) {
    function smarty_template_function_show_log_row($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['show_log_row']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value){?>
                        <div class="item">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:recent_activity")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:recent_activity"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->tpl_vars['_type'] = new Smarty_variable("log_type_".((string)$_smarty_tpl->tpl_vars['item']->value['type']), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['_action'] = new Smarty_variable("log_action_".((string)$_smarty_tpl->tpl_vars['item']->value['action']), null, 0);?>

                                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['_type']->value);?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['action']){?>&nbsp;(<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['_action']->value);?>
)<?php }?>:

                                <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=="users"&&fn_check_view_permissions(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")){?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['content']['id']){?><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['user'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['content']['id']){?></a><?php }?><br>
                                    
                                <?php }elseif($_smarty_tpl->tpl_vars['item']->value['type']=="orders"&&fn_check_view_permissions(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")){?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['status'], ENT_QUOTES, 'UTF-8');?>
<br>
                                    <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['order'], ENT_QUOTES, 'UTF-8');?>
</a><br>
                                <?php }elseif($_smarty_tpl->tpl_vars['item']->value['type']=="products"&&fn_check_view_permissions(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")){?>
                                    <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['product'], ENT_QUOTES, 'UTF-8');?>
</a><br>

                                <?php }elseif($_smarty_tpl->tpl_vars['item']->value['type']=="categories"&&fn_check_view_permissions(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")){?>
                                    <a href="<?php echo htmlspecialchars(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['category'], ENT_QUOTES, 'UTF-8');?>
</a><br>                        
                                <?php }?>

                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:recent_activity_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:recent_activity_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:recent_activity_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <span class="date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:recent_activity"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                    <?php }?>
                <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


                <div class="dashboard-activity-list">
                    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
                        <?php smarty_template_function_show_log_row($_smarty_tpl,array('item'=>$_smarty_tpl->tpl_vars['item']->value));?>

                    <?php } ?>
                </div>
            </div>
        <?php }?>
    </div>
<!--dashboard--></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:index"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"dashboard_date_picker",'extra_class'=>"pull-right offset1",'data_url'=>fn_url("index.index"),'result_ids'=>"dashboard",'start_date'=>$_smarty_tpl->tpl_vars['time_from']->value,'end_date'=>$_smarty_tpl->tpl_vars['time_to']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('no_sidebar'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'title'=>__("dashboard"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'tools'=>Smarty::$_smarty_vars['capture']['tools']), 0);?>


<?php if ($_smarty_tpl->tpl_vars['show_welcome']->value){?>
    <a id="welcome_page" class="cm-dialog-opener cm-dialog-auto-size hidden" data-ca-target-id="after_install_dialog"></a>

    <div class="hidden" title="<?php echo $_smarty_tpl->__("installer_complete_title");?>
" id="after_install_dialog">
        <?php $_smarty_tpl->tpl_vars["company_1"] = new Smarty_variable(fn_get_company_data("1"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["company_2"] = new Smarty_variable(fn_get_company_data("2"), null, 0);?>

        <div class="store-mode welcome-screen">
        <?php if (fn_allowed_for("ULTIMATE")){?>
        <p>
            <?php if ($_smarty_tpl->tpl_vars['company_2']->value){?>
                <?php echo $_smarty_tpl->__("installer_complete_storefronts_description");?>
:
            <?php }else{ ?>
                <?php echo $_smarty_tpl->__("installer_complete_storefront_description");?>
:
            <?php }?> 
        </p>
        <p>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_1']->value['company'], ENT_QUOTES, 'UTF-8');?>
: <a href="http://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_1']->value['storefront'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">http://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_1']->value['storefront'], ENT_QUOTES, 'UTF-8');?>
</a><br>
            <?php if ($_smarty_tpl->tpl_vars['company_2']->value){?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_2']->value['company'], ENT_QUOTES, 'UTF-8');?>
: <a href="http://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_2']->value['storefront'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">http://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_2']->value['storefront'], ENT_QUOTES, 'UTF-8');?>
</a><br>
            <?php }?>
        </p>
            <br>
        <?php }?>

        <?php if (fn_allowed_for("MULTIVENDOR")){?>
        <p><?php echo $_smarty_tpl->__("installer_complete_storefront_description");?>
:</p>
        <p>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
: <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['http_location']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['http_location']), ENT_QUOTES, 'UTF-8');?>
</a><br>
        </p>
        <?php }?>

        <p>
            <?php $_smarty_tpl->_capture_stack[0][] = array("wizard_link", null, null); ob_start(); ?>
                <a class="cm-dialog-opener cm-ajax btn btn-primary" data-ca-target-id="content_settings_wizard" title="<?php echo $_smarty_tpl->__("settings_wizard");?>
" href="<?php echo htmlspecialchars(fn_url("settings_wizard.view?return_url=".((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("go_to_settings_wizard");?>
</a>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->__("installer_complete_storefronts_configuring");?>

        </p>

        <div class="well">
            <?php $_smarty_tpl->tpl_vars['user_data'] = new Smarty_variable(fn_get_user_info($_smarty_tpl->tpl_vars['auth']->value['user_id']), null, 0);?>
            <?php echo $_smarty_tpl->__("installer_complete_administrator_info",array('[email]'=>$_smarty_tpl->tpl_vars['user_data']->value['email']));?>

        </div>

        <p>
            <?php echo $_smarty_tpl->__("installer_complete_thank_you");?>

        </p>

        </div>
        <div class="buttons-container">
            <input type="button" value="<?php echo $_smarty_tpl->__("close");?>
" class="btn cm-dialog-closer">
            <?php echo Smarty::$_smarty_vars['capture']['wizard_link'];?>

        </div>
    </div>

    <script type="text/javascript">
        Tygh.$(document).ready(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

            Tygh.$('#welcome_page').trigger('click');
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
    </script>
<?php }?><?php }} ?>