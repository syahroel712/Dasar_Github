<?php
//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class SewaModel extends CI_Model {

	//protected $tabel2='sewa';
	protected $tabel='mobil';
	protected $primary='id_mobil';


	public function tampil($offset=0,$order_column='',$order_type='asc') {
		
		if (empty($order_column) || empty($order_type))
			$this->db->order_by($this->primary,'asc');
		else
			$this->db->order_by($order_column,$order_type);

		return $this->db->get('customer',$offset)->result();
	}

	public function cari($berdasarkan,$cari)
	{
		$this->db->from('customer');
		$this->db->select('id_customer,nama_customer,alamat,no_telp');

		switch ($berdasarkan) {
			case '':
				$this->db->like('id_customer',$cari);
				$this->db->or_like('nama_customer',$cari);
				$this->db->or_like('alamat',$cari);
				$this->db->or_like('no_telp',$cari);
				break;
			default:
				$this->db->like($berdasarkan,$cari);
				break;
		}
		$query=$this->db->get()->result();
		return $query;
	}	

	public function view($id){
		$this->db->where('id_customer',$id);
		return $this->db->get('customer')->row();
	}
	
	public function viewSewa($id){
		$this->db->where('id_sewa',$id);
		return $this->db->get('sewa')->row();
	}


	public function jumlah(){
		return $this->db->count_all($this->tabel);
		//return $this->db->count_all('sewa');
	}

	public function dataSewa($id){
		$this->db->select('sewa.id_sewa,
			sewa.id_karyawan,
			karyawan.nama_karyawan,
			mobil.merk,
			sewa.tgl_pinjam,
			sewa.tgl_kembali,
			sewa.total_bayar,
			sewa.status');
		$this->db->from('sewa');
		$this->db->where('customer.id_customer',$id);
		$this->db->join('customer','sewa.id_customer = customer.id_customer');
		$this->db->join('mobil','sewa.id_mobil = mobil.id_mobil');
		$this->db->join('karyawan', 'sewa.id_karyawan = karyawan.id_karyawan');

		return $this->db->get();
	}

	public function dataMobil(){
		return $this->db->get('mobil');
	}

	public function detailMobil($id){
		$this->db->where('id_mobil',$id);
		return $this->db->get('mobil');
	}

	public function simpan($data){
		$this->db->insert('sewa',$data);
	}


	public function updatedata($data,$id)
	{
		$this->db->update('sewa', $data,array('id_sewa'=>$id));
	}

	public function updateJumlahMobil($idmobil){
		$row = $this->jumlahmobil($idmobil);
		$data = ['jumlah' => $row->jumlah-1];
		$this->db->where('id_mobil',$idmobil);
		$this->db->update('mobil',$data);
	}

	public function updateJumlahMobil1($idmobil){
		$row = $this->jumlahmobil($idmobil);
		$data = ['jumlah' => $row->jumlah+1];
		$this->db->where('id_mobil',$idmobil);
		$this->db->update('mobil',$data);
	}

	public function jumlahmobil($idmobil){
		$this->db->select('jumlah');
		$this->db->where('id_mobil',$idmobil);
		return $this->db->get('mobil')->row(); 
	}

	public function autoid(){
		$this->db->select('RIGHT(sewa.id_sewa,4) as kode',FALSE);
		$this->db->order_by('id_sewa','DESC');
		$this->db->limit(1);
		$query = $this->db->get('sewa');

		if ($query->num_rows() >= 1) {
			$data=$query->row();
			$kode = intval($data->kode) + 1;
		}else{
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "TR-MBL-".$kodemax;
		return $kodejadi;
	}

	

}

?>