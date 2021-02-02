<?php 
class Programadores extends Model {

    public function getAll() {
        $array = array();

        $sql = "SELECT * FROM programadores";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}