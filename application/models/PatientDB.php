<?php

class PatientDB extends CI_Model{

    public function __construct(){
        parent::__construct();
            //$this->load->model(medecinDB);
            //Medecin/Liste route Medecin

    }



    public function addPatient($nomP,$prenomP,$date_naiss)
    {

        $sql ="INSERT INTO patient  VALUES (null,'$nomP','$prenomP','$date_naiss')";

        return $this->db->query($sql);

    }


    public function listePatient()
    {
        $sql = "SELECT * FROM patient";
        return  $this->db->query($sql);

    }






}
?>