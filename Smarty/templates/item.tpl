<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body >
  {include 'navbarLogged.tpl'}
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style=""><img class="img-fluid d-block" src="/Beer-Time/Smarty/templates/images/{$bottiglia[0].Stile}.jpg"></div>
        <div class="col-md-6">
          <h1 class="">{$bottiglia[0].Nome}</h1>
          <div class="row">
            <div class="col-md-12">
              <p class="lead">{$bottiglia[0].Descrizione}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 class="">Gradazione: <font color="#6c757d"><span style="font-size: 25.6px;">{$bottiglia[0].Gradazione_Alcolica}</span></font>
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 class="">Formato:&nbsp;<small class="text-muted">{$bottiglia[0].Formato}</small></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2  <class="">Stile: <a href="" > <small class="text-muted">  {$bottiglia[0].Stile}</small></a></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 <a href="">Produttore :&nbsp; <a href=""><small class="text-muted">{$bottiglia[0].Produttore}</small></a></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="" contenteditable="true"><small class="text-muted">
                      <font color="#333333"><span style="font-size: 32px;">Prezzo:&nbsp;</span></font>{$bottiglia[0].Prezzo}$
                    </small></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <form method="post" action="/Beer-Time/Acquisto/Spesa?{$bottiglia[0].Nome}" >
              Quantità:
              <input type="number" name="Quantità" min="1" value="1" >
              <input type="submit" id="button1" class="btn btn-primary" value="Aggiungi al carrello">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="/Beer-Time/Smarty/templates/js/toast.js"

</html>