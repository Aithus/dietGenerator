<?php
include("com/zugriff.inc.mp4");
?>
<html>
<head>
  <title>Speiseplan erstellen</title>
</head>
<body>
  <?php
    $i = 0;
    $set = 0;
  ?>
  <form action="peopleSettings.php" method="post">
    <input type="radio" name="personen" value="gleich"> Die Anzahl an Personen bleibt die Woche über gleich<br>
    Bitte geben sie die gleichbleibende Anzahl der Personen an: <input type="text" name="anzahlGleich"><br>
    <input type="radio" name="personen" value="verschieden"> Die Anzahl der Personen wechselt über die Woche <br>
    Bitte geben sie die Anzahl der Leute für das Mittagessen ein:<br>
    Montag:      <input type="text" name="mittagMontag"><br>
    Dienstag:    <input type="text" name="mittagDienstag"><br>
    Mittwoch:    <input type="text" name="mittagMittwoch"><br>
    Donnerstag:  <input type="text" name="mittagDonnerstag"><br>
    Freitag:     <input type="text" name="mittagFreitag"><br>
    Samstag:     <input type="text" name="mittagSamstag"><br>
    Sonntag:     <input type="text" name="mittagSonntag"><br>
    Bitte geben sie die Anzahl der Leute für das Abendessen ein:<br>
    Montag:      <input type="text" name="abendMontag"><br>
    Dienstag:    <input type="text" name="abendDienstag"><br>
    Mittwoch:    <input type="text" name="abendMittwoch"><br>
    Donnerstag:  <input type="text" name="abendDonnerstag"><br>
    Freitag:     <input type="text" name="abendFreitag"><br>
    Samstag:     <input type="text" name="abendSamstag"><br>
    Sonntag:     <input type="text" name="abendSonntag"><br>
    <input type="submit" value="Weiter" name="next">
  </form>
  <?php
    if(!empty($_POST["next"])) {
      echo "Knopf gedrückt!";
      if($_POST["personen"] == "gleich") {
        if(!empty($_POST["anzahlGleich"])) {
          $sql1 = "INSERT INTO pufferSpeicher " . "(id, montagMittag, dienstagMittag, mittwochMittag, donnerstagMittag, freitagMittag, samstagMittag, sonntagMittag, montagAbend, dienstagAbend, mittwochAbend, donnerstagAbend, freitagAbend, samstagAbend, sonntagAbend, gleichbleibend) VALUES ('', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$_POST[anzahlGleich]')";
          if(mysqli_query($db, $sql1)) {
            echo "Abfrage Erfolgreich!";
            //header("Location: createDiet.php");
          } else {
            echo "Abfrage nicht erfolgreich!";
            echo $sql1;
          }
        }
        echo "Gleich!";
      }
      if($_POST["personen"] == "verschieden") {
        echo "Verschieden!";
        $i = 0;
        if(!empty($_POST["mittagMontag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["mittagDienstag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["mittagMittwoch"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["mittagDonnerstag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["mittagFreitag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["mittagSamstag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["mittagSonntag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["abendMontag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["abendDienstag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["abendMittwoch"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["abendDonnerstag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["abendFreitag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["abendSamstag"])) {
          $i = $i + 1;
          echo $i;
        }
        if(!empty($_POST["abendSonntag"])) {
          $i = $i + 1;
          echo $i;
        }
        if($i == 14) {
          /*$db = @mysqli_connect("localhost", "root") or die("Verbindung zu MySQl gescheitert!");
          mysqli_set_charset($db, "utf8");
          @mysqli_select_db($db, "dietGenerator") or die("Datenbankverbindung gescheitert!");*/

          echo "Alles wurde ausgefüllt";
          $sql2 = "INSERT INTO pufferSpeicher " . "(id, montagMittag, dienstagMittag, mittwochMittag, donnerstagMittag, freitagMittag, samstagMittag, sonntagMittag, montagAbend, dienstagAbend, mittwochAbend, donnerstagAbend, freitagAbend, samstagAbend, sonntagAbend, gleichbleibend) VALUES ('', '$_POST[mittagMontag]', '$_POST[mittagDienstag]', '$_POST[mittagMittwoch]', '$_POST[mittagDonnerstag]', '$_POST[mittagFreitag]', '$_POST[mittagSamstag]', '$_POST[mittagSonntag]', '$_POST[abendMontag]', '$_POST[abendDienstag]', '$_POST[abendMittwoch]', '$_POST[abendDonnerstag]', '$_POST[abendFreitag]', '$_POST[abendSamstag]', '$_POST[abendSonntag]', '0')";
          if(mysqli_query($db, $sql2)) {
            echo "Abfrage Erfolgreich!";
            //header("Location: createDiet.php");
          } else {
            echo "Abfrage nicht erfolgreich!";
            echo $sql2;
          }
        } else {
          echo "Bitte alles ausfüllen, oder die andere Variante nehmen";
        }
      }
      }
  ?>
</body>
</html>
