<?php 

class squirtle extends pokemon{
    public function __construct(){
        $name = "squirtle";
        $energyType = "water";
        $maxHitPoints = 60;
        $hitPoints = 60;
        $attacks = [ "nameAttack1" => "Aqua Tail", "attack1" => "20", "nameAttack2" => "hydro pump", "attack2" => "40" ];
        $weakness = [ "weaknessName" => "fire", "multiplier" => "1.5"];
        $resistance = [ "resistanceName" => "grass", "waarde" => "30"];

        parent::__construct($name, $energyType, $maxHitPoints, $hitpoints, $attacks, $weakness, $resistance);
    }
}
?>