<?php 
class M_data extends CI_Model{

	public function tampil_barang(){
		return $this->db->get('tb_produk');
	}

	public function tampil_barang2()
	{
		return $this->db->get('tb_produk')->result_array();
	}
}