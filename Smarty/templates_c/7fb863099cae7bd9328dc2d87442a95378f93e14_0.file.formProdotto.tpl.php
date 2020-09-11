<?php
/* Smarty version 3.1.33, created on 2020-09-10 10:56:00
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\formProdotto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f59ea20116c48_29505045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fb863099cae7bd9328dc2d87442a95378f93e14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\formProdotto.tpl',
      1 => 1599727990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbarLoggedProd.tpl' => 1,
  ),
),false)) {
function content_5f59ea20116c48_29505045 (Smarty_Internal_Template $_smarty_tpl) {
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
          <h1 class="mb-4">Inserisci dettagli prodotto</h1>
          <form action="" method="post">
            <div class="form-row">
              <div class="form-group col-md-6"><label>Nome Prodotto</label> <input min="5" max="20" type="text" class="form-control" id="form27" name="Nome" required="required">
                <div class="form-group"><label>Formato</label>
                  <select name="Formato" class="custom-select">
                    <option value="33">33cl</option>
                    <option value="50">50cl</option>
                    <option value="75">75cl</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-md-6"><label>Gradazione Alcolica</label> <input min="1" max="90" type="number" class="form-control" id="form28" name="Gradazione" placeholder="Gradazione" required="required">
                <div class="form-group"><label>Prezzo</label><input min="1" max="1000" type="number" class="form-control" id="form28" name="Prezzo" placeholder="Prezzo" required="required"></div>
              </div>
            </div>
            <div class="form-group"><label>Descrizione</label> <textarea  class="form-control form-control-lg"  name="Descrizione" rows="5"></textarea>
              <div class="form-group"><label>Stile</label>
                <select name="Stile" class="custom-select">
                  <option value="Barley Wine">Barley Wine</option>
                  <option value="Bitter Ale">Bitter Ale</option>
                  <option value="Bock">Bock</option>
                  <option value="Brown Ale">Brown Ale</option>
                  <option value="Export">Export</option>
                  <option value="Gueuze-Lambic">Gueuze-Lambic</option>
                  <option value="India Pale Ale">India Pale Ale</option>
                  <option value="Kriek-Lambic">Kriek-Lambic</option>
                  <option value="Pilsener">Pilsener</option>
                  <option value="Schwarzbier">Schwarzbier</option>
                  <option value="Prova">Prova</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
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
