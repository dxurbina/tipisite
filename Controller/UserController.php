<?php
    class UserController{
        public $obj, $model;
    public function __construct(){
        include('Model/DAO/UserDao.php');
        include('Model/Entity/user.php');
        $this->obj = new user();
        $this->model = new UserDAO();
    }

    public function index(){
       include('head.php');
       include('UserView.php');
       include('footer.php');
    }

    public function AddUser(){
        $this->obj->__SET('name', $_REQUEST['name']);
        $this->obj->__SET('lastName', $_REQUEST['lastName']);
        $this->obj->__SET('email', $_REQUEST['email']);
        $this->obj->__SET('tel', $_REQUEST['tel']);
        $this->obj->__SET('nickName', $_REQUEST['nickName']);
        $this->obj->__SET('passWord', $_REQUEST['passWord']);
        $this->obj->__SET('type', '1');
        $this->obj->__SET('avatar', $this->addarchivo());
        $this->model->CreateUser($this->obj);
        header('Location: index.php?c=View');
    }

    public function addarchivo(){
        if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"][0]){
        $i = 0; $count = 0; $length = 0; $flag = false;
        $url = null;
        foreach($_FILES as $ffileinputname => $file){
            for($i = 0; $i < count($file["name"]); $i++) {
                if((($type =  $file['type'][$i])== "image/jpeg") ||( $type == "image/png" )) {
                    $origen = $file['tmp_name'][$i] ;
                    //$extension = end(explode('.', $_FILES["archivo"]["name"])); obtiene solo extencion
                    $NewFileName = $file['name'][$i];
                    $destino = AVATAR_DIR . $NewFileName;
                  //opcion1
                   while(file_exists($destino)){
                       if($flag == true){
                        $NewFileName = substr($NewFileName, count($count));
                       }
                        $NewFileName = $count . $NewFileName;
                        $destino = AVATAR_DIR . $NewFileName;
                        $flag= true;
                        $count ++; 
                   }
                   /* opcion 2
                       if(file_exists($destino)){
                           $add = time();
                           $NewFileName = $add . $NewFileName;
                           $destino = AVATAR_DIR . $NewFileName;
                       }           
                   */

                    if(move_uploaded_file($origen, $destino))
                    {
                        $this->$url = $NewFileName;
                    }else{
                        echo "no se pudo mover";
                    }
                }else{ echo "no es un formato válido"; }
            }
        }
    }else{ echo "no existe archivo";}
    return $this->$url;
}  
}
?>

 
