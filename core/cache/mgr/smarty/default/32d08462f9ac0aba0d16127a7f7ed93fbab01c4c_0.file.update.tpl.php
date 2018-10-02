<?php /* Smarty version 3.1.27, created on 2018-04-12 23:35:24
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\resource\staticresource\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20035acfc30c82b7d2_31574787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32d08462f9ac0aba0d16127a7f7ed93fbab01c4c' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\manager\\templates\\default\\resource\\staticresource\\update.tpl',
      1 => 1516922399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20035acfc30c82b7d2_31574787',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5acfc30c8b5ba1_70981488',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5acfc30c8b5ba1_70981488')) {
function content_5acfc30c8b5ba1_70981488 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20035acfc30c82b7d2_31574787';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>