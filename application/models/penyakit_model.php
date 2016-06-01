<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class penyakit_model extends CI_Model {
	public function __construct() {
        parent::__construct();
		}
	public function create(){
			$data = array('nama'=>$this->input->post('nama'),
						  'obat'=>$this->input->post('obat'),
						  'gejala1'=>$this->input->post('gejala1'),
						  'gejala2'=>$this->input->post('gejala2'),
						  'gejala3'=>$this->input->post('gejala3')
						  );
			$this->db->insert('penyakit',$data);
		}
		
	public function getall() {
       $query = $this->db->get('penyakit');
        return $query->result();
    }
    public function getgejala1() {
       $query = $this->db->get('penyakit');
        return $query->result();
    }

    public function getpenyakit($gejala1, $gejala2, $gejala3){
   	$query= $this->db->get_where('penyakit', array('gejala1' => $gejala1,
    							'gejala2' => $gejala2,
    							'gejala3' => $gejala3
    							));
   	return $query->result();
    }

    function getById($id) {
        return $this->db->get_where('penyakit', array('id_penyakit' => $id_penyakit))->row();
    }

    public function edit($id, $data)
	{
		$this->db->where('id_penyakit', $id_penyakit);
		
		$result = $this->db->update('penyakit', $data); 

		return $result;
	}
	Public function update(){
	$id  = $this->input->post('id_penyakit');
	$nama = $this->input->post('nama');
	$obat = $this->input->post('obat');
	$gejala1=$this->input->post('gejala1');
	$gejala2=$this->input->post('gejala2');
	$gejala3=$this->input->post('gejala3');
	$data = array(
	'nama'=>$nama,
	'obat'=>$obat,
	'gejala1'=>$gejala1,
	'gejala2'=>$gejala2,
	'gejala3'=>$gejala3
	);
	$this->db->where('id_penyakit', $id);
	$this->db->update('penyakit',$data);
	}

	function get($id){
	 $query = $this->db->get_where('penyakit',array('id_penyakit'=>$id));
	 return $query->row_array();
	 }

	function delete($id) {
	$this -> db -> where('id_penyakit',$id);
	return $this -> db -> delete('penyakit');
	}
}