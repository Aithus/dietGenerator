<?php
  include("com/zugriff.inc.mp4");
?>
<html>
<head>
  <title>Speiseplan erstellen</title>
</head>
<body>
  <p>Bitte suchen sie ihre Speisen für ihren Mittag aus:<br></p>
  <form action="manuel.php" method="post">
    <table border="1" style="border-spacing: 0;">
      <tr>
        <th>Montag</th><th>Dienstag</th><th>Mittwoch</th><th>Donnerstag</th><th>Freitag</th><th>Samstag</th><th>Sonntag</th><th>Name</th><th>Herkunft</th><th>Schwierigkeit</th><th>Kategorie</th>
      </tr>
      <?php
        $i = 1;
        $sql = "SELECT * FROM dishes";
        $result = mysqli_query($db, $sql);

        while($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td>
                <input type="radio" name="montag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="dienstag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="mittwoch" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="donnerstag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="freitag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="samstag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="sonntag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <?php
                  echo $row[name];
                ?>
              </td>
              <td>
                <?php
                  echo $row[regionalKitchen];
                ?>
              </td>
              <td>
                <?php
                  echo $row[difficulty];
                ?>
              </td>
              <td>
                <?php
                  $catNum = $row[categorie];
                  switch ($catNum) {
                    case '0':
                      echo "Kategorie mit der id 0";
                      break;

                    default:
                      echo "Ein unbekannter Fehler ist aufgetreten. Bitte kontaktieren Sie ihren Systemadministrator.";
                      break;
                  }
                ?>
              </td>
            </tr>
          <?php
        }
      ?>
    </table>
    <p>Wählen sie nun bitte ihre Spesen für das Abendessen aus:</p>
    <table border="1" style="border-spacing: 0;">
      <tr>
        <th>Montag</th><th>Dienstag</th><th>Mittwoch</th><th>Donnerstag</th><th>Freitag</th><th>Samstag</th><th>Sonntag</th><th>Name</th><th>Herkunft</th><th>Schwierigkeit</th><th>Kategorie</th>
      </tr>
      <?php
        $i = 1;
        $sql = "SELECT * FROM dishes";
        $result = mysqli_query($db, $sql);

        while($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td>
                <input type="radio" name="montag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="dienstag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="mittwoch" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="donnerstag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="freitag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="samstag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <input type="radio" name="sonntag" value=<?php echo "$i"; ?>>
              </td>
              <td>
                <?php
                  echo $row[name];
                ?>
              </td>
              <td>
                <?php
                  echo $row[regionalKitchen];
                ?>
              </td>
              <td>
                <?php
                  echo $row[difficulty];
                ?>
              </td>
              <td>
                <?php
                  $catNum = $row[categorie];
                  switch ($catNum) {
                    case '0':
                      echo "Kategorie mit der id 0";
                      break;

                    default:
                      echo "Ein unbekannter Fehler ist aufgetreten. Bitte kontaktieren Sie ihren Systemadministrator.";
                      break;
                  }
                ?>
              </td>
            </tr>
          <?php
        }
      ?>
    </table>
    <input type="submit" value="Auswählen" name="choose">
  </form>
</body>
</html>
