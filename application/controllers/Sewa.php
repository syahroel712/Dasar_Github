<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {
	//private $limit=5;

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('SewaModel');
		$this->load->helper(array('form','url','html','cookie','date'));
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

		$rows=$this->SewaModel->tampil($offset,$order_column,$order_type);
		$title="RENTAL MOBIL";
		$main_view='sewa/tabel';
/*		$pagination=$this->_pagination('sewa/index/');*/
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
		
		$rows=$this->SewaModel->cari($cariberdasarkan,$yangdicari);
		$title="RENTAL MOBIL";
		$main_view='sewa/tabel';
		$pagination=$this->_pagination('Sewa/index/');
		$this->load->view('page',compact('main_view','title','rows','pagination'));	
	}

	
	public function riwayat()
	{
		$id=$this->uri->segment(3);
		$hasil = $this->SewaModel->dataSewa($id)->result();
		$jumlahhasil = $this->SewaModel->dataSewa($id)->num_rows();
		if ($jumlahhasil !== 0) {
			$pesan="Jumlah Riwayat Peminjaman : ".$jumlahhasil;
		}else{
			$pesan="Transaksi Peminjaman <b>Tidak Ada</b>";
		}
		$bio=$this->SewaModel->view($id);
		set_cookie('biodata',$id,30000);
		$title='Riwayat Peminjaman/'.$bio->nama_customer;
		$main_view='Sewa/tabelRiwayat';
		$this->load->view('page',compact('main_view','title','hasil','pesan','bio'));	

	}
	public function pinjam()
	{
		$id=$this->uri->segment(3);
		$bio=$this->SewaModel->view($id);
		$data=$this->SewaModel->dataMobil()->result();
		$title='Data Stok Mobil';
		$main_view='Sewa/tabelmobil';
		$this->load->view('page',compact('main_view','title','data','bio'));
	}


	public function detail(){
		$id = $this->uri->segment(3);
		$id_sewa=$this->SewaModel->autoid();
		$idcustomer = get_cookie('biodata');
		$bio = $this->SewaModel->view($idcustomer);
		$detail = $this->SewaModel->detailMobil($id)->row();
		$title 		= 'Data Sewa / '.$bio->nama_customer.' / Peminjaman';
		$main_view 	= 'sewa/detailPinjam';
		$this->_set_rules();
		if ($this->form_validation->run() == TRUE) {
			$idcustomer = get_cookie('biodata');
			if (isset($idcustomer)) {
				$data = [
					'id_sewa' => $this->input->post('tids'),
					'id_karyawan' => $this->input->post('tidkar'),
					'id_customer' => $idcustomer,
					'id_mobil' => $this->input->post('tidm'),
					'tgl_pinjam' => $this->input->post('tglpi'),
					'tgl_kembali' => 'NULL',
					'total_bayar' => $this->input->post('tsewa'),
					'status' => 'OUT',
				];
				$this->SewaModel->simpan($data);
				$this->SewaModel->updateJumlahMobil($this->input->post('tidm'));
				$this->session->set_flashdata('pesan', 'Transaksi Berhasil...');
				redirect('Sewa','refresh');
			}else{
				$this->session->set_flashdata('pesan', 'Cookie telah Habis...');
				redirect('Sewa','refresh');
			}
		}else{
			$this->load->view('page',compact('main_view','title','detail','bio','id_sewa'));
		}
	}
	public function pulang($id)
	{
		$data=$this->SewaModel->viewSewa($id);
		$mobilid = $this->SewaModel->detailMobil($data->id_mobil)->row();
		$idcustomer=get_cookie('biodata');
		$bio=$this->SewaModel->view($idcustomer);
		$title='Sewa/'.$bio->nama_customer.'/Pemulangan';
		$main_view='Sewa/detailPulang';
		$this->_set_rules_pulang();
		if($this->form_validation->run()==TRUE) {
			$idcustomer=get_cookie('biodata');
			if (isset($idcustomer)) {
				$data=[
					'tgl_kembali'=>$this->input->post('tglpu'),
					'status' => 'IN',
				];
				$this->SewaModel->updatedata($data,$this->input->post('tids'));
				$this->SewaModel->updateJumlahMobil1($this->input->post('tidm'));
				$this->session->set_flashdata('pesan', 'Pemulangan Mobil Berhasil');
				redirect('Sewa','refresh');
			}else{
				$this->session->set_flashdata('pesan','waktu Sewa habis...');
				redirect('Sewa','refresh');		
			}
		}else{
			$this->load->view('page',compact('main_view','title','data','bio','mobilid'));
		}

	}

	public function _set_rules(){
		$pesan_error = [
			'required' => '<span style="color:red;">%s Wajib di isi</span>',
			'numeric' => '<span style="color:red;">%s Wajib dengan angka</span>',
		];
		$this->form_validation->set_rules('tidm','ID Mobil','callback_valid_jumlah_mobil',$pesan_error);
		$this->form_validation->set_rules('tidkar','ID KARYAWAN','required',$pesan_error);
		$this->form_validation->set_rules('tglpi','Tanggal Pinjam','required',$pesan_error);
	}

	public function _set_rules_pulang(){
		$pesan_error = [
			'required' => '<span style="color:red;">%s Wajib di isi</span>',
			'numeric' => '<span style="color:red;">%s Wajib dengan angka</span>',
		];
		$this->form_validation->set_rules('tglpu','Tanggal Kembali','required',$pesan_error);

	}

	public function valid_jumlah_mobil($idmobil){
		$row = $this->SewaModel->jumlahmobil($idmobil);
		$jumlah = $row->jumlah;
		if ($jumlah > 0) {
			return TRUE;
		}else{
			$this->form_validation->set_message('valid_jumlah_mobil', 'Stok Mobil Habis,Cobalah Mobil Lain...');
			return FALSE;
		}
	}
	
	public function _pagination($uerl)
	{	
		$config['base_url'] =site_url($uerl);
		$config['total_rows'] = $this->SewaModel->jumlah();
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