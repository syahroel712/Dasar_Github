<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	//private $limit=5;
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('MobilModel');
		$this->load->helper(array('form','url','html','cookie'));
		$this->load->library(array('session','form_validation','pagination'));
		$level=$this->session->userdata('level');
		if (!($level==1 OR $level==2)) {
			show_404();
		}
	}
	public function index($offset=0,$order_column='id_mobil',$order_type='asc')
	{
		if ($this->session->has_userdata('login')==TRUE) {

		if(empty($offset)) $offset=0;
		if(empty($order_column)) $order_column='id_mobil';
		if(empty($order_type)) $order_type='asc';

		$rows=$this->MobilModel->tampil($offset,$order_column,$order_type);
		$title="DATA MOBIL";
		$main_view='Mobil/tabel';
		// /$pagination=$this->_pagination('Mobil/index/');
		$this->load->view('page',compact('main_view','title','rows'));	
		}else{

			$this->session->set_flashdata('pesan', 'Login Dulu');
			redirect('login','refresh');
		}
	}
	public function cari()
	{
		$cariberdasarkan=$this->input->post('select_cari');
		$yangdicari=$this->input->post('tcari');
		
		$rows=$this->MobilModel->cari($cariberdasarkan,$yangdicari);
		$title="DATA MOBIL";
		$main_view='Mobil/tabel';
		$pagination=$this->_pagination('Mobil/index/');
		$this->load->view('page',compact('main_view','title','rows','pagination'));	
	}
	public function add()
	{
		$title="Data Mobil/Create";
		$main_view='Mobil/addForm';
		$id_mobil=$this->MobilModel->autoid();
		$this->_set_rules();

		if ($this->form_validation->run()==TRUE) {
			$data=[
				'id_mobil'=>$this->input->post('tId'),
				'no_plat'=>$this->input->post('tNoplat'),
				'jenis'=>$this->input->post('tJenis'),
				'merk'=>$this->input->post('tMerk'),
				'thn_buat'=>$this->input->post('tTahun'),
				'jumlah'=>$this->input->post('tJumlah'),
				'warna'=>$this->input->post('tWarna'),
				'biaya_sewa'=>$this->input->post('tBiaya'),
				
			];
		$this->MobilModel->tambahdata($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan...');
		redirect('Mobil','refresh');
		}else{
			$this->load->view('page',compact('main_view','title','id_mobil'));
		}

	}
	public function edit($id)
	{
		$id=$this->uri->segment(3);
		$title="Data Mobil/Update/".$id;
		$main_view='Mobil/formEdit';
		$row=$this->MobilModel->view($id);
		//print_r($row);

		$this->_set_rules();
		if ($this->form_validation->run()==TRUE) {
			$data=[
				'id_mobil'=>$this->input->post('tId'),
				'no_plat'=>$this->input->post('tNoplat'),
				'jenis'=>$this->input->post('tJenis'),
				'merk'=>$this->input->post('tMerk'),
				'thn_buat'=>$this->input->post('tTahun'),
				'jumlah'=>$this->input->post('tJumlah'),
				'warna'=>$this->input->post('tWarna'),
				'biaya_sewa'=>$this->input->post('tBiaya'),
				
			];
		$this->MobilModel->update($id,$data);
		$this->session->set_flashdata('pesan','Data '.$id.' Telah Diperbaharui');
		redirect('Mobil','refresh');		
		}else{
			$this->load->view('page',compact('main_view','row','title'));
		}
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		
		$row=$this->MobilModel->delete($id);
		$this->session->set_flashdata('pesan', 'Data '.$id.' Telah Dihapus');
		redirect('Mobil','refresh');

	}












	public function _set_rules()
	{
		$pesan_error=[
			'required'=>'<span style="color:red;">Data Wajib di Isi</span>',
			'numeric'=>'<span style="color:red;">Data Wajib di Isi dengan Angka</span>',
		];
		$this->form_validation->set_rules('tNoplat', 'No Plat', 'required',$pesan_error);
		$this->form_validation->set_rules('tJenis', 'Jenis', 'required',$pesan_error);
		$this->form_validation->set_rules('tMerk', 'Merk', 'required',$pesan_error);
		$this->form_validation->set_rules('tTahun', 'Tahun', 'required',$pesan_error);
		$this->form_validation->set_rules('tJumlah', 'Jumlah', 'required|numeric',$pesan_error);
		$this->form_validation->set_rules('tWarna', 'Warna', 'required',$pesan_error);
		$this->form_validation->set_rules('tBiaya', 'Biaya', 'required|numeric',$pesan_error);

	}
	public function _pagination($uerl)
	{	
		$config['base_url'] =site_url($uerl);
		$config['total_rows'] = $this->MobilModel->jumlah();
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

/* End of file Mobil.php */
/* Location: ./application/controllers/Mobil.php */