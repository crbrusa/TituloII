<?php
class Main extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');
    }


    public function index()
    {
    	$data['title'] = 'Inicio';

    $data['subtitle1'] = 'Seleccione menu';

    	$this->load->view('templates/header',$data);
    	$this->load->view('templates/menprincli',$data);
    	$this->load->view('registro/menupri',$data);
        $this->load->view('templates/footer');
    }
}