<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Dokter extends CI_Controller {

 public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');		
	}
 
 
 public function index()
 {
 if($this->session->userdata('Level')){
		 if($_SESSION["Level"] == 2){
		$this->load->model('rumah_sakit_model');
        $data = $this->rumah_sakit_model->getall();
        $this->load->vars('data', $data);
		$this->load->view('Dokter/lihatDaftarRumahSakit.php');
		 }
 }else{
	redirect('Home/login'); 
 }
 }
 public function analisis()
 {
	$this->load->view('Dokter/analisis.php');
 }
public function lihatDaftarDokter()
 {
	 if($this->session->userdata('Level')){
		$this->load->model('user_model');
        $user = $this->user_model->loadDataDokter();
        $this->load->vars('data', $user);
		$this->load->view('Dokter/lihatDaftarDokter.php');
	 }

 }
 public function lihatDaftarRumahSakit()
 {
		$this->load->model('rumah_sakit_model');
        $user = $this->rumah_sakit_model->getall();
        $this->load->vars('data', $user);
		$this->load->view('Dokter/lihatDaftarRumahSakit.php');
 }
 
		public function lihatDaftarJanji()
 {
 	$this->load->model('janji_model');
    $janji = $this->janji_model->loadpermintaanjanji($username=$_SESSION['Username']);
    $this->load->vars('u', $janji);
 	$this->load->view('Dokter/lihatDaftarJanji.php');
 }
 
  public function uploadGambar()
 {
  $this->load->view('Dokter/gambar_saya.php');
 }
 		
 	public function konfirmasijanji($id_janji){
 	$this->load->model('janji_model');
	$query   = $this->janji_model->get($id_janji);
	$datas['fid']    = $query['id_janji'];
	 $datas['fpasien']    = $query['pasien'];
	 $datas['fjam']  = $query['jam'];
	 $datas['ftanggal']  = $query['tanggal'];
	 $datas['fkeluhan']= $query['keluhan'];
 	$this->load->model('janji_model');
	$this->janji_model->konfirmasi($datas);
	redirect('Dokter/lihatDaftarJanji');

 		}
 
	
	
	public function lihatProfil()
 {
	 if($this->session->userdata('Level')){
		$this->load->model('user_model');
        $user = $this->user_model->loadDataProfil($this->session->userdata('Username'));
        $this->load->vars('u', $user);
		$this->load->view('Dokter/lihatProfil.php');
	 }}
	
	public function editProfil()
 {  
  $username = $this->session->userdata('Username');
	    $get = $this->db->get_where('user',array('Username'=>$username))->row_array();
	    if(!$get)
	        show_404();
	        
	    $data = array('Username'=>$username);
	$this->load->view('Dokter/editProfil.php', array_merge($data,$get));	
        
 }
 
 public function update(){
	    
	    $data = $this->input->post(null,true);
	     $send = $this->user_model->update($data);
	     if(!$send) {		 	
			 	?>
					 <script language="JavaScript">
					alert('Data gagal diupdate');
					</script>
				<?php
				redirect('Dokter/lihatProfil');
				} else if($send) {
					?>
					<script language="JavaScript">
						alert('Data berhasil diupdate');
						</script>
					<?php
					redirect('Dokter/lihatProfil');
				}
	}
		
	public function hapusJanji(){
			
			if($this->session->userdata('Level')){			
				 $data = $this->input->post(null,true);
				 $send = $this->user_model->deleteJanji($data);
				 if($send) {
					
					redirect('Dokter/lihatJanji');}
			}
				 if($this->session->userdata('Level')){
  $this->load->view('Admin/delete_obat.php');
	 }
		}
	 public function buatjanjiDokter($Username)
 {
 	if($this->session->userdata('Level')){
		$this->load->model('user_model');
        $user = $this->user_model->loadDataProfil($Username);
        $this->load->vars('u', $user);
  		$this->load->view('Dokter/buatJanji.php');
  	}
 }
public function BuatJanji($dokter){
	$this->load->database();
	 $this->load->Model('janji_model');
	 $this->janji_model->create_janji($dokter);
	  ?>
				 <script type="text/javascript">
     			alert("Janji Telah dibuat, Silahkan menunggu konfirmasi dari Dokter");
     			</script>
		<?php
	$user = $this->user_model->loadDataProfil($dokter);
        $this->load->vars('u', $user);
  		$this->load->view('Dokter/buatJanji.php');
}
	
	
	
	
	
	
	
	
	
	

 public function home()
 {
  $this->load->view('Dokter/home.php');
 }
 

 public function buatJanjiBaru($id)
 {	  
	 if($this->session->userdata('Level','2')){ 
	 		$this->load->database(); 		 	 			
			 $this->load->model('janji_model');
			 $usernameDK   = $this->janji_model->getUsername($id);
			 $this->janji_model->create_janji($usernameDK);
			 
			// $this->load->database();
			 //$this->load->Model('user_model');
			 //$this->user_model->create_janji();
				redirect('Dokter/lihatDaftarJanji');
			 }
			
	 
 }
 
  public function gambarSaya()
 {
  $this->load->view('Dokter/gambar_saya.php');
 }  
 
 public function logout() {
		$this->session->sess_destroy();
		redirect('Home');
	}
	//====================bagOs==================//
	public function lihatProfil2()
 {
  $this->load->view('Dokter/lihatProfil2.php');
 }
	
}