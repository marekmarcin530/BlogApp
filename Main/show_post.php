<?php

include("connection.php");



$sql = "SELECT article.Id ,article.zdj, article.Tytuł, article.Tekst, user.Imie, user.Nazwisko , user.Typ 
FROM article JOIN user ON article.Id_Autora = user.Id " ;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    echo '<div class="container-fluid ">';
        while($row = mysqli_fetch_assoc($result)) {

            echo '<div class="row" style="border-bottom: solid 3px black; border-left: solid 3px black; padding: 15px 0px;" >';
                    echo '<div  class="col-sm-3">';

                    $imageFileType = strtolower(pathinfo($row["zdj"],PATHINFO_EXTENSION));

                    if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ) {
                    echo '<img id="img_art" style="max-width: 100%;" src="'.$row["zdj"].'">';
                    } else {
                        echo '<img id="img_art" style="max-width: 100%;" src="Photos/download.png">';
                    }
                    echo '</div>';

                echo ' <div class="col-sm-9">';

                    echo "<h2 style='font-size: 32px;'>".$row["Tytuł"]. "</h2>";
                    echo "<h5 style='font-style: italic;'> Autor: ".$row["Imie"].' '.$row["Nazwisko"]."</h5>";
                    echo "<p style=margin-top=10px;>".$row["Tekst"]. "</p>";
                    
                    if (isset($row['Typ'])) {
                        echo "Artukuł z Id nr: " .$row["Id"] ."<br>";
                        echo "<a href='edit.php?id=" . $row["Id"] . "'>Edytuj</a> ";

                        if($_SESSION['typ']=="m"){
                        echo "  <a href='delete_skrypt.php?id=" . $row["Id"] . "'>Usuń</a>"; 
                        }
                    
                    }
                echo '</div>';

            echo '</div>';
        }
    echo '</div>';
} 

?>