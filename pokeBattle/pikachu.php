<?php 

class pikachu extends pokemon{
    public function __construct(){
        $name = "pikachu";
        $energyType = "lightning";
        $hitPoints = 60;
        $attacks = [ new attack( "electric ring", 50 ), new attack( "pika punch", 20 ), new attack( "electric tail", 30 ) ];
        $weakness = [ new weakness( "fire", 1.5 ) ];
        $resistance = [ new resistance( "fighting", 20 ) ];

        parent::__construct( $name, $energyType, $maxHitPoints, $hitPoints, $attacks, $weakness, $resistance );
    }
}

// var $pokemon = new pikachu();
// $pokemon->attacks[0]->damage;
?>