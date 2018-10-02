<?php /* Smarty version 3.1.27, created on 2018-04-12 00:08:28
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\element\tv\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:242875ace794c047969_84662714%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08dacb339e09dce88738f767287ed9c1c3533c67' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\manager\\templates\\default\\element\\tv\\update.tpl',
      1 => 1516922382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242875ace794c047969_84662714',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ace794c08d680_79084605',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ace794c08d680_79084605')) {
function content_5ace794c08d680_79084605 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '242875ace794c047969_84662714';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>