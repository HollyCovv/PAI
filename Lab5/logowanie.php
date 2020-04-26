<?php
session_start();
require("index.php");
if (isset($_POST)) {
    if($_POST["login"] == $osoba1->login and $_POST["haslo"] == $osoba1->haslo){
        $zalogowanyImie = $osoba1->login;
        $zalogowany = 1;
        $_SESSION["zalogowany"] = $zalogowany;
        $_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
        header("Location: user.php");
    //print_r("Przesłany login:".$_POST["login"]."<br>");
    //print_r("Przesłane haslo:".$_POST["haslo"]."<br>");
    }
    elseif($_POST["login"] == $osoba2->login and $_POST["haslo"] == $osoba2->haslo){
        $zalogowanyImie = $osoba2->login;
        $zalogowany = 1;
        $_SESSION["zalogowany"] = $zalogowany;
        $_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
        header("Location: user.php");
        //print_r("Przesłany login:".$_POST["login"]."<br>");
        //print_r("Przesłane haslo:".$_POST["haslo"]."<br>");
    }
    else{
        header("Location: index.php");
    }
}
?>