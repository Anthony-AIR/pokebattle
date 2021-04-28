<?php 

class charmeleon extends pokemon{
    public function __construct(){
        $name = "charmeleon";
        $energyType = "fire";
        $maxHitPoints = 60;
        $hitPoints = 60;
        $attacks = [ "nameAttack1" => "head butt", "attack1" => "10", "nameAttack2" => "flare", "attack2" => "30" ];
        $weakness = [ "weaknessName" => "water", "multiplier" => "2"];
        $resistance = [ "resistanceName" => "lightning", "waarde" => "10"];

        parent::__construct($name, $energyType, $maxHitPoints, $hitPoints, $attacks, $weakness, $resistance);
    }
}
?>