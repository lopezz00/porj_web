<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/main.css">
        <title>Qui som?</title>
    </head>
    <body>

    <?php
  $title="who";
  $page="who";
  include_once ("public-navbar.php");

  ?>




        <section>
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <br>
                        <h1>About Us</h1>
                        <p class ="description-project">
                          We are a group of fourth year ICT Systems Engineering students and this is our project for the Systems Integration course.
                          In this project we apply our knowledge of ICT to control a school laboratory because of COVID-19.
                          The project is a continuation of the Systems Engineering subject.
                          In this project we try to monitor a laboratory in real time and we have access to the machines remotely thanks to a printed circuit board that we designed in the previous subject.
                          In this project, apart from monitoring and controlling people in the laboratory, we deal with the interconnection of networks from an embedded device to a server with its database.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>