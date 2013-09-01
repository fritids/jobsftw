<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:41
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\addons\twigmo\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182795221954dd82b09-70611094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4f301a48147153027f82c8f6d769fd9b2668198' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\addons\\twigmo\\hooks\\index\\scripts.post.tpl',
      1 => 1377345953,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '182795221954dd82b09-70611094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'tw_settings' => 0,
    'show_avail_notice' => 0,
    'device' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221954ded37c7_09835474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221954ded37c7_09835474')) {function content_5221954ded37c7_09835474($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['tw_settings']->value['use_mobile_frontend']!='never'&&$_smarty_tpl->tpl_vars['show_avail_notice']->value=="Y"){?>
    <?php $_smarty_tpl->tpl_vars['device'] = new Smarty_variable($_SESSION['device'], null, 0);?>
	<script>
	//<![CDATA[
	
	$(function () {
		//$('.mobile-avail-notice').insertBefore('a[name="top"]');
		$('#close_notification_mobile_avail_notice').live('click', function () {
			$(this).parents('div.mobile-avail-notice').hide();
			$.ajax({
				url: '<?php echo htmlspecialchars(fn_url("twigmo.post&close_notice=1"), ENT_QUOTES, 'UTF-8');?>
',
				dataType: 'json'
			});
		});
		if(window.devicePixelRatio){
			if(window.devicePixelRatio > 1){
				changeSizes();
			}
		}
		function changeSizes() {
			var scale = 1,
					buttonsHeight = <?php if ($_smarty_tpl->tpl_vars['device']->value=="ipad"){?>54<?php }else{ ?>80<?php }?>,
					noticeHeight = <?php if ($_smarty_tpl->tpl_vars['device']->value=="ipad"){?>80<?php }else{ ?>120<?php }?>,
					fontSize = <?php if ($_smarty_tpl->tpl_vars['device']->value=="ipad"){?>30<?php }else{ ?>34<?php }?>,
					fontTop = <?php if ($_smarty_tpl->tpl_vars['device']->value=="ipad"){?>15<?php }else{ ?>18<?php }?>,
					buttonsTop = (noticeHeight - buttonsHeight) / 2 || 13,
					crossTopMargin = (noticeHeight - $('#close_notification_mobile_avail_notice').height()) / 2 - buttonsTop - 2,
					crossWidth = 30,
					textPadding = <?php if ($_smarty_tpl->tpl_vars['device']->value=="ipad"){?>'0 1% 0 1%'<?php }else{ ?>'0 2% 0 2%'<?php }?>;

			if (typeof orientation !== 'undefined' && Math.abs(orientation) === 90) {
					scale = 0.7;
					textPadding = '0 1% 0 1%';
			}
			$('.mobile-avail-notice a').css({'height': buttonsHeight * scale + 'px', 'line-height': buttonsHeight * scale + 'px', 'font-size': fontSize * scale + 'px', 'padding': textPadding});
			$('.mobile-avail-notice img').css({'width': crossWidth * scale + 'px !important', 'height': crossWidth * scale + 'px !important', 'margin-top': -1 * (crossWidth * scale/2) + 'px'});

		}
		window.onorientationchange = function () {
				changeSizes();
		};
		changeSizes();
	});
	
	//]]>
	</script>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="addons/twigmo/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/twigmo/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['tw_settings']->value['use_mobile_frontend']!='never'&&$_smarty_tpl->tpl_vars['show_avail_notice']->value=="Y"){?>
    <?php $_smarty_tpl->tpl_vars['device'] = new Smarty_variable($_SESSION['device'], null, 0);?>
	<script>
	//<![CDATA[
	
	$(function () {
		//$('.mobile-avail-notice').insertBefore('a[name="top"]');
		$('#close_notification_mobile_avail_notice').live('click', function () {
			$(this).parents('div.mobile-avail-notice').hide();
			$.ajax({
				url: '<?php echo htmlspecialchars(fn_url("twigmo.post&close_notice=1"), ENT_QUOTES, 'UTF-8');?>
',
				dataType: 'json'
			});
		});
		if(window.devicePixelRatio){
			if(window.devicePixelRatio > 1){
				changeSizes();
			}
		}
		function changeSizes() {
			var scale = 1,
					buttonsHeight = <?php if ($_smarty_tpl->tpl_vars['device']->value=="ipad"){?>54<?php }else{ ?>80<?php }?>,
					noticeHeight = <?php if ($_smarty_tpl->tpl_vars['device']->value=="ipad"){?>80<?php }else{ ?>120<?php }?>,
					fontSize = <?php if ($_smarty_tpl->tpl_vars['device']->value=="ipad"){?>30<?php }else{ ?>34<?php }?>,
					fontTop = <?php if ($_smarty_tpl->tpl_vars['device']->value=="ipad"){?>15<?php }else{ ?>18<?php }?>,
					buttonsTop = (noticeHeight - buttonsHeight) / 2 || 13,
					crossTopMargin = (noticeHeight - $('#close_notification_mobile_avail_notice').height()) / 2 - buttonsTop - 2,
					crossWidth = 30,
					textPadding = <?php if ($_smarty_tpl->tpl_vars['device']->value=="ipad"){?>'0 1% 0 1%'<?php }else{ ?>'0 2% 0 2%'<?php }?>;

			if (typeof orientation !== 'undefined' && Math.abs(orientation) === 90) {
					scale = 0.7;
					textPadding = '0 1% 0 1%';
			}
			$('.mobile-avail-notice a').css({'height': buttonsHeight * scale + 'px', 'line-height': buttonsHeight * scale + 'px', 'font-size': fontSize * scale + 'px', 'padding': textPadding});
			$('.mobile-avail-notice img').css({'width': crossWidth * scale + 'px !important', 'height': crossWidth * scale + 'px !important', 'margin-top': -1 * (crossWidth * scale/2) + 'px'});

		}
		window.onorientationchange = function () {
				changeSizes();
		};
		changeSizes();
	});
	
	//]]>
	</script>
<?php }?><?php }?><?php }} ?>