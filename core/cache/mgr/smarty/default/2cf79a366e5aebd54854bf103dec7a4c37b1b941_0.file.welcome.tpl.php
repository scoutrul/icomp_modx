<?php /* Smarty version 3.1.27, created on 2018-04-09 01:44:08
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:234215aca9b385adf72_26642493%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf79a366e5aebd54854bf103dec7a4c37b1b941' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\manager\\templates\\default\\welcome.tpl',
      1 => 1516922381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234215aca9b385adf72_26642493',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aca9b385b03b1_43054548',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aca9b385b03b1_43054548')) {
function content_5aca9b385b03b1_43054548 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '234215aca9b385adf72_26642493';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>