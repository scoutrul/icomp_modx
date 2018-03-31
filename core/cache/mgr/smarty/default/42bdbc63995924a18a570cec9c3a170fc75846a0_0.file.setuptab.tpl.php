<?php /* Smarty version 3.1.27, created on 2018-03-31 16:52:08
         compiled from "D:\OSPanel\domains\localhost\core\components\migx\templates\mgr\setuptab.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:151735abf9288b5b8d8_16489115%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42bdbc63995924a18a570cec9c3a170fc75846a0' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\core\\components\\migx\\templates\\mgr\\setuptab.tpl',
      1 => 1517183705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151735abf9288b5b8d8_16489115',
  'variables' => 
  array (
    'cmptabcaption' => 0,
    'cmptabdescription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5abf9288b7e427_96079442',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5abf9288b7e427_96079442')) {
function content_5abf9288b7e427_96079442 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '151735abf9288b5b8d8_16489115';
?>
 
{
    title: '<?php echo $_smarty_tpl->tpl_vars['cmptabcaption']->value;?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo $_smarty_tpl->tpl_vars['cmptabdescription']->value;?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'form',
        id: 'migx_setup_form',
        standardSubmit: true,
        url: config.src,
        items: [{
            xtype: 'modx-tabs',
            id: 'migx-tab-setup',
            defaults: {
                border: false,
                autoHeight: true
            },
            border: true,
            items: [{
                title: 'Setup',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Setup MIGX-Configurator. (Creates/upgrades Configurations-table)</p>'
                         +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('setupmigx')},
                    text: 'Setup',
                    scope: this
                }]
            },{
                title: 'Upgrade MIGX',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Adds the autoinc-field MIGX_id to all existing MIGX-TVs from older Versions</p>'
                    +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('upgrademigx')},
                    text: 'Upgrade',
                    scope: this
                }]
            }]
        }]
    }]
}





<?php }
}
?>