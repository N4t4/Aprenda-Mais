<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AP_Controller extends CI_Controller {
	
	var $adm_professor;

	private function CheckLoged(){
		$this->load->library('session');

		if(!$this->session->userdata('professor')){
			redirect(site_url()."index.php/page");
		} else {
			$this->adm_professor = $this->session->userdata('professor');
		}
	}

   	public function __construct()
   	{
        parent::__construct();

     	$this->CheckLoged();
   	}

}

