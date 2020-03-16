<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MobilModel extends CI_Model {

	protected $tabel='mobil';
	protected $primary='id_mobil';

	public function tampil($offset=0,$order_column='',$order_type='asc') {
		if (empty($order_column) || empty($order_type))
			$this->db->order_by($this->primary,'asc');
		else
			$this->db->order_by($order_column,$order_type);

		return $this->db->get($this->tabel,$offset)->result();
	}
	public function jumlah()
	{
		return $this->db->count_all($this->tabel);
	}
	public function autoid()
	{
		$this->db->select('RIGHT(mobil.id_mobil,3) as kode', FALSE );
		$this->db->order_by('id_mobil', 'desc');
		$this->db->limit(1);

		$query=$this->db->get('mobil');
		if ($query->num_rows()<>0) {
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}
		$kodemax=str_pad($kode, 3,"0",STR_PAD_LEFT);
		$kodejadi="MOB-000-".$kodemax;
		return $kodejadi;
	}
	public function cari($berdasarkan,$cari)
	{
		$this->db->from($this->tabel);
		$this->db->select('id_mobil,no_plat,jenis,merk,thn_buat,jumlah,warna,biaya_sewa');

		switch ($berdasarkan) {
			case '':
				$this->db->like('id_mobil',$cari);
				$this->db->or_like('no_plat',$cari);
				$this->db->or_like('jenis',$cari);
				$this->db->or_like('merk',$cari);
				$this->db->or_like('thn_buat',$cari);
				$this->db->or_like('jumlah',$cari);
				$this->db->or_like('warna',$cari);
				$this->db->or_like('biaya_sewa',$cari);
				break;
			default:
				$this->db->like($berdasarkan,$cari);
				break;
		}
		$query=$this->db->get()->result();
		return $query;
	}	

	public function tambahdata($data)
	{
		$this->db->insert($this->tabel, $data);
	}
	public function view($id)
	{
		$this->db->where('id_mobil', $id);
		$query=$this->db->get($this->tabel);
		return $query->row();
	}
	public function update($id,$data)
	{
		$this->db->where('id_mobil', $id);
		$this->db->update($this->tabel, $data);
	}
	public function delete($id)
	{
		$this->db->where('id_mobil', $id);
		$this->db->delete($this->tabel);
	}

}

/* End of file MobilModel.php */
/* Location: ./application/models/MobilModel.php */