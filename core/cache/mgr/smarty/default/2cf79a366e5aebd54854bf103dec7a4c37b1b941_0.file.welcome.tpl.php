<?php /* Smarty version 3.1.27, created on 2018-01-26 02:30:21
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170075a6a688dc70d73_47545115%%*/
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
  'nocache_hash' => '170075a6a688dc70d73_47545115',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6a688dc925e7_90601039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6a688dc925e7_90601039')) {
function content_5a6a688dc925e7_90601039 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170075a6a688dc70d73_47545115';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>