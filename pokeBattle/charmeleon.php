<?php 

class charmeleon extends pokemon{
    public function __construct(){
        $name = "charmeleon";
        $energyType = "fire";
        $maxHitPoints = 60;
        $hitPoints = 60;
        $attacks = [ new attack( "head butt", 10 ), new attack( "flare", 30 ) ];
        $weakness = [ new weakness( "water", 2 ) ];
        $resistance = [ new resistance( "lightning", 10 ) ];

        parent::__construct($name, $energyType, $maxHitPoints, $hitPoints, $attacks, $weakness, $resistance);
    }
}
?>