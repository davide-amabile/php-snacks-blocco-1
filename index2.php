
<?php
// creare i get
$_GET["name"];
$_GET["mail"];
$_GET["age"];
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>SNACK 2</h2>
    <p>
     <?php
       // fare i controlli sui GET
       $controll= "";
       if(strlen($_GET["name"]) <= 3 ){
         $control= "Accesso negato";
         echo $control;
       }else{
         $control="Accesso riuscito";
         echo $control;
       }
     ?>
    </p>
  </body>
</html>
