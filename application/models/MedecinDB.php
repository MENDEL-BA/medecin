<?php



class MedecinDB extends CI_Model{


    public  function __construct(){

        parent::__construct();
       //$this->load->model(medecinDB);
        //Medecin/Liste route Medecin
    }


    public function addMedecin($nomM,$prenomM,$specialite){

        $sql ="INSERT INTO medecin  VALUES (null,'$nomM','$prenomM','$specialite')";

        return $this->db->query($sql);

    }


    public function listeMedecin()
    {
        $sql = "SELECT * FROM medecin";
       return  $this->db->query($sql);

    }

    public function deleteMedecin($idM)
    {
        $sql = "DELETE FROM medecin WHERE idM=$idM";
        return  $this->db->query($sql);
    }
    public function getMedecinById($idM)
    {
        $sql = "SELECT * FROM medecin WHERE  idM=$idM";
        return  $this->db->query($sql);

    }

    public function updateMedecin($nomM,$prenomM,$specialite){

        $sql ="UPDATE medecin  SET nomM='$nomM',prenomM='$prenomM',specialite='$specialite' ";

        return $this->db->query($sql);

    }



}
 ?>