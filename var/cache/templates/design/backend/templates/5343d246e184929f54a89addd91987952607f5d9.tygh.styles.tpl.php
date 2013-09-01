<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:23:33
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\common\styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26638522199f53baf43-83742776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5343d246e184929f54a89addd91987952607f5d9' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\common\\styles.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '26638522199f53baf43-83742776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522199f541b2d4_65042836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522199f541b2d4_65042836')) {function content_522199f541b2d4_65042836($_smarty_tpl) {?><?php if (!is_callable('smarty_block_styles')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\block.styles.php';
if (!is_callable('smarty_function_style')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.style.php';
if (!is_callable('smarty_block_hook')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\block.hook.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('styles', array()); $_block_repeat=true; echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo smarty_function_style(array('src'=>"lib/ui/jqueryui.css"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:styles")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

        <?php echo smarty_function_style(array('src'=>"glyphs.css"),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['translation']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']){?>
        <?php echo smarty_function_style(array('src'=>"design_mode.css"),$_smarty_tpl);?>

        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/statuses/components/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:styles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>