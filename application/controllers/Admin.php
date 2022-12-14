<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('url', 'cookie', 'script', 'login'));
		$this->load->model(array('admin_model'));
	}
	public function index()
	{
		$this->viewSignIn();
	}

	//관리자 로그인 페이지 진입
	public function viewSignIn(){
		if(is_user_logged_in()){
			$msg = "메인 화면으로 이동합니다.";
			script_alert_go($msg, '/admin/main');
		}
		$this->load->view('admin/sign_in');
	}

	//로그인 실행
	public function doSignIn(){
		$userId = $this->input->post('userId');
		$userPass = $this->input->post('userPass');
		$remember = $this->input->post('remember');
		$remember = empty($remember)?false:true;
		$res = $this->admin_model->do_login($userId, $userPass);

		if($remember){//아이디 저장
			$cookie = array(
				'name'   => 'logged_in',
				'value'  => $userId,
				'expire' => '86500',
				'domain' => '',
				'path'   => '/',
				'prefix' => '_lime_admin',
			);
			set_cookie($cookie);
		}else delete_cookie('logged_in');

		exit (json_encode( $res ));
	}

	//로그인 처리 후 메인페이지 진입
	public function successLogin(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$user_idx = $this->input->post('user_idx');
		$position = $this->input->post('position');
		$mobile = $this->input->post('mobile');

		//계정 정보 세션 적용
		$this->session->set_userdata(array(
				'user'=>$id,
				'name'=>$name,
				'user_idx'=>$user_idx,
				'position'=>$position,
				'mobile'=>$mobile
			)
		);

		//fail_count 0으로 만들기
		$this->admin_model->resetFailCount($user_idx);
		script_go_page('/admin/main');
	}

	//메인 페이지 진입
	public function main(){
		if(!is_user_logged_in()){
			$msg = "로그인이 필요한 페이지입니다.";
			script_alert_go($msg, '/admin');
		}
		$simpleStudents = $this->admin_model->getSimpleStudents();
		$applicantsCnt = $this->admin_model->getSimpleStudents(true);
		$this->load->view('admin/main', array(
			'students'   => $simpleStudents,
			'studentCnt' => $applicantsCnt
		));
	}

	// 로그아웃
	public function signOut(){
		$array_items = array( 'user', 'name', 'user_idx', 'position', 'mobile');
		$this->session->unset_userdata($array_items);
		$msg = '로그아웃 되었습니다.';
		script_alert_go($msg, '/admin');
	}


}
