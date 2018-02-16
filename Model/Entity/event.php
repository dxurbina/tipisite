<?php
    class event{
    private $name, $descripction, $date, $user;
    public function __SET($var, $value){ return $this->var = $value;}
    public function __GET($var){ return $var;}
    }
?>