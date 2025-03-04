<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "biblioteka";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    //Check connection
    if($conn->connect_error){
        die("Błąd połączenia ".$conn->connect_error);
    }
    echo "";

?>