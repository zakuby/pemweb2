<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class rumah_sakit_model extends CI_Model {
		public function __construct() {
        parent::__construct();
		}
		public function create(){
			$data = array('nama'=>$this->input->post('nama'),
						  'alamat'=>$this->input->post('alamat'),
						  'no_telp'=>$this->input->post('no_telp'),
						  'keterangan'=>$this->input->post('keterangan'),
						  );
			$this->db->insert('rumah_sakit',$data);
		}
		
		public function getall() {
       $query = $this->db->get('rumah_sakit');
		return $query->result();
	}
	
	function delete($id_kategori) {
	$this -> db -> where('id',$id_kategori);
	return $this -> db -> delete('rumah_sakit');
	}
	
	
	function getById($id) {
        return $this->db->get_where('rumah_sakit', array('id' => $id))->row();
    }

    public function edit($id, $data)
	{
		$this->db->where('id', $id);
		
		$result = $this->db->update('rumah_sakit', $data); 

		return $result;
	}

	function get($id){
	 $query = $this->db->get_where('rumah_sakit',array('id'=>$id));
	 return $query->row_array();
	 }

	 function update(){
	$id  = $this->input->post('id');
	$nama = $this->input->post('nama');
	$alamat = $this->input->post('alamat');
	$no_telp=$this->input->post('no_telp');
	$keterangan=$this->input->post('keterangan');
	$data = array(
	'nama'=>$nama,
	'alamat'=>$alamat,
	'no_telp'=>$no_telp,
	'keterangan'=>$keterangan
	);
	$this->db->where('id', $id);
	$this->db->update('rumah_sakit',$data);
	}
	
	}
	