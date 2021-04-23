<?php 

class pikachu extends pokemon{
    public function __construct(){
        $name = "pikachu";
        $energyType = "lightning";
        $maxHitPoints = 60;
        $hitPoints = 60;
        $attacks = [ "nameAttack1" => "electric Ring", "attack1" => "50", "nameAttack2" => "pika punch", "attack2" => "20" ];
        $weakness = [ "weaknessName" => "fire", "multiplier" => "1.5"];
        $resistance = [ "resistanceName" => "fighting", "waarde" => "20"];

        parent::__construct($name, $energyType, $MaxHitPoints, $Hitpoints, $attacks, $weakness, $resistance);
    }
}
?>