<?php
    trait UsersModel
    {
        public function modelTotalRecord()
        {
            $conn = Connection::getInstance();
            $query = $conn->query("select * from users");
            return $query->rowCount();
        }
        public function modelRead($recordPerpage)
        {
            $page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
            $from = $page * $recordPerpage;
            $conn = Connection::getInstance();
            $query = $conn->query("select * from users order by id desc limit $from , $recordPerpage");
            return $query->fetchAll();

        }
        public function modelGetRecord()
        {
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            $conn = Connection::getInstance();
            $query = $conn->prepare("select * from users where id=:var_id");
            $query->execute(["var_id"=>$id]);
            return $query->fetch();

        }
        public function modelUpdate()
        {
            $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            $name = $_POST["name"];
            $password = $_POST["password"];
            $conn = Connection::getInstance();

            $query = $conn->prepare("update users set name=:var_name where id=:var_id");
            $query->execute(["var_id"=>$id,"var_name"=>$name]);
            if($password != "")
            {
                $password = md5($password);
                $query = $conn->prepare("update users set password=:var_pass where id=:var_id");
                $query->execute(["var_id"=>$id,"var_pass"=>$password]);
            }
        }
        public function modelDelete()
        {
            $conn = Connection::getInstance();
            $id=isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
            $query = $conn->prepare("delete from users where id=:var_id");
            $query->execute(["var_id"=>$id]);
        }
        public function modelCreate()
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conn = Connection::getInstance();
            $query = $conn->prepare("insert into users set name =:var_name,password=:var_password,email=:var_email");
            $query->execute(["var_name"=>$name, "var_password"=>$password, "var_email"=>$email]);
            
        }
    }
?>