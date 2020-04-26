<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
require_once("funkcje.php");
if(isSet($_GET["cookie"])){
    if(setcookie("Cookie", "wartość", time() + $_GET["czas"], "/")){
        echo "udalo sie<br/>";
    }
        else{
        echo "Fail<br/>";
    }
}
?>
<a href="http://localhost/index.php">Index</a>
</body>
</html>
