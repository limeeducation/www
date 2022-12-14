<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_prod_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}
	public function run_query($query){
		return $this->db->query($query)->result();
	}

	public function selectProdList(){
		$q_get_simple_students = "SELECT stu_idx, stu_name, stu_nat, stu_field, start_dt, stu_mobile, cur_area, reg_date
								  FROM apply_students
								  WHERE contact_yn = 'N'
								  ORDER BY reg_date DESC limit 10";

		if($isCnt){
			$q_get_simple_students = "SELECT count(*) as cnt FROM apply_students";
		}
		$result =  $this->db->query($q_get_simple_students)->result();
		return $result;
	}

	public function addBanner($data){
		$tab = $data['banr_tab'];
		$type = $data['banr_type'];
		$seq_max_q = "SELECT MAX(banr_seq) AS seq FROM banner WHERE banr_tab='{$tab}' AND banr_type='{$type}'";
		$res =  $this->db->query($seq_max_q)->result();
		$seq_max = $res[0]->seq;
		$data['banr_seq'] = $seq_max+1;
		$this->db->insert('banner',$data);
        return $this->db->insert_id();
	}

	public function editBanner($data){
		$edit_data = array(
			'banr_tab'		=> $data['banr_tab'],
			'banr_img'		=> $data['banr_img'],
			'banr_link_url'	=> $data['banr_link_url'],
			'banr_use_yn'	=> $data['banr_use_yn'],
			'banr_mod_id'	=> $data['banr_mod_id'],
			'banr_mod_dt'	=> $data['banr_mod_dt']
		);
		$edit_where = array(
			'banr_idx'		=> $data['banr_idx']
		);
		$this->db->update('banner', $edit_data, $edit_where);
		return $this->db->trans_status();
    }

	public function getBanners($type, $tab){
		$this->db->select('banr_idx');
		$this->db->select('banr_seq');
		$this->db->select('banr_img');
		$this->db->select('banr_link_url');
		$this->db->select('banr_use_yn');
		$this->db->select('banr_tab');
		$this->db->from('banner');
		$this->db->where('banr_type', $type);
		$this->db->where('banr_tab', $tab);
		$this->db->order_by('banr_seq', 'ASC');
		return $this->db->get()->result();
	}

	public function getBannerDetail($idx){
		$this->db->select('banr_idx');
		$this->db->select('banr_tab');
		$this->db->select('banr_img');
		$this->db->select('banr_link_url');
		$this->db->select('banr_use_yn');
		$this->db->from('banner');
		$this->db->where('banr_idx', $idx);
		return $this->db->get()->row_array();
	}

	public function deleteBanner($idx){
		$this->db->where('banr_idx', $idx);
		$this->db->delete('banner');
		return $this->db->trans_status();
	}

	public function updateBannerSeq($data){
		$seq_update = array(
			'banr_seq' => $data['banr_seq']
		);
		$seq_where = array(
			'banr_idx'	=>	$data['banr_idx']
		);
		$this->db->update('banner', $seq_update, $seq_where);
        return $this->db->trans_status();
	}

}

?>
