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

    //attack

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