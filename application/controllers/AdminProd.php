<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProd extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('url', 'cookie', 'script', 'login'));
		$this->load->model(array('admin_model', 'admin_prod_model'));
	}
	public function index()
	{
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}
	}

	//상품 배너 리스트
	public function bannerList(){
		$type = empty($this->input->get('type')) ? 'noraml' : $this->input->get('type');
		$this->load->view('admin/bannerList', array(
			'type'   => $type
		));
	}

	//상품 배너 등록 페이지
	public function bannerAdd(){
		$type = $this->input->get('type');
		$this->load->view('admin/bannerAdd', array(
			'type'   => $type
		));
	}

	//상품 배너 저장
	public function bannerSave(){
		$data['banr_type'] = $this->input->post('banr_type');
		$data['banr_tab'] = $this->input->post('banr_tab');
		$data['banr_img'] = $this->input->post('banr_img');
		$data['banr_link_url'] = $this->input->post('banr_link_url');
		$data['banr_use_yn'] = $this->input->post('banr_use_yn') == 'on' ? 'Y' : 'N';
		$data['banr_reg_id'] = $this->session->userdata('user_idx');
		$res = $this->admin_prod_model->addBanner($data);
		if($res){
			script_alert_go('배너가 등록되었습니다.',base_url('/AdminProd/bannerList'));
		}else{
			script_alert_back('저장중 장애가 발생했습니다.');
		}
	}

	//탭별 리스트 호출
	public function getTabListAjax(){
		$type = $this->input->post('type');
		$tab = $this->input->post('tab');
		return $this->admin_prod_model->getBanners($type, $tab);
	}
}
