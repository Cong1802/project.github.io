<?php
    include "models/UsersModel.php";
    class UsersController extends Controller 
    {
        use UsersModel;
        public function index()
        {
            $recordPerPage = 4;
            $data = $this->modelRead($recordPerPage);
            $numPage = ceil(($this->modelTotalRecord() / $recordPerPage)) ;
            $this->loadView("UsersView.php",["data"=>$data, "numPage"=>$numPage]);         
        }
        public function update()
        {
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            $action = "index.php?controller=users&action=updatePost&id=$id";
            $recordPerPage = 4;
            $record = $this->modelGetRecord();
            $this->loadView("UsersFormView.php",["data"=>$record,"action"=>$action]);
        }
        public function updatePost()
        {
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            $this->modelUpdate();
            header("location:index.php?controller=users");
        }
        public function delete()
        {
            $this->modelDelete();
            header("location:index.php?controller=users");
        }
        public function create()
        {
            $action = "index.php?controller=users&action=createPost";
            $this->loadView("UsersFormView.php",["action"=>$action]);
        }
        public function createPost()
        {
            $this->modelCreate();
            header("location:index.php?controller=users");
        }

        
    }
?>