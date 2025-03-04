<?php

include "connection.php";


if (isset($_GET["id"])) {
    $sql = "SELECT * FROM article WHERE Id = ".$_GET["id"];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
  
    echo "<form method='POST' action=''>";
    
    echo "Edytujesz post z Id nr: <input name='id' value='".$row["Id"]."'>";

    echo "<br><label>Tytuł artykułu </label>";
    echo '<input type="text" class="form-control" name="tytul" value="'.$row["Tytuł"].'">';

    echo "<label>Treść artykułu </label>";
    echo '<textarea class="form-control" rows="5" id="artykul" name="artykul">'.$row["Tekst"].'</textarea>';
    echo '<button type="submit" class="btn btn-primary mt-2 mb-5" name="zapisz">Update</button>';
 
    echo "</form>";
  }

  if (isset($_POST["zapisz"])) {
    $id = $_POST["id"];
    $tytul = $_POST["tytul"];
    $artykul = $_POST["artykul"];
  
    $sql = "UPDATE article SET Tytuł='".$tytul."', Tekst='".$artykul."' WHERE Id=".$id;
    mysqli_query($conn, $sql);
    header("Location: index.php");
  }
  
?>