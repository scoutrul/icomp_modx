<?php /* Smarty version 3.1.27, created on 2018-03-31 16:52:08
         compiled from "D:\OSPanel\domains\localhost\core\components\migx\templates\mgr\cmptab.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:245085abf9288941151_86384279%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53949b4b611b7f72571e50bf21c9d5f6e2bd5a0a' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\core\\components\\migx\\templates\\mgr\\cmptab.tpl',
      1 => 1517183705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245085abf9288941151_86384279',
  'variables' => 
  array (
    'cmptabcaption' => 0,
    'cmptabdescription' => 0,
    'win_id' => 0,
    'configs' => 0,
    'columns' => 0,
    'pathconfigs' => 0,
    'fields' => 0,
    'myctx' => 0,
    'auth' => 0,
    'resource' => 0,
    'connected_object_id' => 0,
    'object_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5abf9288996e68_37060535',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5abf9288996e68_37060535')) {
function content_5abf9288996e68_37060535 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '245085abf9288941151_86384279';
?>

{
    title: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmptabcaption']->value, ENT_QUOTES, 'UTF-8', true);?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmptabdescription']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
',
        preventRender: true,
        id: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
',
        configs: '<?php echo $_smarty_tpl->tpl_vars['configs']->value;?>
',
        columns: Ext.util.JSON.decode('<?php echo $_smarty_tpl->tpl_vars['columns']->value;?>
'),
        pathconfigs: Ext.util.JSON.decode('<?php echo $_smarty_tpl->tpl_vars['pathconfigs']->value;?>
'),
        fields: Ext.util.JSON.decode('<?php echo $_smarty_tpl->tpl_vars['fields']->value;?>
'),
        wctx: '<?php echo $_smarty_tpl->tpl_vars['myctx']->value;?>
',
        url: Migx.config.connectorUrl,
        auth: '<?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
',
        resource_id: '<?php echo $_smarty_tpl->tpl_vars['resource']->value['id'];?>
',
        co_id: '<?php echo $_smarty_tpl->tpl_vars['connected_object_id']->value;?>
',
        pageSize: 10,
        object_id: '<?php echo $_smarty_tpl->tpl_vars['object_id']->value;?>
',
        bwrapCfg: {
            cls: 'main-wrapper'
        }       
    }]
}
<?php }
}
?>