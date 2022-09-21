<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ca extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->mng('bc');
	}

	public function mng($page){
		switch ($page){
			case 'bc':
				$this->load->view('old/mng/bc');
				break;
			case 'ab':
				$this->load->view('old/mng/ab');
				break;
		}
	}

	public function intl($page){
		switch ($page){
			case 'bicc':
				$this->load->view('old/intl/bicc');
				break;
			case 'sgb':
				$this->load->view('old/intl/sgb');
				break;
			case 'tale':
				$this->load->view('old/intl/tale');
				break;
			case 'umc':
				$this->load->view('old/intl/umc');
				break;
		}
	}

	public function bod($page){
    		switch ($page){
    			case 'lakefield':
    				$this->load->view('old/bod/lakefield');
    				break;
    			case 'ridely':
    				$this->load->view('old/bod/ridely');
    				break;
    			case 'pickering':
    				$this->load->view('old/bod/pickering');
    				break;
    			case 'bodwell':
    				$this->load->view('old/bod/bodwell');
    				break;
    		}
    	}

}

