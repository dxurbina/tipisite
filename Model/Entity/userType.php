<?php
    class userType{
        private $type, $description;
        public function __SET($var, $value){ return $this->var = $value;}
        public function __GET($var){ return $this->var;}
    }
?>