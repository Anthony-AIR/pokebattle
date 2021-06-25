<?php
  require "autoloading.php";

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
      print_r( $pikachu->getName() . " vs " . $charmeleon->getName() . "<br><br>");
      print_r( $pikachu->getName() . "'s hp: " . $pikachu->getHitPoints() . "<br>" . $charmeleon->getName() . "'s hp: " . $charmeleon->getHitPoints() . "<br>" );
      //first move
        print_r( $pikachu->getName() . " doet " . $pikachu->getAttackName(0) . " attack <br>" );

      //attack damage berekenen
        $pikachu->calculateDamage(0,$charmeleon);
        print_r( pokemon::$damageStatement );
        print_r( $charmeleon->getName() . "'s hp: " . $charmeleon->getHitPoints() . "<br><br>");

      //next move
        print_r( $charmeleon->getName() . " doet " . $charmeleon->getAttackName(1) . " attack <br>" );

      //attack damage berekenen
        $charmeleon->calculateDamage(1, $pikachu);
        print_r( pokemon::$damageStatement );
        print_r( $pikachu->getName() . "'s hp: " . $pikachu->getHitPoints() . "<br><br>");



    //pikachu extra damage
        $pikachu->setHitPoints( $pikachu->getHitPoints() );

    //population
      print_r( "population is " . pokemon::$getPopulation . "<br>");
      if( $pikachu->getHitPoints() <= 0 ){
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