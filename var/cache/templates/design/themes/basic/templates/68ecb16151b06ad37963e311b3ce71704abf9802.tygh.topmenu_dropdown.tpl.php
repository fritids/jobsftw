<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:45
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\blocks\topmenu_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31567522195512c22d1-68609512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68ecb16151b06ad37963e311b3ce71704abf9802' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\blocks\\topmenu_dropdown.tpl',
      1 => 1377747712,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '31567522195512c22d1-68609512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'item1' => 0,
    'block' => 0,
    'item1_url' => 0,
    'unique_elm_id' => 0,
    'childs' => 0,
    'subitems_count' => 0,
    'divider' => 0,
    'cols' => 0,
    'name' => 0,
    'item2' => 0,
    'item_url2' => 0,
    'dropdown_class' => 0,
    'item2_url' => 0,
    'item3' => 0,
    'item3_url' => 0,
    'config' => 0,
    'dropdown_id' => 0,
    'images_dir' => 0,
    '_cart_products' => 0,
    'p' => 0,
    'key' => 0,
    'force_items_deletion' => 0,
    'r_url' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52219551c4d3d6_38847661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52219551c4d3d6_38847661')) {function content_52219551c4d3d6_38847661($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_math')) include 'C:\\Dropbox\\www\\favishop\\app\\lib\\other\\smarty\\plugins\\function.math.php';
