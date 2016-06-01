<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class janji_model extends CI_Model {

		public function __construct() {
        parent::__construct();
		
		}

		public function getallDK() {
       $query = $this->db->get('user');
        return $query->result();
    }
    
    public function loadDataJanji($username) {	
				$this->db->where('dokter', $username);			
			   $query = $this->db->get('janji');
				return $query->result();
			}	
            
  	public function loadJanji($username) {	
				$this->db->where('pasien', $username);			
			   $query = $this->db->get('buat_janji');
				return $query->result();
			}
	public function loadpermintaanjanji($username) {	
				$this->db->where('dokter', $username);			
			   $query = $this->db->get('buat_janji');
				return $query->result();
			}
	public function konfirmasi($datas){
	$data = array(
	'id_janji'=>$datas['fid'],
	'pasien'=>$datas['fpasien'],
	'jam'=>$datas['fjam'],
	'tanggal'=>$datas['ftanggal'],
	'keluhan'=>$datas['fkeluhan'],
	'keterangan'=>"Telah Dikonfirmasi"
	);
	$this->db->where('id_janji', $datas['fid']);
	$this->db->update('buat_janji',$data);
	}

	function get($id){
	 $query = $this->db->get_where('buat_janji',array('id_janji'=>$id));
	 return $query->row_array();
	 }

		function getUsername($id){
	 $query = $this->db->get_where('user',array('Username'=>$id));
	 return $query->row_array();
	 }
	
	function getUsername2($dokter){
			$data= $this->db->get_where('user',array('Username'=>$dokter))->row();	 
			return $data;
		}

	public function create_janji($dokter){
		$pasien=$_SESSION['Username'];
		$data = array('jam'=>$this->input->post('jam'),
						'pasien'=>$pasien,
						  'tanggal'=>$this->input->post('hari')." ".$this->input->post('bulan'),
						  'keluhan'=>$this->input->post('keluhan'),
						  'dokter'=>$dokter,
						  'keterangan'=>"Belum Dikonfirmasi"
						  );
		$this->db->insert('buat_janji',$data);
	}

	public function delete($id_janji) {
	$this -> db -> where('id_janji',$id_janji);
	return $this -> db -> delete('buat_janji');
	}
}