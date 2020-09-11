<?php
/* Smarty version 3.1.33, created on 2020-06-01 11:11:52
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed4c658339c22_71096632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '484d7f076319d7d64e98945f7c501fc209ccd8a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\item.tpl',
      1 => 1590658629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbarLogged.tpl' => 1,
  ),
),false)) {
function content_5ed4c658339c22_71096632 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body >
  <?php $_smarty_tpl->_subTemplateRender('file:navbarLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style=""><img class="img-fluid d-block" src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglia']->value[0]['Stile'];?>
.jpg"></div>
        <div class="col-md-6">
          <h1 class=""><?php echo $_smarty_tpl->tpl_vars['bottiglia']->value[0]['Nome'];?>
</h1>
          <div class="row">
            <div class="col-md-12">
              <p class="lead"><?php echo $_smarty_tpl->tpl_vars['bottiglia']->value[0]['Descrizione'];?>
</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 class="">Gradazione: <font color="#6c757d"><span style="font-size: 25.6px;"><?php echo $_smarty_tpl->tpl_vars['bottiglia']->value[0]['Gradazione_Alcolica'];?>
</span></font>
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 class="">Formato:&nbsp;<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['bottiglia']->value[0]['Formato'];?>
</small></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2  <class="">Stile: <a href="" > <small class="text-muted">  <?php echo $_smarty_tpl->tpl_vars['bottiglia']->value[0]['Stile'];?>
</small></a></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 <a href="">Produttore :&nbsp; <a href=""><small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['bottiglia']->value[0]['Produttore'];?>
</small></a></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="" contenteditable="true"><small class="text-muted">
                      <font color="#333333"><span style="font-size: 32px;">Prezzo:&nbsp;</span></font><?php echo $_smarty_tpl->tpl_vars['bottiglia']->value[0]['Prezzo'];?>
$
                    </small></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <form method="post" action="/Beer-Time/Acquisto/Spesa?<?php echo $_smarty_tpl->tpl_vars['bottiglia']->value[0]['Nome'];?>
" >
              Quantità:
              <input type="number" name="Quantità" min="1" value="1" >
              <input type="submit" id="button1" class="btn btn-primary" value="Aggiungi al carrello">
            </form>
          </div>
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
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/Beer-Time/Smarty/templates/js/toast.js"

</html><?php }
}
