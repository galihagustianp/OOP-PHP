<?php
include('animal.php');
class Frog extends Animal{
    
    public $jump;
    public function jump($jump="hophop", $legs=4){
        $this->jump=$jump;
        $this->legs=$legs;
        $x = "{$this->name} | {$this->legs} | {$this->cold_blooded} | {$this->jump}";
        return $x;
    }
}




?>