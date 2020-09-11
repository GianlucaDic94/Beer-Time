<?php
/* Smarty version 3.1.33, created on 2020-09-02 13:54:17
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\profiloProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4f87e90efa99_09549819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd5c51feead6248fe6e56bcab2f8ca6c28d2798e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\profiloProd.tpl',
      1 => 1599047613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbarLoggedProd.tpl' => 1,
  ),
),false)) {
function content_5f4f87e90efa99_09549819 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:navbarLoggedProd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="py-3 text-center">
    <div class="container">
      <div class="row ml-0" style="">
        <div class="mx-auto p-4 col-lg-7">
          <h1 class="mb-4">Informazioni personali</h1>
          <h4>Inserisci i campi da modificare</h4>
          <form method="post" action="/Beer-Time/Profilo/Modifica">
            <div class="form-row">
              <div class="form-group col-md-6"><label>Nome</label> <input min="5" max="20" type="text" class="form-control" id="form27" placeholder="<?php echo $_smarty_tpl->tpl_vars['utente']->value['Nome'];?>
" name="Nome"> </div>
              <div class="form-group col-md-6"><label>Username</label> <input  min="3" max="15" type="text" class="form-control" id="form28" placeholder="<?php echo $_smarty_tpl->tpl_vars['utente']->value['Username'];?>
" name="Username"> </div>
            </div>
            <div class="form-group"><label>Password</label> <input min="4" max="15" type="password" class="form-control" id="form29"  name="Password">
              <div class="form-group"><label>Email</label><input type="email" min="7" max="20" class="form-control" id="form29" placeholder="<?php echo $_smarty_tpl->tpl_vars['utente']->value['Email'];?>
" name="Email"></div>
              <div class="form-group"><label>Indirizzo</label> <input min="6" max="30" type="text" class="form-control" id="form28" placeholder="<?php echo $_smarty_tpl->tpl_vars['utente']->value['Indirizzo'];?>
" name="Indirizzo"> </div
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
          </form>
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
