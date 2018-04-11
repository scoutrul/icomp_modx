<?php /* Smarty version 3.1.27, created on 2018-04-09 11:19:41
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:307275acb221d1ab7e4_42092691%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532217fae2b3f0b443d0609abf7b74c0f8c9ff5c' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1516922399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307275acb221d1ab7e4_42092691',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5acb221d25cfa5_39061615',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5acb221d25cfa5_39061615')) {
function content_5acb221d25cfa5_39061615 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '307275acb221d1ab7e4_42092691';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>