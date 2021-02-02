<?php 
class Programadores extends Model {

    public function getAll($search) {
        $array = array();

        if(!empty($search)) {

            $sql = "SELECT * FROM programadores WHERE  name  LIKE :name OR languages LIKE :languages";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":name", "%".$search."%");
            $sql->bindValue(":languages", "%".$search."%");
            $sql->execute();
        } else {
            $sql = "SELECT * FROM programadores";
            $sql = $this->db->query($sql);

        }

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function updateEmployee($id_prog) {
        $done = 0;
        $sql = "SELECT employee FROM programadores WHERE id = :id_prog";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id_prog", $id_prog);
        $sql->execute();

 
        if($sql->rowCount() > 0) {

            $employee = $sql->fetch();
            $employee = 1 - $employee[employee];

            $sql = "UPDATE programadores SET employee = :employee WHERE id = :id_prog";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":employee", $employee);
            $sql->bindValue(":id_prog", $id_prog);
            $sql->execute();
            
        }

       
    }

    public function insertProg($name, $email, $age, $linkedin, $languages, $employee) {
        $sql = "INSERT INTO programadores SET name = :name, email = :email, age = :age, linkedin = :linkedin, languages = :languages, employee = :employee";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":age", $age);
        $sql->bindValue(":linkedin", $linkedin);
        $sql->bindValue(":languages", $languages);
        $sql->bindValue(":employee", $employee);
        $sql->execute();



    }
}