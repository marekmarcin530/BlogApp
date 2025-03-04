<?php

    include("connection.php");

    if(isset($_POST['submit'])){

        $username = $_POST["log"];
        $password = $_POST["pass"];

            $sql = "Select * from user where Login = '$username' and Hasło = '$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

        if($row[0]){

            session_start(); 
            $_SESSION['log ged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['imie'] = $row['Imie'];
            $_SESSION['nazwisko'] = $row['Nazwisko'];
            $_SESSION['typ'] = $row['Typ'];
            $_SESSION['id'] = $row['Id'];
            header("Location: index.php");
            exit;
        }
        else{
            header("Location: logowanie.php");
        }
    }
?>