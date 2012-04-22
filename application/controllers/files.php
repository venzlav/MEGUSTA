<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Files extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');
		//$list = $this->scan_ftp();
		$theme = "default";
		$data['title'] = "Nazwa strony";
		
		//Tu definiujemy nazwy bloków, jakie dostępne są w danym widoku strony. Nazwy ich odpowiadają nazwą bloków z katalogu blocks bez rozszerzenia php 
		$blocks = array('search', 'top_menu', 'results', 'header', 'left_menu', 'user_info');
		$path2theme = "themes/$theme/";
		foreach ($blocks as $block) {
			$data[$block] = $this->load->view($path2theme."blocks/$block", '', true); //Parametr true powoduje ładowanie widoku do zmiennej typu string
		}
		
		$this->load->view($path2theme.'pages/main_page', $data);		
	}
	
	public function search()
	{
		$this->load->helper('form');
		$this->load->view('search');
	}
	
	public function scan_ftp()
	{
		$this->load->library('ftp');
		$config = array();
		//$config['hostname'] = '192.168.1.103';
		//$config['port']     = 2121;
		$config['hostname'] = 'localhost';
		$config['username'] = 'anonymous';
		//$config['debug']	= TRUE;
		if ($this->ftp->connect($config)==TRUE){
			$list = $this->ftp->list_files();
			$numer = 0;
			foreach ($list as $li)
			{
				$this->read_dir($li, $numer++);
			}
			echo "<pre>";
			print_r($list);
			echo "</pre>";			
		}
		
		//$list->ftp->

		$this->ftp->close();
	}
	
	public function read_dir($directory = "", $numer)
	{
		$list = $this->ftp->list_files($directory);
		if (sizeof($list)==1 and $list[0]==$directory)
		{
			//echo ".:: Plik $numer\n";
		} else {
			echo ".:: Folder $numer\n";
			$list = $this->ftp->list_files($directory);
			$numer = 0;
			foreach ($list as $li)
			{
				$this->read_dir($li, $numer++);
			}
						echo "<pre>";
			print_r($list);
			echo "</pre>";	
		}
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
;