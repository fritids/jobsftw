{hook name="blocks:topmenu_dropdown"}

{if $items}
    <div class="wrap-dropdown-multicolumns">
        <ul class="dropdown-multicolumns clearfix">
        
        {hook name="blocks:topmenu_dropdown_top_menu"}
        
        {foreach from=$items item="item1" name="item1"}
            {assign var="item1_url" value=$item1|fn_form_dropdown_object_link:$block.type}
            {assign var="unique_elm_id" value=$item1_url|md5}
            {assign var="unique_elm_id" value="topmenu_`$block.block_id`_`$unique_elm_id`"}

            {assign var="subitems_count" value=$item1.$childs|count}
            {assign var="cols" value=0}
            {if $subitems_count}
                {math assign="divider" equation="ceil(x / 6)" x=$subitems_count}
                {math assign="cols" equation="ceil(x / y)" x=$subitems_count y=$divider}
            {/if}
            <li class="{if !$item1.$childs}nodrop{elseif $item1.$childs|fn_check_second_level_child_array:$childs && $cols == 6}fullwidth{/if}{if $item1.active || $item1|fn_check_is_active_menu_item:$block.type} cm-active{/if}">
                <a{if $item1_url} href="{$item1_url}"{/if}{if $item1.$childs} class="drop"{/if}>{$item1.$name}{if $item1.$childs}<!--<i class="icon-down-micro">--></i>{/if}</a>

            {if $item1.$childs}

                {if !$item1.$childs|fn_check_second_level_child_array:$childs}
                {* Only two levels. Vertical output *}

                <div class="dropdown-1column">

                        <div class="col-1 firstcolumn lastcolumn">
                            <ul>
                            
                            {hook name="blocks:topmenu_dropdown_2levels_elements"}
                            
                            {foreach from=$item1.$childs item="item2" name="item2"}
                                {assign var="item_url2" value=$item2|fn_form_dropdown_object_link:$block.type}
                                <li{if $item2.active || $item2|fn_check_is_active_menu_item:$block.type} class="cm-active"{/if}><a{if $item_url2} href="{$item_url2}"{/if}>{$item2.$name}</a></li>
                            {/foreach}
                            {if $item1.show_more && $item1_url}
                                <li class="alt-link"><a href="{$item1_url}">{__("text_topmenu_view_more")}</a></li>
                            {/if}
                            
                            {/hook}
                            
                            </ul> 

                        </div>
                    </div>
                    
                {else}
                {* Three levels. Full output *}
                    {if $cols == 1}
                        {assign var="dropdown_class" value="dropdown-1column"}
                    {elseif $cols == 6}
                        {assign var="dropdown_class" value="dropdown-fullwidth"}
                    {else}
                        {assign var="dropdown_class" value="dropdown-`$cols`columns"}
                    {/if}

                    <div class="{$dropdown_class}{if $smarty.foreach.item1.index > 4 && $smarty.foreach.item1.last} drop-left{/if}" id="{$unique_elm_id}">
                        {hook name="blocks:topmenu_dropdown_3levels_cols"}
                        
                        {foreach from=$item1.$childs item="item2" name="item2"}
                            <div class="col-1{if $smarty.foreach.item2.index % $cols == 0 || $smarty.foreach.item2.first} firstcolumn{elseif $smarty.foreach.item2.index % $cols == ($cols - 1) || $smarty.foreach.item2.last} lastcolumn{/if}">
                                {assign var="item2_url" value=$item2|fn_form_dropdown_object_link:$block.type}
                                <h3{if $item2.active || $item2|fn_check_is_active_menu_item:$block.type} class="cm-active"{/if}><a{if $item2_url} href="{$item2_url}"{/if}>{$item2.$name}</a></h3>

                                {if $item2.$childs}
                                <ul>
                                {hook name="blocks:topmenu_dropdown_3levels_col_elements"}
                                {foreach from=$item2.$childs item="item3" name="item3"}
                                    {assign var="item3_url" value=$item3|fn_form_dropdown_object_link:$block.type}
                                    <li{if $item3.active || $item3|fn_check_is_active_menu_item:$block.type} class="cm-active"{/if}><a{if $item3_url} href="{$item3_url}"{/if}>{$item3.$name}</a></li>
                                {/foreach}
                                {if $item2.show_more && $item2_url}
                                    <li class="alt-link"><a href="{$item2_url}">{__("text_topmenu_view_more")}</a></li>
                                {/if}
                                {/hook}
                                </ul> 
                                {/if}
                            </div>

                        {/foreach}

                        {if $item1.show_more && $item1_url}
                        <div class="dropdown-bottom">
                            <a href="{$item1_url}">{__("text_topmenu_more", ["[item]" => $item1.$name])}</a>
                        </div>
                        {/if}
                        
                        {/hook}

                    </div>

                {/if}

            {/if}
            </li>
        {/foreach}





