<?php
    class ViewController{
        public $mc, $url;
        public function index(){
            include('View/head.php');
            include('View/PrincipalView.php');
            include('View/footer.php');
        }

        public function indexTrapiche(){
            include('Controller/MediaController.php');
            $this->mc = new MediaController();
            $this->url= $this->mc->getimg();
            include('View/head.php');
            include('View/TrapicheView.php');
            include('View/footer.php');
            
        }
        public function indexTrapchito(){
            include('View/head.php');
            include('View/TrapichitoView.php');
            include('View/footer.php');
        }
        public function indexTermales(){
            include('View/head.php');
            include('View/TermalesView.php');
            include('View/footer.php');
        }

        public function indexRegistrarse(){
            include('View/head.php');
            include('View/RegistroView.php');
            include('View/footer.php');
        }
    }
?>