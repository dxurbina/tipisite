<?php
    class reservation{
    private $name, $date, $idUser, $price, $estado;
    public function __SET($var, $value){ return $this->val = $value;}
    public function __GET($var){ return $this->var;}
    }
?>