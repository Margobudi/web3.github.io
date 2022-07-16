<?php
class About extends CI_Controller {

	
	public function index()
	{
        $data ['judul'] = 'Halaman About';
        $this->load->view('teamplets/header',$data);
		$this->load->view('About/index');
        $this->load->view('teamplets/footer');
	}
	
}
