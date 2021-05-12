<?php 

class squirtle extends pokemon{
    public function __construct(){
        $name = "squirtle";
        $energyType = "water";
        $maxHitPoints = 60;
        $hitPoints = 60;
        $attacks = [ new attack( "Aqua Tail", 20 ), new attack( "Hydro Pump", 40 ) ];
        $weakness = [ new weakness( "fire", 1.5 ) ];
        $resistance = [ new resistance( "grass", 30 ) ];

        parent::__construct($name, $energyType, $maxHitPoints, $hitpoints, $attacks, $weakness, $resistance);
    }
}
?>