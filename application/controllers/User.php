<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class User extends CI_Controller {


 public function addData_pasien(){
	 $this->load->database();
	 $this->load->Model('user_model');
	 $this->user_model->create_pasien();
	 redirect('Home/login');
	 
 }
 public function addData_dokter(){
	 $this->load->database();
	 $this->load->Model('user_model');
	 $this->user_model->create_dokter();
	 ?>
				 <script type="text/javascript">
     			alert("Data Akan Di proses dalam 24 jam, Jika data anda valid maka anda bisa menggunakan id anda. Terima Kasih");
     			</script>
			<?php
	 redirect('Home/login');
	 
 }

public function datapendaftardokter() {
	$this->load->model('user_model');
       $user = $this->user_model->getall();
       $this->load->vars('u', $user);
       $this->load->view('Admin/konfirmasi');
}
	
public function hapusUser($username) {
$this->load->model('user_model');
$this->user_model->delete($username);
redirect("Admin/datauser");
}

Public function search(){
	$spesialis = $this->input->get('spesialis');
	$this->load->model('user_model');
	$data=$this->user_model->Search($spesialis);
	$this->load->vars('data', $data);
	$this->load->view('Pasien/lihatDaftarDokter', $data);
}
	Public function search2(){
	$spesialis = $this->input->get('spesialis');
	$this->load->model('user_model');
	$data=$this->user_model->Search($spesialis);
	$this->load->vars('data', $data);
	$this->load->view('Home/lihatDaftarDokter', $data);
}
 }