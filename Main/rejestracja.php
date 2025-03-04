<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css.css" />
    <title>Rejestracja</title>
  </head>
  <body>
    <div class="box">
      <div class="text">
        <p>Rejestracja</p>
      </div>

      <div class="form">
        <form method="POST" action="rejestracjaskrypt.php">

        <div class="log">
            <label for="imie">Imie:</label>
            <input type="text" name="imie" placeholder="Imie" id="imie" autocomplete="off"/>
          </div>

          <div class="log">
            <label for="nazwisko">Nazwisko:</label>
            <input type="text" name="nazwisko" placeholder="Naziwsko" id="nazwisko" autocomplete="off"/>
          </div>

          <div class="log">
            <label for="user">Login:</label>
            <input type="text" name="log" placeholder="Login" id="user" autocomplete="off"/>
          </div>

          <div class="log">
            <label for="haslo">Hasło:</label>
            <input type="password" name="pass" placeholder="Hasło" id="haslo" autocomplete="off"/>
          </div>

          <div class="submit">
            <input type="submit" name="submit" value="Zajerestruj" onclick="isvalid()"/>
          </div>
        </form>

        <div class="rej" >
          <p>Masz konto? <a href="logowanie.php">Zaloguj się</a></p>
        </div>

        <div class="connection" >

                <?php
                include("connection.php");
                ?>
                
        </div>
      </div>

      <script>

    function isvalid(){
          let imie = document.getElementById("imie").value;
          let nazwisko = document.getElementById("nazwisko").value;
          let username = document.getElementById("user").value;
          let password = document.getElementById("haslo").value;

              if(username.length <= 0 || password.length <= 0 || imie.length <= 0 || nazwisko.length <= 0){
                alert("Wypełnij wszystkie pola.");  
                }
          }
    </script>
    
    </div>
  </body>
</html>
