<?php
    require "pokemon.php";
    require "pikachu.php";
    require "charmeleon.php";
    require "squirtle.php";
    require "attack.php";
    require "weakness.php";
    require "resistance.php";
  //pokemon
    //pikachu
      $pikachu =  new pikachu(" ");

    //Charmeleon
      $charmeleon  =  new charmeleon("");

    //squirtle
      $squirtle  =  new squirtle(" ");

    print_r("<br><br><br>");
  //other
    //attack
      print_r( $pikachu->name . " vs " . $charmeleon->name . "<br><br>");
      print_r( $pikachu->name . "'s hp: " . $pikachu->hitPoints . "<br>" . $charmeleon->name . "'s hp: " . $charmeleon->hitPoints . "<br>" );
      //first move
        print_r( $pikachu->name . " doet " . $pikachu->attacks["nameAttack1"] . " attack <br>" );

      //attack damage berekenen
        pokemon::calculateDamage(0,$charmeleon, $pikachu);

      //next move
        print_r( $charmeleon->name . " doet " . $charmeleon->attacks["nameAttack2"] . " attack <br>" );

      //attack damage berekenen
        pokemon::calculateDamage(1, $pikachu,$charmeleon);



    //pikachu extra damage
        $pikachu->hitPoints =- $pikachu->hitpoints;

    //population
      print_r( "population is " . pokemon::$getPopulation . "<br>");
      if( $pikachu->hitPoints <= 0 ){
        unset($pikachu);
        pokemon::$getPopulation--;
      }
      print_r( "population is " . pokemon::$getPopulation );
      print_r("<pre>" . $pikachu . "</pre>");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pokeBattle</title>
</head>
<body>
    
</body>
</html>