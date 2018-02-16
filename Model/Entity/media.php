<?php
        class media{
       private $name, $date, $description, $url, $idUser;  
        public function __SET($variable, $valor){ return $this->$variable = $valor;}
        public function __GET($variable){ return $this->$variable; }
        }
?>