<!--CART START-->
{assign var="dropdown_id" value=$block.snapping_id}
{assign var="r_url" value=$config.current_url|escape:url}
{hook name="checkout:cart_content"}
<div class="dropdown-box cart-dropdown-box" id="cart_status_{$dropdown_id}">
    <!--<a href="{"checkout.cart"|fn_url}" id="sw_dropdown_{$dropdown_id}" class="cm-popup-title cm-combination cm-combo-on cart-item-text">-->
    <a href="{"checkout.cart"|fn_url}" class="cart-item-text">
        {*hook name="checkout:dropdown_title"*}
            <!--
            {if $smarty.session.cart.amount}
                <i class="icon-basket filled"></i>
                <span class="minicart-title hand">{$smarty.session.cart.amount}&nbsp;{__("items")} {__("for")}&nbsp;{include file="common/price.tpl" value=$smarty.session.cart.display_subtotal}<i class="icon-down-micro"></i></span>
            {else}
                <i class="icon-basket empty"></i>
                <span class="minicart-title empty-cart hand">{__("cart_is_empty")}<i class="icon-down-micro"></i></span>
            {/if}        
            -->
            <!--<i class="icon-basket filled"></i>-->
            <div class="icon-shopping-cart">
                <img src="{$images_dir}/custom/cart_icon.png">
            </div>
            <span class="minicart-title hand">{if $smarty.session.cart.amount}{$smarty.session.cart.amount}{else}0{/if}&nbsp;{__("items")|upper}&nbsp;/&nbsp;{include file="common/price.tpl" value=$smarty.session.cart.display_subtotal}
            <!--<i class="icon-down-micro"></i>-->
            </span>
        {*/hook*}
    </a>
    <!--
    <div id="dropdown_{$dropdown_id}" class="cm-popup-box popup-content hidden">
        {hook name="checkout:minicart"}
            <div class="cm-cart-content {if $block.properties.products_links_type == "thumb"}cm-cart-content-thumb{/if} {if $block.properties.display_delete_icons == "Y"}cm-cart-content-delete{/if}">
                    <div class="cart-items">
                        {if $smarty.session.cart.amount}
                            <table class="minicart-table">
                                {hook name="index:cart_status"}
                                {assign var="_cart_products" value=$smarty.session.cart.products|array_reverse:true}
                                {foreach from=$_cart_products key="key" item="p" name="cart_products"}
                                {if !$p.extra.parent}
                                <tr class="minicart-separator">
                                    {if $block.properties.products_links_type == "thumb"}
                                    <td style="width: 5%" class="cm-cart-item-thumb">{include file="common/image.tpl" image_width="40" image_height="40" images=$p.main_pair no_ids=true}</td>
                                    {/if}
                                    <td style="width: 94%"><a href="{"products.view?product_id=`$p.product_id`"|fn_url}">{$p.product_id|fn_get_product_name nofilter}</a>
                                    <p>
                                        <span>{$p.amount}</span><span>&nbsp;x&nbsp;</span>{include file="common/price.tpl" value=$p.display_price span_id="price_`$key`_`$dropdown_id`" class="none"}
                                    </p></td>
                                    {if $block.properties.display_delete_icons == "Y"}
                                    <td style="width: 1%" class="minicart-tools cm-cart-item-delete">{if (!$runtime.checkout || $force_items_deletion) && !$p.extra.exclude_from_calculate}{include file="buttons/button.tpl" but_href="checkout.delete.from_status?cart_id=`$key`&redirect_url=`$r_url`" but_meta="cm-ajax cm-ajax-full-render" but_target_id="cart_status*" but_role="delete" but_name="delete_cart_item"}{/if}</td>
                                    {/if}
                                </tr>
                                {/if}
                                {/foreach}
                                {/hook}
                            </table>
                        {else}
                            <p class="center">{__("cart_is_empty")}</p>
                        {/if}
                    </div>

                    {if $block.properties.display_bottom_buttons == "Y"}
                    <div class="cm-cart-buttons buttons-container{if $smarty.session.cart.amount} full-cart{else} hidden{/if}">
                        <div class="view-cart-button">
                            <span class="button button-wrap-left"><span class="button button-wrap-right"><a href="{"checkout.cart"|fn_url}" rel="nofollow" class="view-cart">{__("view_cart")}</a></span></span>
                        </div>
                        {if $settings.General.checkout_redirect != "Y"}
                        <div class="float-right">
                            <span class="button-action button-wrap-left"><span class="button-action button-wrap-right"><a href="{"checkout.checkout"|fn_url}" rel="nofollow">{__("checkout")}</a></span></span>
                        </div>
                        {/if}
                    </div>
                    {/if}

            </div>
        {/hook}
    </div>
    -->
<!--cart_status_{$dropdown_id}-->
</div>
{/hook}

<!--CART END-->




        
        {/hook}
        </ul>
        <div class="clear"></div>
    </div>
{/if}

{/hook}

{literal}
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
{/literal}
