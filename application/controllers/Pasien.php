<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pasien extends CI_Controller {
	public function index()
 {
 	if($this->session->userdata('Level')){
		 if($_SESSION["Level"] == 1){
  $this->load->view('Pasien/Pasien_view');
		 }else{
			 redirect('Home');
		 }
 }else{
	redirect('Home/login'); 
 }
 }
	public function analisis()
 {
	$this->load->view('Pasien/analisis.php');
 }
 public function lihatDaftarDokter()
 {
	 if($this->session->userdata('Level')){
		$this->load->model('user_model');
        $user = $this->user_model->loadDataDokter();
        $this->load->vars('data', $user);
		$this->load->view('Pasien/lihatDaftarDokter.php');
	 }

 }
 
     
     public function lihatDaftarJanji()
 {
 	$this->load->model('janji_model');
    $janji = $this->janji_model->loadjanji($username=$_SESSION['Username']);
    $this->load->vars('u', $janji);
 	$this->load->view('Pasien/lihatDaftarJanji.php');
 }
 

 public function lihatProfil()
 {
	 if($this->session->userdata('Level')){
		$this->load->model('user_model');
        $user = $this->user_model->loadDataProfil($this->session->userdata('Username'));
        $this->load->vars('u', $user);
		$this->load->view('Pasien/lihatProfil.php');
	 }
	}

	public function editProfil()
 {  
  $username = $this->session->userdata('Username');
	    $get = $this->db->get_where('user',array('Username'=>$username))->row_array();
	    if(!$get)
	        show_404();
	        
	    $data = array('Username'=>$username);
	$this->load->view('Pasien/editProfil.php', array_merge($data,$get));	
        
 }
 public function logout() {
		$this->session->sess_destroy();
		redirect('Home');
	}

	public function batalJanji($id_janji){
		$this->load->model('janji_model');
		$this->janji_model->delete($id_janji);
		redirect('Pasien/lihatDaftarJanji','refresh');
	}

}