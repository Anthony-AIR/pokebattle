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
        public static $damageStatement;

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

        public static function calculateDamage($attack, $target, $attacker){
            
            if( $attacker->energyType == $target->weakness[0]->weaknessName ){
                $theAttack = $attacker->attacks[$attack]->attackDamage * $target->weakness[0]->weaknessMultiplier;
                self::$damageStatement = "it was very effective <br>";
            }
            else if( $attacker->energyType == $target->resistance[0]->resistance ){
                $theAttack =  $attacker->attacks[$attack]->attackDamage - $target->resistance[0]->resistanceWaarde;
                self::$damageStatement = "it was not very affective <br>";
            }
            else{
                $theAttack = $attacker->attacks[$attack]->attackDamage;
                self::$damageStatement = "it was affective <br>";
            }
            $target->hitPoints = $target->hitPoints - $theAttack;
        }

        public function __toString() {
            return json_encode($this);
        }

    }

?>