<?php

    include("connection.php");

    if(isset($_POST['submit'])){
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $username = $_POST["log"];
        $password = $_POST["pass"];

        if(strlen($imie) >0 && strlen($nazwisko) >0 && strlen($username) >0 && strlen($password) >0){

        $sql = "INSERT INTO `user`(`Imie`, `Nazwisko`, `Login`, `Hasło`, `Typ`)
        VALUES ('$imie', '$nazwisko', '$username', '$password','u')";        
        if ($conn->query($sql) === TRUE) {
            echo "Konto zostało założone. Możesz się zalogować.";
            header("Location:logowanie.php");
          } else {
            header("Location:rejestracja.php");
          }
    }
    else{
      header("Location:rejestracja.php");
    }}
    
        

?>
