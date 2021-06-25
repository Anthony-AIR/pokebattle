<?php

    class pokemon{
        private $name;
        private $energyType;
        private $maxHitPoints;
        protected $hitPoints;
        protected $attacks;
        protected $weakness;
        protected $resistance;
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

        public function calculateDamage($attack, $target){
            
            if( $this->energyType == $target->weakness[0]->weaknessName ){
                $theAttack = $this->attacks[$attack]->attackDamage * $target->weakness[0]->weaknessMultiplier;
                self::$damageStatement = "it was very effective <br>";
            }
            else if( $this->energyType == $target->resistance[0]->resistance ){
                $theAttack =  $this->attacks[$attack]->attackDamage - $target->resistance[0]->resistanceWaarde;
                self::$damageStatement = "it was not very affective <br>";
            }
            else{
                $theAttack = $this->attacks[$attack]->attackDamage;
                self::$damageStatement = "it was affective <br>";
            }
            $target->hitPoints = $target->hitPoints - $theAttack;
        }

        public function getHitPoints(){
            return $this->hitPoints;
        }

        public function setHitPoints($x){
            $this->hitPoints =- $x;
        }

        public function getName(){
            return $this->name;
        }

    	public function getAttackName($x){
            return $this->attacks[$x]->attackName;
        }

        public function __toString() {
            return json_encode($this);
        }

    }

?>