if (!is_callable('smarty_function_set_id')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_topmenu_view_more','text_topmenu_view_more','text_topmenu_more','items','for','cart_is_empty','items','cart_is_empty','view_cart','checkout','text_topmenu_view_more','text_topmenu_view_more','text_topmenu_more','items','for','cart_is_empty','items','cart_is_empty','view_cart','checkout'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if ($_smarty_tpl->tpl_vars['items']->value){?>
    <div class="wrap-dropdown-multicolumns">
        <ul class="dropdown-multicolumns clearfix">
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        
        <?php  $_smarty_tpl->tpl_vars["item1"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item1"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item1"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item1"]->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item1"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["item1"]->key => $_smarty_tpl->tpl_vars["item1"]->value){
$_smarty_tpl->tpl_vars["item1"]->_loop = true;
 $_smarty_tpl->tpl_vars["item1"]->iteration++;
 $_smarty_tpl->tpl_vars["item1"]->last = $_smarty_tpl->tpl_vars["item1"]->iteration === $_smarty_tpl->tpl_vars["item1"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item1"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item1"]['last'] = $_smarty_tpl->tpl_vars["item1"]->last;
?>
            <?php $_smarty_tpl->tpl_vars["item1_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['item1_url']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable("topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['unique_elm_id']->value), null, 0);?>

            <?php $_smarty_tpl->tpl_vars["subitems_count"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["cols"] = new Smarty_variable(0, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['subitems_count']->value){?>
                <?php echo smarty_function_math(array('assign'=>"divider",'equation'=>"ceil(x / 6)",'x'=>$_smarty_tpl->tpl_vars['subitems_count']->value),$_smarty_tpl);?>

                <?php echo smarty_function_math(array('assign'=>"cols",'equation'=>"ceil(x / y)",'x'=>$_smarty_tpl->tpl_vars['subitems_count']->value,'y'=>$_smarty_tpl->tpl_vars['divider']->value),$_smarty_tpl);?>

            <?php }?>
            <li class="<?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]){?>nodrop<?php }elseif(fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)&&$_smarty_tpl->tpl_vars['cols']->value==6){?>fullwidth<?php }?><?php if ($_smarty_tpl->tpl_vars['item1']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type'])){?> cm-active<?php }?>">
                <a<?php if ($_smarty_tpl->tpl_vars['item1_url']->value){?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]){?> class="drop"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]){?><!--<i class="icon-down-micro">--></i><?php }?></a>

            <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]){?>

                <?php if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)){?>
                

                <div class="dropdown-1column">

                        <div class="col-1 firstcolumn lastcolumn">
                            <ul>
                            
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            
                            <?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item2"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item2"]->iteration=0;
 $_smarty_tpl->tpl_vars["item2"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value){
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
 $_smarty_tpl->tpl_vars["item2"]->iteration++;
 $_smarty_tpl->tpl_vars["item2"]->index++;
 $_smarty_tpl->tpl_vars["item2"]->first = $_smarty_tpl->tpl_vars["item2"]->index === 0;
 $_smarty_tpl->tpl_vars["item2"]->last = $_smarty_tpl->tpl_vars["item2"]->iteration === $_smarty_tpl->tpl_vars["item2"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['first'] = $_smarty_tpl->tpl_vars["item2"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['last'] = $_smarty_tpl->tpl_vars["item2"]->last;
?>
                                <?php $_smarty_tpl->tpl_vars["item_url2"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                <li<?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])){?> class="cm-active"<?php }?>><a<?php if ($_smarty_tpl->tpl_vars['item_url2']->value){?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_url2']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></li>
                            <?php } ?>
                            <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value){?>
                                <li class="alt-link"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a></li>
                            <?php }?>
                            
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            
                            </ul> 

                        </div>
                    </div>
                    
                <?php }else{ ?>
                
                    <?php if ($_smarty_tpl->tpl_vars['cols']->value==1){?>
                        <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-1column", null, 0);?>
                    <?php }elseif($_smarty_tpl->tpl_vars['cols']->value==6){?>
                        <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-fullwidth", null, 0);?>
                    <?php }else{ ?>
                        <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-".((string)$_smarty_tpl->tpl_vars['cols']->value)."columns", null, 0);?>
                    <?php }?>

                    <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item1']['index']>4&&$_smarty_tpl->getVariable('smarty')->value['foreach']['item1']['last']){?> drop-left<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        
                        <?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item2"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item2"]->iteration=0;
 $_smarty_tpl->tpl_vars["item2"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value){
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
 $_smarty_tpl->tpl_vars["item2"]->iteration++;
 $_smarty_tpl->tpl_vars["item2"]->index++;
 $_smarty_tpl->tpl_vars["item2"]->first = $_smarty_tpl->tpl_vars["item2"]->index === 0;
 $_smarty_tpl->tpl_vars["item2"]->last = $_smarty_tpl->tpl_vars["item2"]->iteration === $_smarty_tpl->tpl_vars["item2"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['first'] = $_smarty_tpl->tpl_vars["item2"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['last'] = $_smarty_tpl->tpl_vars["item2"]->last;
?>
                            <div class="col-1<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['index']%$_smarty_tpl->tpl_vars['cols']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['first']){?> firstcolumn<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['index']%$_smarty_tpl->tpl_vars['cols']->value==($_smarty_tpl->tpl_vars['cols']->value-1)||$_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['last']){?> lastcolumn<?php }?>">
                                <?php $_smarty_tpl->tpl_vars["item2_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                <h3<?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])){?> class="cm-active"<?php }?>><a<?php if ($_smarty_tpl->tpl_vars['item2_url']->value){?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></h3>

                                <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]){?>
                                <ul>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php  $_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value){
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                    <li<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])){?> class="cm-active"<?php }?>><a<?php if ($_smarty_tpl->tpl_vars['item3_url']->value){?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></li>
                                <?php } ?>
                                <?php if ($_smarty_tpl->tpl_vars['item2']->value['show_more']&&$_smarty_tpl->tpl_vars['item2_url']->value){?>
                                    <li class="alt-link"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a></li>
                                <?php }?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul> 
                                <?php }?>
                            </div>

                        <?php } ?>

                        <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value){?>
                        <div class="dropdown-bottom">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a>
                        </div>
                        <?php }?>
                        
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    </div>

                <?php }?>

            <?php }?>
            </li>
        <?php } ?>





