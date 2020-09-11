<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body>
  {include 'navbarLoggedProd.tpl'}
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
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 </body>

</html>