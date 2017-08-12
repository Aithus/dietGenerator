<?php
function createRandomDish($valKitch, $anzahlPersonen, $result2, $valName, $valDif) {
  $anzahlResults = intval(mysqli_num_rows($result2));
  $randInt1 = rand(1, $anzahlResults);
  $randInt = $randInt1 -1;
  $dish = "$valKitch[$randInt]<br>$anzahlPersonen x $valName[$randInt]<br>Schwierigkeit: $valDif[$randInt] von 5";
  //echo $dish;
  return $dish;
}
?>
