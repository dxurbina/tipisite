<?php
    class mediaDAO{
        private $bd, $media;
        public function __construct(){
            include('Model/Conexion.php');
            include_once('Model/Entity/media.php');
            $con = new Conexion();
            
            $this->bd = $con->conex();
            
        }

        public function list(){
            $resultSet = array();
            $consult = $this->bd->prepare("select * from media");
            $consult->execute();
            while( $row = $consult->fetchAll(PDO::FETCH_OBJ)){
                $resultSet[] = $row; 
            }
            return $resultSet;
        }

        public function addimg(media $data){
            
            $resultSet = $this->bd->prepare("select * from media where id_media= 5");
            $resultSet->execute();
            $row = $resultSet->fetch(PDO::FETCH_OBJ);
           // echo $row;
            $data->__set('url', $row->url);

        }
        public function add(media $data){
            $sql = "insert into media values('?, ?, ?, ?');";
            $this->bd->prepare($sl)->execute(array($data->__GET('name'),
            $data->__GET('date'),
            $data->__GET('description'),
            $data->__GET('idUser')));
        }

        public function delete($id){
            $sql = "delete from media where id = ?";
            $this->db->prepare($sql)->execute(array($id));
        }
    }
?>