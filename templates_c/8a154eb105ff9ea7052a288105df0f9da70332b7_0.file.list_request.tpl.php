<?php
/* Smarty version 3.1.36, created on 2020-10-31 10:47:36
  from 'C:\xampp\htdocs\simtech-form-mvc\views\request\list_request.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9d32b883ba32_72651596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a154eb105ff9ea7052a288105df0f9da70332b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simtech-form-mvc\\views\\request\\list_request.tpl',
      1 => 1604082169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9d32b883ba32_72651596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19288991155f9d32b883af15_94802993', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layouts/app.tpl");
}
/* {block "content"} */
class Block_19288991155f9d32b883af15_94802993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19288991155f9d32b883af15_94802993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div class="card">
        <div class="card-header">
            <h4>Все обращения</h4>
        </div>
        <div class="card-body">
            <div class="list-group">
    
            </div>
        </div>
    </div>
    
<?php
}
}
/* {/block "content"} */
}
