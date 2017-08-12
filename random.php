<?php
include("com/zugriff.inc.mp4");
include("com/functions.inc.php");
?>
<html>
<head>
  <title>Speiseplan erstellen</title>
</head>
<body>
  <?php
    $i = 0;
    $a = 0;
    $b = 0;
    $c = 0;
    $values;
    $sql1 = "SELECT gleichbleibend FROM pufferSpeicher";
    $sql2 = "SELECT * FROM dishes";
    $sql3 = "SELECT * FROM pufferSpeicher";
    $result1 = mysqli_query($db, $sql1);
    $result2 = mysqli_query($db, $sql2);
    $result3 = mysqli_query($db, $sql3);

    $row1 = mysqli_fetch_assoc($result1);
    $val1[0] = $row1[gleichbleibend];
    //echo $val[$i];
    echo "While Nummer 1";

    while($row2 = mysqli_fetch_assoc($result2)) {
      $valName[$a] = $row2[name];
      $validId[$a] = $row2[id];
      $valDif[$a] = $row2[difficulty];
      $valKitch[$a] = $row2[regionalKitchen];
      echo "While Nummer 2";
      $a++;
    }


    echo "Vor der Schleife";
    $row3 = mysqli_fetch_assoc($result3);
    $moM[0] = $row3[montagMittag];
    echo "In der Schleife";
    echo $moM[0];
    echo "While Nummer 3";
    $diM[$b] = $row3[dienstagMittag];
    echo $diM[$b];
    $miM[0] = $row3[mittwochMittag];
    echo $miM[0];
    $doM[$b] = $row3[donnerstagMittag];
    echo $doM[$b];
    $frM[$b] = $row3[freitagMittag];
    echo $frM[$b];
    $saM[$b] = $row3[samstagMittag];
    echo $saM[$b];
    $soM[$b] = $row3[sonntagMittag];
    echo $soM[$b];
    $moA[$b] = $row3[montagAbend];
    echo $moA[$b];
    $diA[$b] = $row3[dienstagAbend];
    echo $diA[$b];
    $miA[$b] = $row3[mittwochAbend];
    echo $miA[$b];
    $doA[$b] = $row3[donnerstagAbend];
    echo $doA[$b];
    $frA[$b] = $row3[freitagAbend];
    echo $frA[$b];
    $saA[$b] = $row3[samstagAbend];
    echo $saA[$b];
    $soA[$b] = $row3[sonntagAbend];
    echo $soA[$b];
    $gb[$b] = $row3[gleichbleibend];
    echo $gb[$b];

    $i = 0;
    if($val1[0] == 0) {
      echo "verschieden";
      echo $val1;
      echo "Bitte warten sie einen kurzen Moment ... ihr Speiseplan wird gerade erstellt ...";
      ?>
      <table border="1">
        <tr>
          <th></th><th>Montag</th><th>Dienstag</th><th>Mittwoch</th><th>Donnerstag</th><th>Freitag</th><th>Samstag</th><th>Sonntag</th>
        </tr>
        <tr>
          <th>Mittags</th>
          <td>
            <?php
              echo createRandomDish($valKitch, $moM[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $diM[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $miM[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $doM[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $frM[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $saM[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $soM[0], $result2, $valName, $valDif);
            ?>
          </td>
        </tr>
        <tr>
          <th>Abends</th>
          <td>
            <?php
              echo createRandomDish($valKitch, $moA[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $diA[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $miA[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $doA[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $frA[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $saA[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $soA[0], $result2, $valName, $valDif);
            ?>
          </td>
        </tr>
      </table>
      <?php
      //echo strval($val[0]);
      // PDF erstellen und Link dazu anzeigen
    } else {
      $i++;
    }
    if($val1[0] > 0) {
      echo "gleichbleibend";
      echo $val1[0];
      ?>
      <table border="1">
        <tr>
          <th></th><th>Montag</th><th>Dienstag</th><th>Mittwoch</th><th>Donnerstag</th><th>Freitag</th><th>Samstag</th><th>Sonntag</th>
        </tr>
        <tr>
          <th>Mittags</th>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
        </tr>
        <tr>
          <th>Abends</th>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
          <td>
            <?php
              echo createRandomDish($valKitch, $val1[0], $result2, $valName, $valDif);
            ?>
          </td>
        </tr>
      </table>
      <?php
      // PDF erstellen und Link dazu anzeigen
    } else {
      $i++;
    }
    if($i == 2) {
      echo "Ein unerwarteter Fehler ist aufgetreten. Bitte wenden sie sich an ihren Systemadministrator.";
    }
    //mysqli_query($db, "DELETE FROM `pufferSpeicher`"); // Löscht am Ende des Programms die Tabelle
  ?>
</body>
</html>