<!--CART START-->
<?php $_smarty_tpl->tpl_vars["dropdown_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['snapping_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:cart_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:cart_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="dropdown-box cart-dropdown-box" id="cart_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <!--<a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" id="sw_dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-title cm-combination cm-combo-on cart-item-text">-->
    <a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" class="cart-item-text">
        
            <!--
            <?php if ($_SESSION['cart']['amount']){?>
                <i class="icon-basket filled"></i>
                <span class="minicart-title hand"><?php echo htmlspecialchars($_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>
 <?php echo $_smarty_tpl->__("for");?>
&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>
<i class="icon-down-micro"></i></span>
            <?php }else{ ?>
                <i class="icon-basket empty"></i>
                <span class="minicart-title empty-cart hand"><?php echo $_smarty_tpl->__("cart_is_empty");?>
<i class="icon-down-micro"></i></span>
            <?php }?>        
            -->
            <!--<i class="icon-basket filled"></i>-->
            <div class="icon-shopping-cart">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/custom/cart_icon.png">
            </div>
            <span class="minicart-title hand"><?php if ($_SESSION['cart']['amount']){?><?php echo htmlspecialchars($_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
<?php }else{ ?>0<?php }?>&nbsp;<?php echo mb_strtoupper($_smarty_tpl->__("items"), 'UTF-8');?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>

            <!--<i class="icon-down-micro"></i>-->
            </span>
        
    </a>
    <!--
    <div id="dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box popup-content hidden">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:minicart")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="cm-cart-content <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb"){?>cm-cart-content-thumb<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y"){?>cm-cart-content-delete<?php }?>">
                    <div class="cart-items">
                        <?php if ($_SESSION['cart']['amount']){?>
                            <table class="minicart-table">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:cart_status")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->tpl_vars["_cart_products"] = new Smarty_variable(array_reverse($_SESSION['cart']['products'],true), null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars["p"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p"]->key => $_smarty_tpl->tpl_vars["p"]->value){
$_smarty_tpl->tpl_vars["p"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["p"]->key;
?>
                                <?php if (!$_smarty_tpl->tpl_vars['p']->value['extra']['parent']){?>
                                <tr class="minicart-separator">
                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb"){?>
                                    <td style="width: 5%" class="cm-cart-item-thumb"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['p']->value['main_pair'],'no_ids'=>true), 0);?>
</td>
                                    <?php }?>
                                    <td style="width: 94%"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['p']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo fn_get_product_name($_smarty_tpl->tpl_vars['p']->value['product_id']);?>
</a>
                                    <p>
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['p']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0);?>

                                    </p></td>
                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y"){?>
                                    <td style="width: 1%" class="minicart-tools cm-cart-item-delete"><?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout']||$_smarty_tpl->tpl_vars['force_items_deletion']->value)&&!$_smarty_tpl->tpl_vars['p']->value['extra']['exclude_from_calculate']){?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);?>
<?php }?></td>
                                    <?php }?>
                                </tr>
                                <?php }?>
                                <?php } ?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:cart_status"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </table>
                        <?php }else{ ?>
                            <p class="center"><?php echo $_smarty_tpl->__("cart_is_empty");?>
</p>
                        <?php }?>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_bottom_buttons']=="Y"){?>
                    <div class="cm-cart-buttons buttons-container<?php if ($_SESSION['cart']['amount']){?> full-cart<?php }else{ ?> hidden<?php }?>">
                        <div class="view-cart-button">
                            <span class="button button-wrap-left"><span class="button button-wrap-right"><a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="view-cart"><?php echo $_smarty_tpl->__("view_cart");?>
</a></span></span>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_redirect']!="Y"){?>
                        <div class="float-right">
                            <span class="button-action button-wrap-left"><span class="button-action button-wrap-right"><a href="<?php echo htmlspecialchars(fn_url("checkout.checkout"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("checkout");?>
