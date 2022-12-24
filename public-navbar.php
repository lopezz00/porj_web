
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="css/main.css">-->
    <title>TechLabHub</title>
  </head>
  <body>

    <!-- Barra de navegacio -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
      <div class="container-fluid">
          <a href= "public-index.php" class="navbar-brand text-primary fs-5 fw-bold">TechLab</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          
          <div  class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="public-login.html">Identifica't</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="client-reserva.php">Disponibilitat</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="client-reserva.html">Fes una reserva</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin: Afegeix</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="admin-register-machine.php">Màquina</a></li>
                  <li><a class="dropdown-item" href="admin-register-lab.php">Laboratori</a></li>
                  <li><a class="dropdown-item" href="admin-register-user.php">Usuari</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cancel·la una reserva</a> <!--- En cas de que l'usuari tingui una o mes reserves, s'ha d'activar --->
              </li>
              <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tanca sessió</a> <!--- Tanca la sessio de l'usuari --->
              
              </ul>
          </div>
      </div>
</nav>