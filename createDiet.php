<html>
<head>
  <title>Plan erstellen</title>
</head>
<body>
  <h1>Personeneinstellung:</h1>
  <h2>Bitte geben sie die Anzahl der Personen an:<br>

  <h1>Plan erstellen:<h1>
  <h2>
    <form action="createDiet.php" method="post">
      <input type="submit" value="Manuell auswählen" name="manuell">
      <input type="submit" value="Zufällige Gerichte" name="random">
    </form>
  </h2>
  <?php
    if (!empty($_POST["manuell"])) {
      echo "Manuell!";
    }
    if (!empty($_POST["random"])) {
      echo "Zufällig!";
    }
    /*
      if($_POST == "manuell") {
        echo "Manuell!";
      }
      if($_POST == "random") {
        echo "Zufällig!";
      }
    */
  ?>
</body>
</html>
