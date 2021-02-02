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

        if(!empty($_GET['search'])) {
            $search = addslashes($_GET['search']);
        } else {
            $search = "";
        }
  
        $this->array['programadores'] = $programadores->getAll($search);

        $this->loadTemplate("home", $this->array);
    }

    public function employee() {
        if(!empty($_GET['i'])) {

            $id_prog = addslashes($_GET['i']);
            $programadores = new Programadores();
            $programadores->updateEmployee($id_prog);
            header("Location: ".BASE_URL);
            exit;
        }
    }


    public function add_prog() {
     
        if(!filter_var($_POST['linkedin'], FILTER_VALIDATE_URL && !empty($_POST['linkedin']))) {
            $this->array['messages'] = "Digite um link valido!";

        } else {

            if(!empty($_POST['email']) && !empty($_POST['name']) && 
                !empty($_POST['age']) && !empty($_POST['linkedin']) && !empty($_POST['languages']) )
            {


                $programadores = new Programadores();

                $name = addslashes($_POST['name']);
                $email = addslashes($_POST['email']);
                $age = addslashes($_POST['age']);

                $languages = addslashes($_POST['languages']);

                if(!empty($_POST['employee'])) {

                    $employee = addslashes($_POST['employee']);
                } else {
                    $employee = 0;
                }

                $programadores->insertProg($name, $email, $age, $linkedin, $languages, $employee);
            
                header("Location: ".BASE_URL);
                exit;
            } else {
                $this->array['messages'] = "Preencha todos os campos";
            }
        }

        $this->loadTemplate("add_prog", $this->array);
    }




}


