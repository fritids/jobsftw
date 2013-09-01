<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:52:32
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\views\profiles\components\profiles_scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30355221a0c07a1a06-71651880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edfc5baa9146c124ce9b578a08f730226654f7a4' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\views\\profiles\\components\\profiles_scripts.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '30355221a0c07a1a06-71651880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'states' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221a0c07f4be1_74161731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221a0c07f4be1_74161731')) {function content_5221a0c07f4be1_74161731($_smarty_tpl) {?><script type="text/javascript">
//<![CDATA[
(function(_, $) {

    /* Do not put this code to document.ready, because it should be
       initialized first
    */
    $.ceRebuildStates('init', {
        default_country: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['settings']->value['General']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
        states: <?php echo json_encode($_smarty_tpl->tpl_vars['states']->value);?>

    });


    
    $.ceFormValidator('setZipcode', {
        US: {
            regexp: /^(\d{5})(-\d{4})?$/,
            format: '01342 (01342-5678)'
        },
        CA: {
            regexp: /^(\w{3} ?\w{3})$/,
            format: 'K1A OB1 (K1AOB1)'
        },
        RU: {
            regexp: /^(\d{6})?$/,
            format: '123456'
        }
    });
    

}(Tygh, Tygh.$));
//]]>
</script>
<?php }} ?>