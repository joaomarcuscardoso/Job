<?php
class HomeController extends Controller {
    private $array;
    private $recrutadores;
    public function __construct() {


        $this->recrutadores = new Recrutadores();
        
        if($this->recrutadores->isLogged() == false) {
        
            header("Location: ".BASE_URL."Login/");
            exit;

        }  else {
            
            $this->array["token"] = $_SESSION['token'];
            
        }  


    }

    public function index() {
        $programadores =  new Programadores();
  
        $this->array['programadores'] = $programadores->getAll();

        $this->loadTemplate("home", $this->array);
    }




}


