<html>
<head>
  <title>Speiseplan erstellen</title>
</head>
<body>
  <h1>
    Speiseplan erstellen:
  </h1>
  <h2>
    Nachdem wir nun die Anzahl der Mitessenden eingestellt haben,<br>
    können wir nun beginnen den Speiseplan zu erstellen.<br>
    Bevor wir damit aber nun beginnen können müssen sie entscheiden, ob sie die Gerichte einzeln auswählen wollen, <br>
    oder ob der Computer die Gerichte zfällig auswählen soll:
    <form action="createDiet.php" method="post">
      <input type="submit" value="Manuell auswählen" name="manuell">
      <input type="submit" value="Zufällige Gerichte" name="random">
    </form>
  </h2>
  <?php
    /*if (!(isset($_POST["personenzahl"]))) {
      echo "Bitte erst die Anzahl an Personen festlegen!";
    }*/
    if (!empty($_POST["manuell"])) {
      header("Location: manuel.php");
    }
    if (!empty($_POST["random"])) {
      header("Location: random.php");
      //header("Location: peopleSettings.php");
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
