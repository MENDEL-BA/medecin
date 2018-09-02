<?php

class Medecin extends  CI_Controller{

    //Recherche Email ET UploadFile
    private $mdb;
    public function __construct(){
        parent::__construct();
        $this->load->model('MedecinDB');

        $this->mdb = new MedecinDB();

    }
    public function add(){
       // $mdb = new MedecinDB();
        if(isset($_POST['valider']))
        {
            extract($_POST);
            $data['ok'] =$this->mdb->addMedecin($nomM,$prenomM,$specialite);

        }
        $data['medecins'] =$this->mdb->listeMedecin();

        // $data['medecins'] =$mdb-
        return $this->load->view('medecin/Add');

    }
    public function liste(){
        $data['medecins'] = $this->mdb->listeMedecin();
        $this->load->view('medecin/Liste',$data);

    }

    public function edit(){
        $data['medecins']= $this->mdb->getMedecinById($_GET['ok']);
    $this->load->view('medecin/Edit',$data);

    }

    public function delete(){
        $idM = $_GET['ok'];
    $this->mdb->deleteMedecin($idM);
        $data['medecins'] = $this->mdb->listeMedecin();

        $this->load->view('medecin/Liste',$data);
    }


    public function update(){
        if(isset($_POST['valider']))
        {
            extract($_POST);
            $data['ok'] =$this->mdb->updateMedecin($nomM,$prenomM,$specialite);
            $data['medecins'] = $this->mdb->listeMedecin();

            $this->load->view('medecin/Liste',$data);
        }
    }
}
?>