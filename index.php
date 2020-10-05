<?php
// creare un array matches
$matches[
  // creare più array con proprietà nomi squadre e punteggio
  "first_match" =>[
    "home" => "Armani Milano",
    "away" => "Alma Trieste",
    "score_home" => 93,
    "score_away" => 88,
  ],
];




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>snacks</title>
    <h1>SNACK 1</h1>
    <span><?php echo $matches[0]["home"]; ?></span>
  </head>
  <body>

  </body>
</html>
