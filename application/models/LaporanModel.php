<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanModel extends CI_Model {

    public function semua($offset=0,$order_column='',$order_type='asc'){

        if(empty($order_column) || empty($order_type))
            $this->db->order_by('id_sewa','asc');
        else
            $this->db->order_by($order_column,$order_type);
     
        return $this->db->get('laporan',$offset)->result();
    }

    public function jumlah(){
        return $this->db->count_all('laporan');
    }

    public function All(){
        return $this->db->get('laporan')->result();
    }

    public function TotalSewa(){
        $this->db->select_sum('total_bayar');
        return  $this->db->get('laporan')->row(); 
    }

    public function sewaRange($tgl_aw,$tgl_ah){
       $this->db->select_sum('total_bayar');
       $this->db->where('tgl_pinjam BETWEEN "'.date('Y-m-d',strtotime($tgl_aw)).'" and "'.date('Y-m-d',strtotime($tgl_ah)).'"');
        return  $this->db->get('laporan')->row(); 
    }

    public function rangetgl($tgl_aw,$tgl_ah){
        $this->db->where('tgl_pinjam BETWEEN "'.date('Y-m-d',strtotime($tgl_aw)).'" and "'.date('Y-m-d',strtotime($tgl_ah)).'"');//belum selesai
        //return $this->db->get_compiled_select('laporan');
        return $this->db->get('laporan')->result();
    }

    public function detailLaporan($id){ //menampilkan riwayat transaksi dari si $id{
        $this->db->where('id_sewa',$id);
        return $this->db->get('laporan')->row();
    }
}

/* End of file LaporanModel.php */
/* Location: ./application/models/LaporanModel.php */