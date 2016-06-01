<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {
 
 public function index()
 {
	 if($this->session->userdata('Level')){
		if($_SESSION["Level"] == 3){
			redirect('Admin');
		}else if($_SESSION["Level"] == 1){
			redirect('Pasien');
		}else if($_SESSION["Level"] == 2){
			redirect('Dokter');
		}
  
	}else{
		$this->load->view('Home/Home_view');
	}
 }
 public function login()
 {
	if($this->session->userdata('Level')){
		if($_SESSION["Level"] == 3){
			redirect('Admin');
		}else if($_SESSION["Level"] == 1){
			redirect('Pasien');
		}else{
			redirect('Dokter');
		}
  
	}else{
		$this->load->view('Home/login');
	}
 }
 public function registrasi_pasien()
 {
  $this->load->view('Home/registrasi_pasien.php');
 }
 public function registrasi_dokter()
 {
  $this->load->view('Home/registrasi_dokter.php');
 }
     public function analisis(){
  $this->load->view('Home/analisis.php');
     }
	 
	 public function login_user(){
	 if(isset($_POST['login'])){
		 $Username = $this->input->post('Username');
		 $Password = $this->input->post('Password');
		 $this->load->model('user_model');
		 $Userid = $this->user_model->login($Username, $Password);
		 $Level = $this->user_model->get_level($Userid);
		 if($Userid){
			 if($Level==3){
				 $data = array(
						'Username' =>$Username,
						'Level' =>$Level
						
				);
			$this->session->set_userdata($data);
			redirect('Admin');
			 }else if($Level==1){
				 $data = array(
						'Username' =>$Username,
						'Level' =>$Level
						
				);
			$this->session->set_userdata($data);
			redirect('Pasien');
			 }else{
				 $data = array(
						'Username' =>$Username,
						'Level' =>$Level
						
				);
			$this->session->set_userdata($data);
			redirect('Dokter');
			 }
			 
		 }else{
			 ?>
				 <script type="text/javascript">
     			alert("Username dan Password tidak terdaftar!");
     			</script>
		<?php
			 redirect(base_url('Home/login'),'refresh');
		 }
	 }
		
	}

	public function dokter()
 {
 		$this->load->model('user_model');
        $user = $this->user_model->loadDataDokter();
        $this->load->vars('data', $user);
 		$this->load->view('Home/lihatdaftarDokter');
 }
 public function rumahsakit()
 {
 		$this->load->model('rumah_sakit_model');
        $rs = $this->rumah_sakit_model->getall();
        $this->load->vars('data', $rs);
 		$this->load->view('Home/lihatdaftarRumahSakit');
 }
	 

	
}