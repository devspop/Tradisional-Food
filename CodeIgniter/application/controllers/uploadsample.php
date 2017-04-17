<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	class Uploadsample extends CI_Controller {
		public function construct()
		{
			parent:: construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('input');
		}
		public function index()
		{
			$this->load->view('uploadsample/form_upload', array('error'=>''));
		}
		public function proses_upload(){
		$judul = $this->input->post('judul');
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$this->load->library('upload', $config); 
		if (!$this->upload->do_upload()){
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('uploadsample/form_upload', $error);
		}
		else {
			$upload_data = $this->upload->data();
			$upload_data['judul'] = $judul;
			$data = array('upload_data' => $upload_data);
			$this->load->view('uploadsample/view_upload_success', $data);
		}
	}
}
?>