<?php
include "connection.php";
session_start();
$title=$_POST['tlt'];
$article=$_POST['article'];
$id_autor=$_SESSION['id'];


// FILE

$target_dir = "Photos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}



// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  } else {
    
  }
}
$conn = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



//GETTING name file

// $file_name = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// // $temp_name = $_FILES['fileToUpload']['tmp_name'];
// $new_name =$target_dir . uniqid() . '_' . $file_name;
$old_name = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$new_name = $target_dir . uniqid() . '_' . basename($old_name);

rename($old_name, $new_name);





// INSERT DATES
 $sql = "INSERT INTO article (Id_Autora, zdj, Tytuł , Tekst) VALUES ('$id_autor', '$new_name', '$title','$article')";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>


