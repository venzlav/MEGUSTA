<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{	
	}
	
	public function login()
	{
		$theme = "default";
		$this->load->helper('form');
		$path2theme = "themes/$theme/";
		$blocks = array('top_menu', 'login', 'header_only_logo');
		$path2theme = "themes/$theme/";
		foreach ($blocks as $block) {
			$data[$block] = $this->load->view($path2theme."blocks/$block", '', true); //Parametr true powoduje ładowanie widoku do zmiennej typu string
		}
		$this->load->view($path2theme.'pages/login_page', $data);
	}
	
	public function check()
	{
		
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
;