</a></span></span>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:minicart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    -->
<!--cart_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
-->
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:cart_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<!--CART END-->




        
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <div class="clear"></div>
    </div>
<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<script type="text/javascript">
//<![CDATA[
Tygh.$(document).ready(function(){
    var $ = Tygh.$;
    // set dropdown menu width
    $('.dropdown-1column').each(function() {
        var p = $(this).parents('li:first');
        if (p.length) {
            $(this).css('min-width', (p.width() + 10) + 'px');
        }
    });
    var global_offset = $('.wrap-dropdown-multicolumns').offset().top;
    $('.dropdown-fullwidth').each(function(){
        var offset = $(this).parent('.fullwidth').offset().top;
        $(this).css('top', offset - global_offset + 25 + 'px');
    });
});
//]]>
</script>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="blocks/topmenu_dropdown.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/topmenu_dropdown.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if ($_smarty_tpl->tpl_vars['items']->value){?>
    <div class="wrap-dropdown-multicolumns">
        <ul class="dropdown-multicolumns clearfix">
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        
        <?php  $_smarty_tpl->tpl_vars["item1"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item1"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item1"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item1"]->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item1"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["item1"]->key => $_smarty_tpl->tpl_vars["item1"]->value){
$_smarty_tpl->tpl_vars["item1"]->_loop = true;
 $_smarty_tpl->tpl_vars["item1"]->iteration++;
 $_smarty_tpl->tpl_vars["item1"]->last = $_smarty_tpl->tpl_vars["item1"]->iteration === $_smarty_tpl->tpl_vars["item1"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item1"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item1"]['last'] = $_smarty_tpl->tpl_vars["item1"]->last;
?>
            <?php $_smarty_tpl->tpl_vars["item1_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['item1_url']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable("topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['unique_elm_id']->value), null, 0);?>

            <?php $_smarty_tpl->tpl_vars["subitems_count"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["cols"] = new Smarty_variable(0, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['subitems_count']->value){?>
                <?php echo smarty_function_math(array('assign'=>"divider",'equation'=>"ceil(x / 6)",'x'=>$_smarty_tpl->tpl_vars['subitems_count']->value),$_smarty_tpl);?>

                <?php echo smarty_function_math(array('assign'=>"cols",'equation'=>"ceil(x / y)",'x'=>$_smarty_tpl->tpl_vars['subitems_count']->value,'y'=>$_smarty_tpl->tpl_vars['divider']->value),$_smarty_tpl);?>

            <?php }?>
            <li class="<?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]){?>nodrop<?php }elseif(fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)&&$_smarty_tpl->tpl_vars['cols']->value==6){?>fullwidth<?php }?><?php if ($_smarty_tpl->tpl_vars['item1']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type'])){?> cm-active<?php }?>">
                <a<?php if ($_smarty_tpl->tpl_vars['item1_url']->value){?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]){?> class="drop"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]){?><!--<i class="icon-down-micro">--></i><?php }?></a>

            <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]){?>

                <?php if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)){?>
                

                <div class="dropdown-1column">

                        <div class="col-1 firstcolumn lastcolumn">
                            <ul>
                            
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            
                            <?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item2"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item2"]->iteration=0;
 $_smarty_tpl->tpl_vars["item2"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value){
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
 $_smarty_tpl->tpl_vars["item2"]->iteration++;
 $_smarty_tpl->tpl_vars["item2"]->index++;
 $_smarty_tpl->tpl_vars["item2"]->first = $_smarty_tpl->tpl_vars["item2"]->index === 0;
 $_smarty_tpl->tpl_vars["item2"]->last = $_smarty_tpl->tpl_vars["item2"]->iteration === $_smarty_tpl->tpl_vars["item2"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['first'] = $_smarty_tpl->tpl_vars["item2"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['last'] = $_smarty_tpl->tpl_vars["item2"]->last;
?>
                                <?php $_smarty_tpl->tpl_vars["item_url2"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                <li<?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])){?> class="cm-active"<?php }?>><a<?php if ($_smarty_tpl->tpl_vars['item_url2']->value){?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_url2']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></li>
                            <?php } ?>
                            <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value){?>
                                <li class="alt-link"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a></li>
                            <?php }?>
                            
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            
                            </ul> 

                        </div>
                    </div>
                    
                <?php }else{ ?>
                
                    <?php if ($_smarty_tpl->tpl_vars['cols']->value==1){?>
                        <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-1column", null, 0);?>
                    <?php }elseif($_smarty_tpl->tpl_vars['cols']->value==6){?>
                        <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-fullwidth", null, 0);?>
                    <?php }else{ ?>
                        <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-".((string)$_smarty_tpl->tpl_vars['cols']->value)."columns", null, 0);?>
                    <?php }?>

                    <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item1']['index']>4&&$_smarty_tpl->getVariable('smarty')->value['foreach']['item1']['last']){?> drop-left<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        
                        <?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item2"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item2"]->iteration=0;
 $_smarty_tpl->tpl_vars["item2"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value){
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
 $_smarty_tpl->tpl_vars["item2"]->iteration++;
 $_smarty_tpl->tpl_vars["item2"]->index++;
 $_smarty_tpl->tpl_vars["item2"]->first = $_smarty_tpl->tpl_vars["item2"]->index === 0;
 $_smarty_tpl->tpl_vars["item2"]->last = $_smarty_tpl->tpl_vars["item2"]->iteration === $_smarty_tpl->tpl_vars["item2"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['first'] = $_smarty_tpl->tpl_vars["item2"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['last'] = $_smarty_tpl->tpl_vars["item2"]->last;
?>
                            <div class="col-1<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['index']%$_smarty_tpl->tpl_vars['cols']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['first']){?> firstcolumn<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['index']%$_smarty_tpl->tpl_vars['cols']->value==($_smarty_tpl->tpl_vars['cols']->value-1)||$_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['last']){?> lastcolumn<?php }?>">
                                <?php $_smarty_tpl->tpl_vars["item2_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                <h3<?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])){?> class="cm-active"<?php }?>><a<?php if ($_smarty_tpl->tpl_vars['item2_url']->value){?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></h3>

                                <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]){?>
                                <ul>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php  $_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value){
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                    <li<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])){?> class="cm-active"<?php }?>><a<?php if ($_smarty_tpl->tpl_vars['item3_url']->value){?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></li>
                                <?php } ?>
                                <?php if ($_smarty_tpl->tpl_vars['item2']->value['show_more']&&$_smarty_tpl->tpl_vars['item2_url']->value){?>
                                    <li class="alt-link"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a></li>
                                <?php }?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul> 
                                <?php }?>
                            </div>

                        <?php } ?>

                        <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value){?>
                        <div class="dropdown-bottom">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a>
                        </div>
                        <?php }?>
                        
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    </div>

                <?php }?>

            <?php }?>
            </li>
        <?php } ?>





