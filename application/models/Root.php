<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Root extends CI_Model 
    {
        public function getObjets()
        {
            $sql = "SELECT * FROM objetprop";
            $query = $this->db->query($sql);
            $result = $query->result_array(); 

            return $result;
        }

        public function getObjetUser($idUser)
        {
            $sql = "SELECT * FROM objetprop WHERE idUser = ?";
            $query = $this->db->query($sql , $idUser);
            $result = $query->result_array(); 

            return $result;
        }

        public function getOtherObjets($idUser)
        {
            $sql = "SELECT * FROM objetprop WHERE idUser != ?";
            $query = $this->db->query($sql , $idUser);
            $result = $query->result_array(); 

            return $result;
        }

        public function suppr($idObj){
            $sql = "DELETE FROM objet WHERE idObjt = ? ";
            $this->db->query($sql, $idObj);
        }

        public function getHistorique(){
            $sql = "SELECT * FROM historiqueTransac";
            $query = $this->db->query($sql);
            $result = $query->result_array(); 

            return $result;
        }

        public function countUser(){
            $sql = "SELECT count(*) as nb FROM users where typeUser=1";
            $query = $this->db->query($sql);
            $row = $query->row_array();

            return intval($row['nb']);
        }
    }
?>