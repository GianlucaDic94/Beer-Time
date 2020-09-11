<?php
/* Smarty version 3.1.33, created on 2020-09-01 12:18:41
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4e2001a21282_52828882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7e45c76d699811ccc37ab80fda60c7023a32ad5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\login.tpl',
      1 => 1598955514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5f4e2001a21282_52828882 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="py-5 text-center h-100" style="	background-image: url(&quot;images/beer.jpg&quot;);	background-size: 100%;	background-position: top left;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5">
          <h1 class="mb-4">Accedi</h1>
          <form method="post" target="_self" action="/Beer-Time/Utente/logIn">
            <input type="radio" class="custom-radio" name="Utente" value="Consumatore" checked> Cliente
            <input type="radio" class="custom-radio" name="Utente" value="Produttore" > Produttore
            <div class="form-group"> <input type="text" class="form-control" id="form9" name="Username" placeholder="Username" required="required"> </div>
            <div class="form-group mb-3"> <input type="password" class="form-control" placeholder="Password" id="form10" name="Password"> </div> <button type="submit" class="btn btn-primary">Accedi<br></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>

</html><?php }
}
