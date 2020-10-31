<?php
/* Smarty version 3.1.36, created on 2020-10-31 11:19:16
  from 'C:\xampp\htdocs\simtech-form-mvc\views\request\create_request.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9d3a246ebab6_49538022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce2559a8bb100df210be2c6eed739fa7ad21085d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simtech-form-mvc\\views\\request\\create_request.tpl',
      1 => 1604139064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9d3a246ebab6_49538022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20024429215f9d3a246df9a5_13874640', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layouts/app.tpl");
}
/* {block "content"} */
class Block_20024429215f9d3a246df9a5_13874640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20024429215f9d3a246df9a5_13874640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div class="card">
        <div class="card-header">
            <h4>Форма</h4>
        </div>
    
        <div class="card-body">
            <form class="form-signin" action="?controller=form&action=store" method="POST" enctype="multipart/form-data">
    
                <div class="form-group">
                    <label for="inputEmail">Ваш Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                </div>
    
                <div class="form-group">
                    <label for="inputText">Заголовок сообщения:</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Заголовок" name="title">
                </div>
    
                <div class="form-group">
                    <label for="comment">Сообщение:</label>
                    <textarea class="form-control" rows="3" id="comment" placeholder="Сообщение" name="message"></textarea>
                </div>
    
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Как давно вы пользуетесь ресурсом</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="duration_id">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['durations']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->duration;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
    
    
    
                <div class="form-group">
                    <p>Укажите ваш пол:</p>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="man" checked>Мужской
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="woman">Женский
                        </label>
                    </div>
                </div>
    
    
                <div class="form-group">
                    <label for="inputText">Файловое сообщение:</label>
                    <input type="file" class="form-control-file" id="inputText" placeholder="Файл" name="file">
                </div>
    
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="check();">
                    <label class="form-check-label" for="exampleCheck1">Сделать кнопку активной?</label>
                </div>
    
                <button class="btn btn-lg btn-primary btn-lg" type="submit" name="send" disabled>Отправить</button>
                <button class="btn btn-lg btn-light btn-lg" type="reset">Сброс</button>
            </form>
        </div>
    </div>
    
    <?php echo '<script'; ?>
>
        function check() {
            var submit = document.getElementsByName('send')[0];
            if (document.getElementById('exampleCheck1').checked) {
                submit.disabled = '';
            } else {
                submit.disabled = 'disabled';
            }
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
