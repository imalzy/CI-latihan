<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_data');
	}

	function tampil_barang(){
		$data= $this->db->get('tb_produk')->result();
		echo json_encode(array('Result' => 'OK', 'Ouput'=> $data));
	}

	public function index()
	{
		$data = $this->db->get('tb_produk')->result();

		echo json_encode(array('Result' => 'OK', 'Ouput'=> $data));

		echo "<br>";
		echo json_encode($data);
	}

	public function index2()
	{
		$data['barang'] = $this->M_data->tampil_barang2();
		$this->load->view('v_data2', $data);

		json_encode(array('Result' => 'OK', 'Ouput'=> $data));

		 "<br>";
		 json_encode($data);
	}
}
