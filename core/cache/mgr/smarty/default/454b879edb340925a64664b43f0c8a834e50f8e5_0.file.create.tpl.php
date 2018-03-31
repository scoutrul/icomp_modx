<?php /* Smarty version 3.1.27, created on 2018-01-26 03:03:07
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\element\chunk\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:307135a6a703b967d53_30434563%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '454b879edb340925a64664b43f0c8a834e50f8e5' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\manager\\templates\\default\\element\\chunk\\create.tpl',
      1 => 1516922381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307135a6a703b967d53_30434563',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6a703b96fa41_60324726',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6a703b96fa41_60324726')) {
function content_5a6a703b96fa41_60324726 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '307135a6a703b967d53_30434563';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>