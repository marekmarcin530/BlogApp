<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edytuj post</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css2.css" />
  </head>
  <body>
    <div class="container p-5 text-white text-center bg">
      <div class="row">
        <div class="col-sm-5">
          <img src="https://picsum.photos/id/43/200/300?grayscale" />
        </div>
        <div class="col-sm-6">
          <h1>PROJEKT WWW</h1>
          <?php
          session_start(); 
          echo '<h3>Witaj '.$_SESSION['imie'].'!</h3>';

          ?>
        </div>
      </div>
    </div>

    <div class="container navi">
      <nav class="navbar navbar-expand-sm navbar-dark bg-black">
        <div class="container-fluid">

          <div class="collapse navbar-collapse">
  
              <a class="navbar-brand me-auto" href="dodaj_artykul.php">Dodaj artykuł</a>
            <form action="" method="POST">
              <button class="btn btn-primary me-auto" type="submit" name="log_out">
                Wyloguj
              </button>
              <?php
                if (isset($_POST['log_out'])) {
                  echo"Koniec sesji";
                  session_destroy();
                  header("Location: logowanie.php");
                  exit;
              }
              ?>
            </form>
          </div>
        </div>
      </nav>
    </div>

    <div class="container mt-3">
      <div class="row">
        <div class="col-sm-9 overflow-auto p-3 bg-warning mb-4">
          <div>

              <?php
                  include "edit-post.php";
              ?>

          </div>
        </div>
        

        <div class="col-sm-3 mb-4">
          <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="0"
                class="active"
              ></button>
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="1"
              ></button>
              <button
                type="button"
                data-bs-target="#demo"
                data-bs-slide-to="2"
              ></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="https://picsum.photos/id/60/250/400"
                  alt="Los Angeles"
                  class="d-block w-100"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="https://picsum.photos/id/127/250/400"
                  alt="Chicago"
                  class="d-block w-100"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="https://picsum.photos/id/237/250/400"
                  alt="New York"
                  class="d-block w-100"
                />
              </div>
            </div>

            <!-- Left and right controls/icons -->
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#demo"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#demo"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="container bg text-white p-5 text-center">
      <div class="row">
        <div class="col-sm-2">
          <h4>Państwowa Wyższa Szkoła Techniczno-Ekonomiczna</h4>

          <p>
            Czarnieckiego 16<br />
            37-500 Jarosław
          </p>
        </div>

        <div class="col-sm-9">
          <div style="width: 100%">
            <iframe
              width="100%"
              height="250"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
              src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=Jaros%C5%82aw%20PWSTE+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
              ><a href="https://www.maps.ie/distance-area-calculator.html"
                >distance maps</a
              ></iframe
            >
          </div>
        </div>

        <div class="col-sm-1"></div>
      </div>
    </div>
  </body>
</html>
