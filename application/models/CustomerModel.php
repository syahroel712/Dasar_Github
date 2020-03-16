<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model {

	protected $tabel='customer';
	protected $primary='id_customer';

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
		$this->db->select('RIGHT(customer.id_customer,4) as kode', FALSE );
		$this->db->order_by('id_customer', 'desc');
		$this->db->limit(1);

		$query=$this->db->get('customer');
		if ($query->num_rows()<>0) {
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}
		$kodemax=str_pad($kode, 4,"0",STR_PAD_LEFT);
		$kodejadi="CUS-000-".$kodemax;
		return $kodejadi;
	}
	public function cari($berdasarkan,$cari)
	{
		$this->db->from($this->tabel);
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

	public function tambahdata($data)
	{
		$this->db->insert($this->tabel, $data);
	}
	public function view($id)
	{
		$this->db->where('id_customer', $id);
		$query=$this->db->get($this->tabel);
		return $query->row();
	}
	public function update($id,$data)
	{
		$this->db->where('id_customer', $id);
		$this->db->update($this->tabel, $data);
	}
	public function delete($id)
	{
		$this->db->where('id_customer', $id);
		$this->db->delete($this->tabel);
	}

	
}