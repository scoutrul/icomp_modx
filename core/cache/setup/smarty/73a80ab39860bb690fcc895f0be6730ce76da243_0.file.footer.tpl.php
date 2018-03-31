<?php /* Smarty version 3.1.27, created on 2018-01-26 02:29:12
         compiled from "D:\OSPanel\domains\localhost\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123655a6a684872a667_00594615%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73a80ab39860bb690fcc895f0be6730ce76da243' => 
    array (
      0 => 'D:\\OSPanel\\domains\\localhost\\setup\\templates\\footer.tpl',
      1 => 1516922413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123655a6a684872a667_00594615',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a6a6848740e95_72214861',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a6a6848740e95_72214861')) {
function content_5a6a6848740e95_72214861 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:/OSPanel/domains/localhost/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '123655a6a684872a667_00594615';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>