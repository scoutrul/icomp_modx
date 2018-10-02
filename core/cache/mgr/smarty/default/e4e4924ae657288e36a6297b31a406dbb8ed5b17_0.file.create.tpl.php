<?php /* Smarty version 3.1.27, created on 2018-04-12 10:44:21
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\element\snippet\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:213795acf0e5580f173_82359578%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e4924ae657288e36a6297b31a406dbb8ed5b17' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\manager\\templates\\default\\element\\snippet\\create.tpl',
      1 => 1516922381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213795acf0e5580f173_82359578',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5acf0e5582b702_00919077',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5acf0e5582b702_00919077')) {
function content_5acf0e5582b702_00919077 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '213795acf0e5580f173_82359578';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>