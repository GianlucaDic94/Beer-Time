<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body>
  {include 'navbarLogged.tpl'}
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6 col-10">
          <form class="text-left" method="post" action="/Beer-Time/Acquisto/Acquista?{$totale}">
            <div class="form-group"> <label for="form16">Titolare della carta</label> <input min="5" max="20" type="text" class="form-control" id="form16" name="Titolare" required="required"> </div>
            <div class="form-group"> <label for="form17">Numero della carta</label> <input min="13" max="16" type="text" class="form-control" id="form17" name="Carta" required="required"> </div>
            <div class="form-group"> <label for="form18">Codice sicurezza</label> <input type="number" min="100" max="999" class="form-control w-25" id="form18" name="codice" required="required"> </div>
            <div class="form-row">
              <div class="form-group col-md-6"> <label for="form19">Mese scadenza(MM)</label> <input min="1" max="12" type="number" class="form-control" id="form19" style="opacity: 1;" name="Mese" required="required"> </div>
              <div class="form-group col-md-6"> <label for="form20">Anno scadenza(YYYY)</label> <input min="2020" max="2200" type="number" class="form-control" id="form20" name="Anno" required="required"> </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12"> <label for="form19">Indirizzo di spedizione</label> <input min="6" max="30" type="text" class="form-control" id="form19" name="Indirizzo" required="required"> </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Conferma</button>
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