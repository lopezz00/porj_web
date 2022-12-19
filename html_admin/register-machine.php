<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function check_pwd(input) {
if (input.value != document.getElementById('password').value) {
    input.setCustomValidity('Les contrasenyes no coincideixen!');
    }
    else{
// input is valid -- reset the error message
    input.setCustomValidity('');
    }
    }
</script>
<script>
  function check_email(input) {
  if (input.value != document.getElementById('correu_new_user').value) {
      input.setCustomValidity('Els correus no coincideixen');
      }
      else{
  // input is valid -- reset the error message
      input.setCustomValidity('');
      }
      }
  </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>TechLabHubs</title>

  </head>
  <body>
    
    <?php
    $title="Home";
    $page="home";
    include_once ("../navbar.php");

  
    ?>
    
<script src="./js/cookies.js">checkCookiesIndex();</script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="./js/main.js"></script>
    <script src="/css/main3.css"></script>

  </body>
</html>

<!---- INTRO --->
<section name="new_user">
  <div class="container-md">
    <div class="text-center">
      <h2 class="text-primary mt-3">Registra una nova màquina</h2>
      <p class="mt-4">En aquesta pàgina pots registrar una màquina que encara no està definida. Posteriorment, a l'apartat de "Afegeix màquina a laboratori",
        podràs indicar els laboratoris on està ubicada.</p>
    </div>
<div class="row justify-content-center mt-2 mb-5">
  <div class="col-lg-6">

<form name="form" action="../../porj_node/db/db_maquines.php" method="post">
  <div class="mb-2">
    <label for="name_new_machine" class="form-label">Nom de la màquina:</label>
    <div class="mb-2 input-group">
      <span class="input-group-text">
        <i class="bi bi-person-circle"></i>
              </span>
      <input required ="required" maxlength="50" type="email" class="form-control" name="correu_new_user" placeholder="Exemple: Soldadora">
    </div>
  </div>

  <div class="mb-2">
    <label for="description_machine" class="form-label">Descripció de la màquina:</label>
    <div class="mb-2 input-group">
      <span class="input-group-text">
        <i class="bi bi-person-circle"></i>
              </span>
      <input required ="required" class="form-control w-50" name="description_machine">
      
    </div>
  </div>

 
  <button type="submit" value="enviar" class="mt-4 btn btn-secondary">Registra</button>
  <button type="reset" value="Borrar" class="mt-4 btn btn-secondary">Esborra</button>

</form>
  </div>
</div>
</div>
</section>
<!---- MAPA --->


<footer class="container-fluid bg-primary d-flex justify-content-center">
  <p class="text-light mt-2 mb-2">Tens alguna incidència? Contacta amb nosaltres! <a class = "text-white" href="https://wa.me/34666666666">+34 666 666 666</a></p>
</footer>

