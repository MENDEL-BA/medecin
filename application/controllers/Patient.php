<?php


class Patient extends  CI_Controller
{
    private $pdb;

    public function __construct(){

        parent::__construct();
        $this->load->model('PatientDB');
        $this->pdb = new PatientDB();
    }

    public function add()
    {
        if(isset($_POST['valider'])){
            extract($_POST);
            $this->pdb->addPatient('$nomP','$prenomP','$date_naiss');
        }
        $this->load->view('patient/Add');

    }

    public function liste()
    {
        $this->load->view('patient/Liste');

    }

    public function edit()
    {
        $this->load->view('patient/');

    }

    public function delete()
    {
        $this->load->view('patient/');

    }

    public function update()
    {
        $this->load->view('patient/');

    }
}
?>