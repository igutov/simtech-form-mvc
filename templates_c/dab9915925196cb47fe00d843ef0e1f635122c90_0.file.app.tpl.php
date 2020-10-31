<?php
/* Smarty version 3.1.36, created on 2020-10-31 10:46:51
  from 'C:\xampp\htdocs\simtech-form-mvc\views\layouts\app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9d328b7ff077_54680625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab9915925196cb47fe00d843ef0e1f635122c90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simtech-form-mvc\\views\\layouts\\app.tpl',
      1 => 1604081939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9d328b7ff077_54680625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="?conrtoller=form&action=index">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=form&action=index">Список обращений</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=form&action=create">Форма создания обращения</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-2">
            <div class="row justify-content-center">
                <div class="col-md-5">

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15666111665f9d328b7fe4a4_60850489', "content");
?>


                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html><?php }
/* {block "content"} */
class Block_15666111665f9d328b7fe4a4_60850489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15666111665f9d328b7fe4a4_60850489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
