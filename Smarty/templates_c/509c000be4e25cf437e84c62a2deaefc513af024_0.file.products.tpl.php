<?php
/* Smarty version 3.1.33, created on 2020-06-01 11:12:23
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed4c677f09e25_95057154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '509c000be4e25cf437e84c62a2deaefc513af024' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\products.tpl',
      1 => 1590658710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbarLogged.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5ed4c677f09e25_95057154 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body>
  <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:navbarLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
  <div class="pt-5 pb-3 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-3">Birre</h1>
          <p class="lead"><br> </p>
        </div>
      </div>
      <div class="row">
        <div  class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))]['Nome'];?>
"> <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))]['Stile'];?>
.jpg"  width="200" height="300">
          <h4 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))]['Nome'];?>
</b> </h4>
          <h5 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))]['Prezzo'];?>
$</b> </h5> </a>
        </div>
        <div class="col-md-3 col-6 p-4">
          <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+1]['Nome'];?>
">
            <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+1]['Stile'];?>
.jpg" width="200" height="300" >
            <h4 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+1]['Nome'];?>
</b> </h4>
          <h5 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+1]['Prezzo'];?>
$</b> </h5> </a>
          <div class="row"></div>
        </div>
        <div class="col-md-3 col-6 p-4">
          <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+2]['Nome'];?>
">
            <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+2]['Stile'];?>
.jpg" width="200" height="300">
          <h4 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+2]['Nome'];?>
</b> </h4>
            <h5 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+2]['Prezzo'];?>
$</b> </h5> </a>
        </div>
        <div class="col-md-3 col-6 p-4"><a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+3]['Nome'];?>
">
            <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+3]['Stile'];?>
.jpg" width="200" height="300">
          <h4 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+3]['Nome'];?>
</b> </h4>
            <h5 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+3]['Prezzo'];?>
$</b> </h5> </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-6 p-4">
          <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+4]['Nome'];?>
">
            <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+4]['Stile'];?>
.jpg"  width="200" height="300">
          <h4 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+4]['Nome'];?>
</b> </h4>
            <h5 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+4]['Prezzo'];?>
$</b> </h5> </a>
        </div>
        <div class="col-md-3 col-6 p-4">
          <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+5]['Nome'];?>
">
            <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+5]['Stile'];?>
.jpg" width="200" height="300" >
          <h4 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+5]['Nome'];?>
</b> </h4>
            <h5 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+5]['Prezzo'];?>
$</b> </h5> </a>
          <div class="row"></div>
        </div>
        <div class="col-md-3 col-6 p-4">
          <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+6]['Nome'];?>
">
            <img src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+6]['Stile'];?>
.jpg" width="200" height="300">
          <h4 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+6]['Nome'];?>
</b> </h4>
            <h5 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+6]['Prezzo'];?>
$</b> </h5> </a>
        </div>
        <div class="col-md-3 col-6 p-4">
          <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+7]['Nome'];?>
">
            <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+7]['Stile'];?>
.jpg" width="200" height="300">
          <h4 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+7]['Nome'];?>
</b> </h4>
            <h5 class="mt-3 mb-0"> <b><?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[(8*($_smarty_tpl->tpl_vars['pagina']->value-1))+7]['Prezzo'];?>
$</b> </h5> </a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 w-75 ml-auto">
    <div class="container">
      <div class="row ml-5">
        <div class="col-md-3 w-100 col-3" style="">
          <ul class="pagination pagination-lg">
            <li class="page-item"> <a class="page-link" href="/Beer-Time/Acquisto/Catalogo?<?php echo $_smarty_tpl->tpl_vars['pagina']->value-1;?>
"><<</a> </li>
            <li class="page-item active"> <a class="page-link" href="#"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</a> </li>
            <li class="page-item"> <a class="page-link" href="/Beer-Time/Acquisto/Catalogo?<?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
">>></a> </li>
          </ul>
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
