<?php
namespace MVC_CLINICA\Model\DAO;

    class comentDAO{
        private $db;
        public function __construct(){
            include('Model/Conexion.php');
            include('Model/Entity/coment.php');
            $con = new Conexion();
            $this->db = $con->conex();
        }

        public function list($idMedia){
            $resultSet = array();
            $resultSet = $this->bd->prepare("select * from coment where idMedia= ?");
            $resultSet->execute(array($idMedia));
            while( $row = $resultSet->fetchAll(PDO::FETCH_OBJ)){
                $resultSet[] = $row; 
            }
            return $resultSet;
        }

        public function add(media $data){
            $sql = "insert into media values('?, ?, ?, ?');";
            $this->bd->prepare($sl)->execute(array($data->__GET('detalle'),
            $data->__GET('date'),
            $data->__GET('idUser'),
            $data->__GET('idMedia')));
        }

        public function delete($id){
            $sql = "delete from coment where id = ?";
            $this->db->prepare($sql)->execute(array($id));
        }

        public function update($detalle, $user){
            $sql = "update media set detalle = ? where idUser = ?";
            $val = $this->db->prepare($sql)->execute(array($detalle, $user));
            
        }
    }
?>