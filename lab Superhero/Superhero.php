<?php
    class Superhero{
        //maak alle publc properties
        public $name;
        public $gender;
        public $team;
        public $oneliner;

        //maakt de Superhero aan met de meegegeven data
        public function __construct($name, $gender, $team, $oneliner){
            $this->name = $name;
            $this->gender = $gender;
            $this->team = $team;
            $this->oneliner = $oneliner;
        }
        
        //convert de data naar een string
        public function __toString() {
            return json_encode($this);
        }

        public function sayOneliner()
        {
            echo '<h2>' . $this->oneliner . '</h2>';
        }
    }
?>

