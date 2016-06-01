<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {
 
 
 public function index()
 {
	 if($this->session->userdata('Level')){
		 if($_SESSION["Level"] == 3){
		 	$this->load->model('user_model');
	        $user = $this->user_model->loadData();
	        $this->load->vars('u', $user);
  			$this->load->view('Admin/Admin_view');
		 }else{
			 redirect('Home');
		 }
 }else{
	redirect('Home/login'); 
 }
 }
 public function konfirmasi()
 {
	 if($this->session->userdata('Level')){
	$this->load->view('Admin/konfirmasi.php');
	 }
 }
 public function datauser()
 {
	 if($this->session->userdata('Level')){
		$this->load->model('user_model');
        $user = $this->user_model->loadData();
        $this->load->vars('u', $user);
		$this->load->view('Admin/datauser.php');
	 }
 }
 public function tambah_rumah_sakit()
 {
	 if($this->session->userdata('Level')){
	$this->load->view('Admin/tambah_rumah_sakit.php');
	}
 }
public function update_rumah_sakit()
 {
	 if($this->session->userdata('Level')){
	$this->load->view('Admin/update_rumah_sakit.php');
	 }
 }
  public function delete_rumah_sakit()
 {
	 if($this->session->userdata('Level')){
  $this->load->view('Admin/delete_rumah_sakit.php');
	 }
 }
 public function tambah_penyakit()
 {
	 if($this->session->userdata('Level')){
	$this->load->view('Admin/tambah_penyakit.php');
	 }
 }
public function update_penyakit()
 {
	 if($this->session->userdata('Level')){
	$this->load->view('Admin/update_penyakit.php');
	}
 }
  public function delete_penyakit()
 {
	 if($this->session->userdata('Level')){
  $this->load->view('Admin/delete_penyakit.php');
	 }
 }
 public function tambah_obat()
 {
	 if($this->session->userdata('Level')){
	$this->load->view('Admin/tambah_obat.php');
	 }
 }
public function update_obat()
 {
	 if($this->session->userdata('Level')){
	$this->load->view('Admin/update_obat.php');
	 }
 }
  public function delete_obat()
 {
	 if($this->session->userdata('Level')){
  $this->load->view('Admin/delete_obat.php');
	 }
 }

 public function tolak($username){
 $this->load->model('user_model');
 $this->user_model->deleteUser($username);
 redirect("Admin/konfirmasi");
 }

 public function terima($username){
 $this->load->model('user_model');
 $query= $this->user_model->getByUsername($username);
 $data['ffn']    = $query['First_Name'];
	 $data['fln']    = $query['Last_Name'];
	 $data['fAlamat']  = $query['Alamat'];
	 $data['fKota']  = $query['Kota'];
	 $data['fPropinsi']= $query['Propinsi'];
	 $data['fSpesialis']= $query['Spesialis'];
	 $data['fjk']= $query['Jenis_Kelamin'];
	 $data['fUname']= $query['Username'];
	 $data['fpass']= $query['Password'];
	 $data['ftl']= $query['Tanggal_Lahir'];
	 $data['femail']= $query['Email'];
	 $data['flvl']= $query['Level'];
 $this->user_model->addUser($data);
 $this->user_model->deleteUser($username);
 redirect("User/datapendaftardokter");
 }



 public function logout() {
		$this->session->sess_destroy();
		redirect('Home');
	}
}