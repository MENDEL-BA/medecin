<?php


class Consultation extends  CI_Controller{



    public function add(){
        $this->load->view('consultation/Add');

    }
    public function liste(){
        $this->load->view('consultation/Liste');

    }

    public function edit(){
        $this->load->view('consultation/Edit');

    }
    public function delete(){

    }

    public function update(){

    }
}








?>