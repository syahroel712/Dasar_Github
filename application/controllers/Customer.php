<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	//private $limit=5;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('CustomerModel');
		$this->load->helper(array('form','url','html','cookie'));
		$this->load->library(array('session','form_validation','pagination'));
		$level=$this->session->userdata('level');
		if (!($level==1 OR $level==2)) {
			show_404();
		}
	}

	public function index($offset=0,$order_column='id_customer',$order_type='asc')
	{
		if ($this->session->has_userdata('login')==TRUE) {

		if(empty($offset)) $offset=0;
		if(empty($order_column)) $order_column='id_customer';
		if(empty($order_type)) $order_type='asc';

		$rows=$this->CustomerModel->tampil($offset,$order_column,$order_type);
		$title="DATA CUSTOMER";
		$main_view='Customer/tabel';
		//$pagination=$this->_pagination('Customer/index/');
		$this->load->view('page',compact('main_view','title','rows'));	
		//$this->load->view('page',compact('main_view','rows'));	
		}else{

			$this->session->set_flashdata('pesan', 'Login Dulu');
			redirect('login','refresh');
		}
	}

	/*public function cari()
	{
		$cariberdasarkan=$this->input->post('select_cari');
		$yangdicari=$this->input->post('tcari');
		
		$rows=$this->CustomerModel->cari($cariberdasarkan,$yangdicari);
		$title="DATA CUSTOMER";
		$main_view='Customer/tabel';
		$pagination=$this->_pagination('Customer/index/');
		$this->load->view('page',compact('main_view','title','rows','pagination'));	
	}*/
	public function add()
	{
		$title="Data Customer/Create";
		$main_view='Customer/addForm';
		$id_customer=$this->CustomerModel->autoid();
		$this->_set_rules();

		if ($this->form_validation->run()==TRUE) {
			$data=[
				'id_customer'=>$this->input->post('tId'),
				'nama_customer'=>$this->input->post('tNama'),
				'alamat'=>$this->input->post('tAlamat'),
				'no_telp'=>$this->input->post('tNo'),
				
			];
		$this->CustomerModel->tambahdata($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan...');
		redirect('Customer','refresh');
		}else{
			$this->load->view('page',compact('main_view','title','id_customer'));
		}

	}
	public function edit($id)
	{
		$id=$this->uri->segment(3);
		$title="Data Customer/Update/".$id;
		$main_view='Customer/formEdit';
		$row=$this->CustomerModel->view($id);
		//print_r($row);

		$this->_set_rules();
		if ($this->form_validation->run()==TRUE) {
			$data=[
				'id_customer'=>$this->input->post('tId'),
				'nama_customer'=>$this->input->post('tNama'),
				'alamat'=>$this->input->post('tAlamat'),
				'no_telp'=>$this->input->post('tNo'),
				
			];
		$this->CustomerModel->update($id,$data);
		$this->session->set_flashdata('pesan','Data '.$id.' Telah Diperbaharui');
		redirect('Customer','refresh');		
		}else{
			$this->load->view('page',compact('main_view','row','title'));
		}
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		
		$row=$this->CustomerModel->delete($id);
		$this->session->set_flashdata('pesan', 'Data '.$id.' Telah Dihapus');
		redirect('Customer','refresh');

	}












	public function _set_rules()
	{
		$pesan_error=[
			'required'=>'<span style="color:red;">Data Wajib di Isi</span>',
			'numeric'=>'<span style="color:red;">Data Wajib di Isi dengan Angka</span>',
		];
		$this->form_validation->set_rules('tNama', 'Nama', 'required',$pesan_error);
		$this->form_validation->set_rules('tAlamat', 'Alamat', 'required',$pesan_error);
		$this->form_validation->set_rules('tNo', 'tNo', 'required|numeric',$pesan_error);

	}

	public function _pagination($uerl)
	{	
		$config['base_url'] =site_url($uerl);
		$config['total_rows'] = $this->CustomerModel->jumlah();
		$config['per_page'] = $this->limit;
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '<p class="pagination">';
		$config['full_tag_close'] = '</p>';
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['next_link'] = '&gt;';
		$config['prev_link'] = '&lt;';
		$config['num_tag_open'] = '&nbsp;';
		$config['num_tag_close'] = '&nbsp;';
		
		$this->pagination->initialize($config);
		
		return $this->pagination->create_links();
	}
}
?>