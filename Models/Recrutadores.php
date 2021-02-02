<?php 
class Recrutadores extends Model {
    public function validateLogin($email, $password) {
        $array =array();

        
        $sql = "SELECT * FROM recrutadores WHERE email = :email AND password = :password";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", md5($password));
        $sql->execute();


        if($sql->rowCount() > 0) {
            $array = $sql->fetch();

            
            $token = md5(time().rand(0,999).$array['id'].time());

            $sql = "UPDATE  recrutadores SET token = :token WHERE id = :id_user";    
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":token", $token);
            $sql->bindValue(":id_user", $array['id']);
            $sql->execute();

            $array['recrutadores']['password_token'] = $token;
            $_SESSION['token'] = $token;
        }
        return $array;
    }

 
    public function isLogged() {
       
        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];
            $sql = "SELECT id FROM recrutadores WHERE token = :token";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':token', $token);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                
                return true;
            } else {
                return false;
            }
        } 

        return false;
        

    }

    public function getUser() {
        $array = array();

        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];
            $sql = "SELECT * FROM recrutadores WHERE token = :token";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":token", $token);
            $sql->execute();
            
            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
        } 

        return $array;

    }

    public function getId() {
        $id_user = array();

        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];
            $sql = "SELECT id FROM recrutadores WHERE token = :token";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":token", $token);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $id_user = $sql->fetch();
                $id_user = $id_user['id'];
            }
        }

 
        return $id_user;
    }


    public function getEmail($email) {
        $array = array();

        $sql = "SELECT email FROM recrutadores WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }


    public function createForget_password($email) {
        $hash = 0;

        /*Caso o usuário tenha esquecido a senha dele*/
        $sql = "SELECT id FROM recrutadores WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
		$sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
            $id = $array['id'];


            date_default_timezone_set('America/Sao_Paulo');
            $hash = md5(time().round(0,9999).rand(0,9999).rand(0,9999));



            $sql = "INSERT INTO recrutadores_forget (id_user, hash, expired_data) VALUES (:id_user, :hash, :expired_data)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id_user", $id);
            $sql->bindValue(":hash", $hash);
            $sql->bindValue(":expired_data", date('Y-m-d H:i', strtotime('+4 hours')));
            $sql->execute();





        }

        return $hash;
    }


    public function getTokenForgetPassword() {
        $checked = false;
        $sql = "SELECT * FROM recrutadores_forget WHERE hash = :token";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":token", $_SESSION['token']);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $checked = true;
        }   
        return $checked;
    }


}