<?php
include "connection.php";

if (isset($_GET["id"])) {
    
    $sql = " DELETE FROM article WHERE Id = ".$_GET["id"];
    $result = mysqli_query($conn, $sql);

    if($result){
    header("Location: index.php");
    exit;
}

else{
        echo "Nastąpił problem z usuwaniem";
}
  }
?>