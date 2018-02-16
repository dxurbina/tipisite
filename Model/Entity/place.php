<?php
    class place{
        private $name, $description, $date, $dir, $tel, $idUser;
        public function __SET($var, $value){ return $this->var=$value;}
        public function __GET($var){ return $this->$var;}
    }
?>