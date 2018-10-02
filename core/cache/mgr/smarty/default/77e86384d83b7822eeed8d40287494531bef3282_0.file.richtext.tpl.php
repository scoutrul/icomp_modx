<?php /* Smarty version 3.1.27, created on 2018-04-13 02:00:45
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\element\tv\renders\input\richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:226105acfe51d55cc31_37701578%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77e86384d83b7822eeed8d40287494531bef3282' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\manager\\templates\\default\\element\\tv\\renders\\input\\richtext.tpl',
      1 => 1516922382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226105acfe51d55cc31_37701578',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5acfe51d7de2f6_24177908',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5acfe51d7de2f6_24177908')) {
function content_5acfe51d7de2f6_24177908 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '226105acfe51d55cc31_37701578';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>