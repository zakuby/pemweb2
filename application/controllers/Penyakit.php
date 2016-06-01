<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Penyakit extends CI_Controller {


	public function analisis()
	{
		if($this->session->userdata('Level')){
		 if($_SESSION["Level"] == 1){
		 $this->load->Model('penyakit_model');
		 $data['gejala1'] = $this->penyakit_model->getgejala1();
		 $data['gejala2'] = $this->penyakit_model->getgejala1();
		 $data['gejala3'] = $this->penyakit_model->getgejala1();

		 $this->load->view('Pasien/analisis', $data);
		 }
 		}else{
 
		 	?>
				 <script type="text/javascript">
     			alert("Anda Harus Login Sebagai Pasien Untuk menggunakan Fitur ini");
     			</script>
			<?php
			 redirect('Home', 'refresh');
			}
 }
 	public function gethasil(){
 		$gejala1 = $this->input->post('gejala1');
 		$gejala2 = $this->input->post('gejala2');
 		$gejala3 = $this->input->post('gejala3');
 		$this->load->Model('penyakit_model');
		$data = $this->penyakit_model->getpenyakit($gejala1, $gejala2, $gejala3);
		$this->load->vars('data', $data);
		$this->load->view('Pasien/hasilanalisis');

 	}
 	public function gejala2($gejala){
 		$this->load->Model('penyakit_model');
		$data = $this->penyakit_model->getgejala2($gejala);
		$this->load->vars('u2', $data);
		 redirect('Pasien/analisis');

 	}

	public function Tambah(){
	 $this->load->database();
	 $this->load->Model('penyakit_model');
	 $this->penyakit_model->create();
			?>
				 <script type="text/javascript">
     			alert("Data Berhasil Ditambahkan");
     			</script>
			<?php
	 redirect('Penyakit/loadData','refresh');
	}

	Public function loadData() {
		$this->load->model('penyakit_model');
		$data = $this->penyakit_model->getall();
		$this->load->vars('zz', $data);
		$this->load->view('Admin/tambah_penyakit');
 	}

 	Public function update_penyakit()
{
		$this->load->model('penyakit_model');
		$data = $this->penyakit_model->getall();
		$this->load->vars('zz', $data);
		$this->load->view('Admin/update_penyakit',$data);
 
}

	Public function edit($id){
     $this->load->model('penyakit_model');
	 $query   = $this->penyakit_model->get($id);
	 $data['fid']    = $query['id_penyakit'];
	 $data['fnama']    = $query['nama'];
	 $data['fobat']  = $query['obat'];
	 $data['fgejala1']  = $query['gejala1'];
	 $data['fgejala2']= $query['gejala2'];
	 $data['fgejala3']= $query['gejala3'];
	 $this->load->vars('v', $data);
	 $this->load->view('Admin/update2',$data);
	 }

	 Public function submit(){
	 if ($this->input->post('submit')){
	 $this->load->model('penyakit_model');
	 $this->penyakit_model->update();
	 redirect('Penyakit/update_penyakit');
	 
	 }
	}
	Public function delete_penyakit()
{
		$this->load->model('penyakit_model');
		$data = $this->penyakit_model->getall();
		$this->load->vars('zz', $data);
		$this->load->view('Admin/delete_penyakit',$data);
 
}
	
	Public function delete($id) {
		$this->load->model('penyakit_model');
		$this->penyakit_model->delete($id);
		redirect('Penyakit/delete_penyakit','refresh');
}
}