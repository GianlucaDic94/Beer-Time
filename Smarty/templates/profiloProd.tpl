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
          <h1 class="mb-4">Informazioni personali</h1>
          <h4>Inserisci i campi da modificare</h4>
          <form method="post" action="/Beer-Time/Profilo/Modifica">
            <div class="form-row">
              <div class="form-group col-md-6"><label>Nome</label> <input min="5" max="20" type="text" class="form-control" id="form27" placeholder="{$utente.Nome}" name="Nome"> </div>
              <div class="form-group col-md-6"><label>Username</label> <input  min="3" max="15" type="text" class="form-control" id="form28" placeholder="{$utente.Username}" name="Username"> </div>
            </div>
            <div class="form-group"><label>Password</label> <input min="4" max="15" type="password" class="form-control" id="form29"  name="Password">
              <div class="form-group"><label>Email</label><input type="email" min="7" max="20" class="form-control" id="form29" placeholder="{$utente.Email}" name="Email"></div>
              <div class="form-group"><label>Indirizzo</label> <input min="6" max="30" type="text" class="form-control" id="form28" placeholder="{$utente.Indirizzo}" name="Indirizzo"> </div
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
          </form>
        </div>
      </div>
    </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>