<?php
    require "pokemon.php";

    //pikachu
    $attacks = [ "nameAttack1" => "electric Ring", "attack1" => "50", "nameAttack2" => "pika punch", "attack2" => "20" ];
    $weakness = [ "weaknessName" => "fire", "multiplier" => "1.5"];
    $resistance = [ "resistanceName" => "fighting", "waarde" => "20"];
    $pikachu =  new pokemon( "Pickachu", "lightning", "60", "60", $attacks, $weakness, $resistance );
    print_r("<pre>" . $pikachu . "</pre>");
    print_r($pikachu->attacks["nameAttack1"]);
    print_r("<br>" . $pikachu->attacks["attack1"]);
    print_r("<br>" . $pikachu->name);

    //Charmeleon
    $attacks = [ "nameAttack1" => "head butt", "attack1" => "10", "nameAttack2" => "flare", "attack2" => "30" ];
    $weakness = [ "weaknessName" => "water", "multiplier" => "2"];
    $resistance = [ "resistanceName" => "lightning", "waarde" => "10"];
    $charmeleon  =  new pokemon( "charmeleon", "fire", "60", "60", $attacks, $weakness, $resistance );
    print_r("<pre>" . $charmeleon  . "</pre>");
    print_r($charmeleon->attacks["nameAttack1"]);
    print_r("<br>" . $charmeleon->attacks["attack1"]);
    print_r("<br>" . $charmeleon->name);

    //squirtle
    $attacks = [ "nameAttack1" => "Aqua Tail", "attack1" => "20", "nameAttack2" => "hydro pump", "attack2" => "40" ];
    $weakness = [ "weaknessName" => "fire", "multiplier" => "1.5"];
    $resistance = [ "resistanceName" => "grass", "waarde" => "30"];
    $squirtle  =  new pokemon( "squirtle", "water", "60", "60", $attacks, $weakness, $resistance );
    print_r("<pre>" . $squirtle  . "</pre>");
    print_r($squirtle->attacks["nameAttack1"]);
    print_r("<br>" . $squirtle->attacks["attack1"]);
    print_r("<br>" . $squirtle->name);

    print_r("<br><br><br>");
    //attack
    print_r( $pikachu->name . " vs " . $charmeleon->name . "<br><br>");
    print_r( $pikachu->name . "'s hp: " . $pikachu->hitPoints . "<br>" . $charmeleon->name . "'s hp: " . $charmeleon->hitPoints . "<br>" );
    //first move
    print_r( $pikachu->name . " doet " . $pikachu->attacks["nameAttack1"] . " attack <br>" );

    //attack damage berekenen
    $pikachuAttack = $pikachu->attacks["attack1"];
    if( $pikachu->energyType == $charmeleon->weakness["weaknessName"] ){
      $pikachuAttack =  $pikachu->attacks["attack1"] * $charmeleon->weakness["multiplier"];
      print_r( "it was not very affective <br>" );
    }
    if( $pikachu->energyType == $charmeleon->resistance["resistanceName"] ){
      $pikachuAttack =  $pikachu->attacks["attack1"] - $charmeleon->resistance["waarde"];
      print_r( "it was not very affective <br>" );
    }
    else{
        print_r( "it was affective <br>" );
    }
    $charmeleon->hitPoints = $charmeleon->hitPoints - $pikachuAttack;
    print_r( $charmeleon->name . "'s hp: " . $charmeleon->hitPoints . "<br>" );

    //next move
    print_r( $charmeleon->name . " doet " . $charmeleon->attacks["nameAttack2"] . " attack <br>" );

    //attack damage berekenen
    $charmeleonAttack = $charmeleon->attacks["attack2"];
    if( $charmeleon->energyType == $pikachu->weakness["weaknessName"] ){
      $charmeleonAttack =  $charmeleon->attacks["attack2"] * $pikachu->weakness["multiplier"];
      print_r( "it was very affective <br>" );
    }
    if( $charmeleon->energyType == $charmeleon->resistance["resistanceName"] ){
      $charmeleonAttack =  $charmeleon->attacks["attack2"] - $pikachu->resistance["waarde"];
      print_r( "it was not very affective <br>" );
    }
    else{
        print_r( "it was affective <br>" );
    }
    $pikachu->hitPoints = $pikachu->hitPoints - $charmeleonAttack;
    print_r( $pikachu->name . "'s hp: " . $pikachu->hitPoints . "<br><br>");

    //population
    print_r( "population is " . pokemon::$getPopulation . "<br>");
    if( $pikachu->hitPoints <= 15 ){
      pokemon::destroy($pikachu);
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