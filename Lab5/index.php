<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
<?php require 'funkcje.php'?>
</head>
<body>
<?php
session_start();
echo " <h1> Nasz system</h1>";
?>
<?php
if (isset($_POST["wyloguj"])) {
    echo "Wylogowano";
    $_SESSION["zalogowany"] = 0;
    echo $_SESSION["zalogowany"];
}
if (isSet($_COOKIE["Cookie"])) {
    echo "Cookie: ";
    echo $_COOKIE['Cookie'];
  }
  else{
      echo "Cookie umarło :(";
  }
?>
<form action="logowanie.php" method="post">
<fieldset>
<legend>Logowanie:</legend>
Login: <br/><input type="text" name="login"><br/>
Hasło: <br/><input type="password" name="haslo"><br/><br/>
<input type="submit" value="Zaloguj sie" name="logowanie"/>
</fieldset>
</form>
<form action="cookie.php" method="get">
<fieldset>
<legend>Tworzenie Ciasteczka:</legend>
Czas: <br/><input type="number" name="czas"><br/>
</fieldset>
<input type="submit" value="utworzCookie" name="cookie"/>
</form>
<a href="http://localhost/user.php">User</a>
</body>
</html>