<!--CART START-->
<?php $_smarty_tpl->tpl_vars["dropdown_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['snapping_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:cart_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:cart_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="dropdown-box cart-dropdown-box" id="cart_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <!--<a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" id="sw_dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-title cm-combination cm-combo-on cart-item-text">-->
    <a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" class="cart-item-text">
        
            <!--
            <?php if ($_SESSION['cart']['amount']){?>
                <i class="icon-basket filled"></i>
                <span class="minicart-title hand"><?php echo htmlspecialchars($_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>
 <?php echo $_smarty_tpl->__("for");?>
&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>
<i class="icon-down-micro"></i></span>
            <?php }else{ ?>
                <i class="icon-basket empty"></i>
                <span class="minicart-title empty-cart hand"><?php echo $_smarty_tpl->__("cart_is_empty");?>
<i class="icon-down-micro"></i></span>
            <?php }?>        
            -->
            <!--<i class="icon-basket filled"></i>-->
            <div class="icon-shopping-cart">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/custom/cart_icon.png">
            </div>
            <span class="minicart-title hand"><?php if ($_SESSION['cart']['amount']){?><?php echo htmlspecialchars($_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
<?php }else{ ?>0<?php }?>&nbsp;<?php echo mb_strtoupper($_smarty_tpl->__("items"), 'UTF-8');?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>

            <!--<i class="icon-down-micro"></i>-->
            </span>
        
    </a>
    <!--
    <div id="dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box popup-content hidden">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:minicart")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="cm-cart-content <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb"){?>cm-cart-content-thumb<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y"){?>cm-cart-content-delete<?php }?>">
                    <div class="cart-items">
                        <?php if ($_SESSION['cart']['amount']){?>
                            <table class="minicart-table">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:cart_status")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->tpl_vars["_cart_products"] = new Smarty_variable(array_reverse($_SESSION['cart']['products'],true), null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars["p"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p"]->key => $_smarty_tpl->tpl_vars["p"]->value){
$_smarty_tpl->tpl_vars["p"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["p"]->key;
?>
                                <?php if (!$_smarty_tpl->tpl_vars['p']->value['extra']['parent']){?>
                                <tr class="minicart-separator">
                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb"){?>
                                    <td style="width: 5%" class="cm-cart-item-thumb"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['p']->value['main_pair'],'no_ids'=>true), 0);?>
</td>
                                    <?php }?>
                                    <td style="width: 94%"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['p']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo fn_get_product_name($_smarty_tpl->tpl_vars['p']->value['product_id']);?>
</a>
                                    <p>
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('value'=>$_smarty_tpl->tpl_vars['p']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0);?>

                                    </p></td>
                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y"){?>
                                    <td style="width: 1%" class="minicart-tools cm-cart-item-delete"><?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout']||$_smarty_tpl->tpl_vars['force_items_deletion']->value)&&!$_smarty_tpl->tpl_vars['p']->value['extra']['exclude_from_calculate']){?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);?>
<?php }?></td>
                                    <?php }?>
                                </tr>
                                <?php }?>
                                <?php } ?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:cart_status"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </table>
                        <?php }else{ ?>
                            <p class="center"><?php echo $_smarty_tpl->__("cart_is_empty");?>
</p>
                        <?php }?>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_bottom_buttons']=="Y"){?>
                    <div class="cm-cart-buttons buttons-container<?php if ($_SESSION['cart']['amount']){?> full-cart<?php }else{ ?> hidden<?php }?>">
                        <div class="view-cart-button">
                            <span class="button button-wrap-left"><span class="button button-wrap-right"><a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="view-cart"><?php echo $_smarty_tpl->__("view_cart");?>
</a></span></span>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_redirect']!="Y"){?>
                        <div class="float-right">
                            <span class="button-action button-wrap-left"><span class="button-action button-wrap-right"><a href="<?php echo htmlspecialchars(fn_url("checkout.checkout"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("checkout");?>
</a></span></span>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:minicart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    -->
<!--cart_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
-->
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:cart_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<!--CART END-->




        
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <div class="clear"></div>
    </div>
<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<script type="text/javascript">
//<![CDATA[
Tygh.$(document).ready(function(){
    var $ = Tygh.$;
    // set dropdown menu width
    $('.dropdown-1column').each(function() {
        var p = $(this).parents('li:first');
        if (p.length) {
            $(this).css('min-width', (p.width() + 10) + 'px');
        }
    });
    var global_offset = $('.wrap-dropdown-multicolumns').offset().top;
    $('.dropdown-fullwidth').each(function(){
        var offset = $(this).parent('.fullwidth').offset().top;
        $(this).css('top', offset - global_offset + 25 + 'px');
    });
});
//]]>
</script>

<?php }?><?php }} ?>