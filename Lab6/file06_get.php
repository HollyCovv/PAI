<?php session_start(); ?>
<?php

$link = mysqli_connect("localhost", "scott", "triger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT * FROM pracownicy";
$result = $link->query($sql);
foreach ($result as $v) {
    echo $v["ID_PRAC"] . " " . $v["NAZWISKO"] . "<br/>";
}
$result->free();
$link->close();
?>

<a href="file06_post.php"> Dodaj pracownika!</a>

if (isset($_SESSION['Done']))
{
echo $_SESSION['Done'];
session_unset();
}
