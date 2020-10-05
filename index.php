<?php
// snack 1
// creare un array matches
$matches = [
  // creare più array con proprietà nomi squadre e punteggio
  [
    "home" => "Armani Milano",
    "away" => "DeLonghi Treviso",
    "score_home" => 104,
    "score_away" => 64,
  ],

  [
    "home" => "Vanoli Cremona",
    "away" => "Umana Venezia",
    "score_home" => 66,
    "score_away" => 83,
  ],

  [
    "home" => "Dolomiti Trentino",
    "away" => "reggio Emilia",
    "score_home" => 81,
    "score_away" => 87,
  ],

  [
    "home" => "Fortitudo Bologna",
    "away" => "Varese",
    "score_home" => 83,
    "score_away" => 88,
  ],
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>snacks</title>
    <h2>SNACK 1</h2>
    <h3>Risultati partite di basket</h3>
    <p>
      <?php
      // creare ciclo per stampare tutti risultati
       for ($i = 0; $i<count($matches); $i++){
        echo  $matches[$i]["home"]." - ".$matches[$i]["away"].":"." ".$matches[$i]["score_home"]." - ".$matches[$i]["score_away"]."<br>";
      }
      ?>
    </p>
  </head>
  <body>

  </body>
</html>
