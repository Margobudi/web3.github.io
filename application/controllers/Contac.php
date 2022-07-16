<?php
class Contac extends CI_Controller {

	
	public function index()
	{
        $data ['judul'] = 'Halaman Contac';
        $this->load->view('teamplets/header',$data );
		$this->load->view('Contac/index');
        $this->load->view('teamplets/footer');
	}
	
}
