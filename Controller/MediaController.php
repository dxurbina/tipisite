<?php
class MediaController{
    private $obj, $model, $url;
    public function __construct(){
        include('Model/Entity/media.php');
        include('Model/DAO/mediaDAO.php');
        $this->model = new mediaDAO();
        $this->obj = new media();
        
    }
    public function getimg(){
        
        $this->model->addimg($this->obj);
        $this->url= $this->obj->__GET('url');
        return $this->url;
    }

    function index(){
        include('head.php');
        include('mediaView.php');
        include('footer.php');
    }

}
?>