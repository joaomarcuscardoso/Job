<?php 
class LoginController extends Controller {
    private $recrutadores;
    private $array;
    

    public function __construct() {
        $this->recrutadores = new Recrutadores();
        $this->array = array();

        

    }
    
    public function index() {
       
        $this->loadTemplate("login", $this->array);
    }

    public function profile() {
        // Fazer senha.
        $this->array['user_profile'] = $this->recrutadores->getUser();

        $this->loadTemplate("profile", $this->array);
    }


    public function login_access() {
    
        if(!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);

            
            $this->array['access_user'] = $this->recrutadores->validateLogin($email, $password);

            if(empty($this->array['access_user'])) {
                $this->array['message'] = "Email e/ou senha errado(s), por favor tente novamente.";
                $this->loadTemplate("login", $this->array); 
            } else {
             

                header("Location: ".BASE_URL);
                exit;
            }
        } else {
            $this->array['message'] = "Email e/ou senha errado(s), por favor tente novamente.";
            $this->loadTemplate("login", $this->array); 
        }
    }


   

    public function logout() {

        if(!empty($_SESSION['token'])) {
            $_SESSION['token'] = "";
        } 
     
        header("Location: ".BASE_URL."Login");
        exit;
    }

}