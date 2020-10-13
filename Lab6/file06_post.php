<?php session_start();?>
<?php
$link = mysqli_connect("localhost", "scott", "triger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
if (isset($_SESSION['ERROR']))
{
echo $_SESSION['ERROR'];
    session_unset();
}
print<<<KONIEC
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 </head>
 <body>
 <form action="file06_redirect.php" method="POST">
 id_prac <input type="text" name="id_prac">
 nazwisko <input type="text" name="nazwisko">
 <input type="submit" value="Wstaw">
 <input type="reset" value="Wyczysc">
 </form>
KONIEC;

session_unset();
