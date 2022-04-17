<?php


class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Nowplay_model');
    }
	
	public function index()
	{
        $data['judul']="Home";
        $data['nowplay']=$this->Nowplay_model->tampil_data();
        $this->load->view('templates/header', $data);
		$this->load->view('home/index');
        $this->load->view('templates/footer');
	}

}
