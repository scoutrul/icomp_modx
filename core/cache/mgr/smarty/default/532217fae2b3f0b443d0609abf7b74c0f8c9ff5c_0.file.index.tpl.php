<?php /* Smarty version 3.1.27, created on 2018-01-26 02:39:35
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:198145a6a6ab76f93d2_74760485%%*/
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
  'nocache_hash' => '198145a6a6ab76f93d2_74760485',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6a6ab7722648_53974354',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6a6ab7722648_53974354')) {
function content_5a6a6ab7722648_53974354 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '198145a6a6ab76f93d2_74760485';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>