<?php /* Smarty version 3.1.27, created on 2018-05-02 18:40:10
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\element\plugin\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:317855ae9dbda530c44_55838725%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b11d4bc338e02aae0e1aebebbb1355b824d05c8d' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\manager\\templates\\default\\element\\plugin\\create.tpl',
      1 => 1516922381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317855ae9dbda530c44_55838725',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ae9dbda556c07_00783790',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ae9dbda556c07_00783790')) {
function content_5ae9dbda556c07_00783790 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '317855ae9dbda530c44_55838725';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>