<?php

class Hero extends Character {

    private static $skill = ['Rapid strike',' Magic shield'];

    public function __construct($health, $strength, $defence, $speed, $luck, $skill){
        parent::__construct($health, $strength, $defence, $speed, $luck);
        $this->skill = $skill;
    }

    public function getSkill(){
        return $this->$skill;
    }


}