<?php
    class UserDAO{
        public $user, $db, $con;
        public function __construct(){
            include('Model/Conexion.php');
            include_once('Model/Entity/user.php');
            $this->con = new Conexion();
            $this->db = $this->con->conex();
        }

        public function createUser(user $data){
            $sql = "insert into users values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
            $this->db->prepare($sql)->execute(array(null, $data->__GET('name'),
                                             $data->__GET('lastName'), $data->__GET('email'),
                                             $data->__GET('tel'),$data->__GET('nickName'),
                                             $data->__GET('passWord'),
                                             $data->__GET('avatar') , $data->__GET('type'),
                                             $data->__GET('state'), $data->__GET('code')));
        }

        public function activeuser($code){
            $cadena = '';
            $sql = "select code from users where code = ? and state = 0";
            $row = $this->db->prepare($sql)->execute(array($code));
            if($row->rowcount() > 0){
                $sql = "select code from users where code = ? and state 0";
                $row = $this->db->prepare($sql)->execute(array($code));
                if($row->rowcount() == 1){
                $val = $row->fecth(PDO :: FETCH_OBJ);
                $sql = "update users set  state = 1 where code = ?";
                        $cadena = 'La cuenta ah sido activada . . .';
                }else { $cadena = 'Ya as activado el codigo'; }
            }else{
                $cadena = 'El codigo de activación no es el correcto !! :( ';
            }
                return $cadena;
        }
        
    }
?>
58205440

