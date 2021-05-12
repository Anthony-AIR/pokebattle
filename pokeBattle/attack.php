<?php

class attack{

    public $name;
    public $damage;
    
    function __construct($name, $damage){
        $this->attackName = $name;
        $this->attackDamage = $damage;
    }

}