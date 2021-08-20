<?php
    
    class HomeController extends Controller
    {
        public function index()
        {
            $this->loadView("HomeView.php");
        }
        public function __Construct()
        {
            $this->authentication();
        }
    }
    
?>