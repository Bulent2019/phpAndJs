<?php
class Baby_Monster {
    // string
    private $name;
    // int
    private  $attack_defence;
    // int
    private  $health;

    public function __construct ($name, $attack_defence, $health) {
        $this->name = $name;
        $this->attack_defence = $attack_defence;
        $this->health = $health;
    }

}