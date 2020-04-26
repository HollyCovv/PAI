<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
session_start();
require_once("funkcje.php");
if ($_SESSION["zalogowany"] != 1) {
    header("Location: index.php");
}
echo "Zalogowano";
echo $_SESSION["zalogowany"];
?>
<form action="index.php" method="post">
<fieldset>
<legend>Wylogowywanie:</legend>
<input type="submit" value="wyloguj" name="wyloguj"/>
</fieldset>
</form>
<fieldset>
<legend>Wysylanie:</legend>
<form action='user.php' method='POST' enctype='multipart/form-data'>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</fieldset>
</form>
<?php

if(isSet($_POST["submit"])){
    $currentDir = getcwd();
    $uploadDirectory = '/zdjeciaUzytkownikow//';
    $fileName = $_FILES['fileToUpload']['name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileType = $_FILES['fileToUpload']['type'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    if($fileName != "" and ($fileType == 'image/png' or $fileType == 'image/jpg' or $fileType == 'image/JPG' or $fileType == 'image/PNG' )){
      $uploadPath = $currentDir.$uploadDirectory.$fileName;
      if(move_uploaded_file($fileTmpName,$uploadPath))
      {
        echo "<img src=".$fileName." height=300 width=300><br>";
    }
  }
}
 ?>
<a href="http://localhost/index.php">Index</a>
</body>
</html>

