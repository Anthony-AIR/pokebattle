<?php

    class pokemon{
        public $name;
        public $energyType;
        public $maxHitPoints;
        public $hitPoints;
        public $attacks;
        public $weakness;
        public $resistance;
        public static $getPopulation = 0;

        public function __construct($name, $energyType, $maxHitPoints, $hitPoints, $attacks, $weakness, $resistance){
            $this->name = $name;
            $this->energyType = $energyType;
            $this->maxHitPoints = $maxHitPoints;
            $this->hitPoints = $hitPoints;
            $this->attacks = $attacks;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
            self::$getPopulation++;
        }

        public function calculateDamage($attack, $target, $attacker){
            
            if( $attacker->energyType == $target->weakness[0]->weaknessName ){
                $theAttack = $attacker->attacks[$attack]->attackDamage * $target->weakness[0]->weaknessMultiplier;
                print_r( "it was very affective <br>" );
            }
            else if( $attacker->energyType == $target->resistance[0]->resistance ){
                $theAttack =  $attacker->attacks[$attack]->attackDamage - $target->resistance[0]->resistanceWaarde;
                print_r( "it was not very affective <br>" );
            }
            else{
                $theAttack = $attacker->attacks[$attack]->attackDamage;
                print_r( "it was affective <br>" );
            }
            $target->hitPoints = $target->hitPoints - $theAttack;
            print_r( $target->name . "'s hp: " . $target->hitPoints . "<br><br>");
        }

        public function __toString() {
            return json_encode($this);
        }

    }

?>