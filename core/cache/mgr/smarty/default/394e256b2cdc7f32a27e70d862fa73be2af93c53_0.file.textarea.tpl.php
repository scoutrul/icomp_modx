<?php /* Smarty version 3.1.27, created on 2018-04-11 23:10:21
         compiled from "D:\OSPanel\domains\localhost\manager\templates\default\element\tv\renders\input\textarea.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:101865ace6bad16fc75_35729684%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '394e256b2cdc7f32a27e70d862fa73be2af93c53' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\manager\\templates\\default\\element\\tv\\renders\\input\\textarea.tpl',
      1 => 1516922383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101865ace6bad16fc75_35729684',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ace6bad295f13_53361335',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ace6bad295f13_53361335')) {
function content_5ace6bad295f13_53361335 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101865ace6bad16fc75_35729684';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" rows="15"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textarea'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo strtr($_smarty_tpl->tpl_vars['tv']->value->get('value'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        ,height: 140
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>