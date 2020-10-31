<?php
/* Smarty version 3.1.36, created on 2020-10-31 11:19:02
  from 'C:\xampp\htdocs\simtech-form-mvc\views\request\list_request.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9d3a16dc2934_68326405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a154eb105ff9ea7052a288105df0f9da70332b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simtech-form-mvc\\views\\request\\list_request.tpl',
      1 => 1604139540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9d3a16dc2934_68326405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2588035715f9d3a16db2953_32880127', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layouts/app.tpl");
}
/* {block "content"} */
class Block_2588035715f9d3a16db2953_32880127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2588035715f9d3a16db2953_32880127',
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requests']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Заголовок: <?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
</h5>
                            <small>Id: <?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
</small>
                        </div>
                        <p class="mb-1">Сообщение: <?php echo $_smarty_tpl->tpl_vars['item']->value->message;?>
</p>
                        <small>Email: <?php echo $_smarty_tpl->tpl_vars['item']->value->email;?>
</small>
                    </a>
                <?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
                    <p>Ничего не найдено</p>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
    
<?php
}
}
/* {/block "content"} */
}
