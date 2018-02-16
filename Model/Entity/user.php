<?php
    class user{
       private $name, $lastName, $email, $tel, $nickName, $passWord, $type, $avatar, $state, $code;  
        public function __SET($variable, $valor){ return $this->$variable = $valor;}
        public function __GET($variable){ return $this->$variable; }
        }
?>