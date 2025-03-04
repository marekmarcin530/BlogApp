<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css.css" />
    <title>Logowanie</title>
  </head>
  <body>
    <div class="box">
      <div class="text">
        <p>Logowanie</p>
      </div>



      
      <div class="form">
        <form method="POST" name="form" action="logowanieskrypt.php">
          <div class="log">
            <label for="user">Login:</label>
            <input type="text" name="log" placeholder="Login" id="user" autocomplete="off"/>
          </div>

          <div class="log">
            <label for="haslo">Hasło:</label>
            <input type="password" name="pass" placeholder="Hasło" id="haslo" />
          </div>

          <div class="submit">
            <input type="submit" name="submit" value="Zaloguj" onclick="isvalid()"/>
          </div>
        </form>
    
<script>

function isvalid(){
      let username = document.getElementById("user").value;
      let password = document.getElementById("haslo").value;

          if(username.length <= 0 || password.length <= 0){
            // window.location.href = "logowanie.php";    
            alert("Niepoprawny login lub hasło.");  
            }
      }
</script>



        <div class="rej">
          <p>Nie masz konta? <a href="rejestracja.php">Zajerestruj się</a></p>
        </div>
        
      </div>

      <div class="connection" >
        <?php
            include("connection.php");
            ?>
      </div>
    </div>
  </body>
</html>
