<?php

    class pokemon{
        public $name;
        public $energyType;
        public $maxHitPoints;
        public $hitPoints;
        public $attacks;
        public $weakness;
        public $resistance;

        public function __construct($name, $energyType, $maxHitPoints, $hitPoints, $attacks, $weakness, $resistance){
            $this->name = $name;
            $this->energyType = $energyType;
            $this->maxHitPoints = $maxHitPoints;
            $this->hitPoints = $hitPoints;
            $this->attacks = $attacks;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
        }

        public function __toString() {
            return json_encode($this);
        }

    }

?>