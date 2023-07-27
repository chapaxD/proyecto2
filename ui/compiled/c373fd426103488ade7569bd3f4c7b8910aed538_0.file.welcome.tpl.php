<?php
/* Smarty version 3.1.39, created on 2023-07-26 10:14:52
  from 'C:\xampp\htdocs\ibilling\ui\theme\ibilling\welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64c12a5ccbbe90_66211412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c373fd426103488ade7569bd3f4c7b8910aed538' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibilling\\ui\\theme\\ibilling\\welcome.tpl',
      1 => 1621318798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c12a5ccbbe90_66211412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21600337364c12a5ccb81e9_44412833', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_21600337364c12a5ccb81e9_44412833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21600337364c12a5ccb81e9_44412833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">

            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
!

        </div>



    </div>

<?php
}
}
/* {/block "content"} */
}
