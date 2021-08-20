<?php
    class Controller
    {
        public $fileName = null;
        public $fileLayout = NULL;
        public $view = null;
        public function loadView($fileName,$data=null)
        {
            
            if($data != null)
            {
                extract($data);
               
            }
            if(file_exists("views/$fileName"))
            {
                $this->fileName=$fileName;
                ob_start();
                include "views/$fileName" ;
                    $this->view = ob_get_contents();
                ob_get_clean();
                if($this->fileLayout != null)
                {
                    include "views/$this->fileLayout" ;
                   
                }
                else
                {
                   
                   echo $this->view;
                }
            }    
        }
        public function authentication()
        {
           
            if(isset($_SESSION["email"]) == false)
            {
                header("location:index.php?controller=login");
            }
        }
    }
?>