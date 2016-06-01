<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rumah_Sakit extends CI_Controller {

	public function Tambah(){
	 $this->load->database();
	 $this->load->Model('rumah_sakit_model');
	 $this->rumah_sakit_model->create();
			?>
				 <script type="text/javascript">
     			alert("Data Berhasil Ditambahkan");
     			</script>
			<?php
	 redirect('Rumah_Sakit/loadData','refresh');
}

	public function loadData() {
		$this->load->model('rumah_sakit_model');
		$data= $this->rumah_sakit_model->getall();
		$this->load->vars('k', $data);
		$this->load->view('Admin/tambah_rumah_sakit');
 }
 
	function delete_rumah_sakit()
{
		$this->load->model('rumah_sakit_model');
		$data = $this->rumah_sakit_model->getall();
		$this->load->vars('rs', $data);
		$this->load->view('Admin/delete_rumah_sakit',$data);
 
}
	
	function delete($id_kategori) {
		$this->load->model('rumah_sakit_model');
		$this->rumah_sakit_model->delete($id_kategori);
		redirect('Rumah_Sakit/delete_rumah_sakit','refresh');
}
	
	function update_rumah_sakit()
{
		$this->load->model('rumah_sakit_model');
		$data = $this->rumah_sakit_model->getall();
		$this->load->vars('rs', $data);
		$this->load->view('Admin/update_rumah_sakit',$data);
 
}
	function updatedata($id) {
        if($this->input->post('Save')){
            $this->rumah_sakit_model->update($id);
            redirect('Rumah_Sakit/update_rumah_sakit');
        }
		$this->load->model('rumah_sakit_model');
        $data['hasil'] = $this->rumah_sakit_model->getById($id);
		$this->load->vars('v', $data);
        $this->load->view('Admin/update', $data);
 
    }

    function edit($id){
     $this->load->model('rumah_sakit_model');
	 $query   = $this->rumah_sakit_model->get($id);
	 $data['fid']    = $query['id'];
	 $data['fnama']    = $query['nama'];
	 $data['falamat']  = $query['alamat'];
	 $data['fno_telp']  = $query['no_telp'];
	 $data['fketerangan']= $query['keterangan'];
	 $this->load->vars('v', $data);
	 $this->load->view('Admin/update',$data);
	 }

	 function submit(){
	 if ($this->input->post('submit')){
	 $this->load->model('rumah_sakit_model');
	 $this->rumah_sakit_model->update();
	 redirect('Rumah_Sakit/update_rumah_sakit');
	 
	 }
	}
	public function lihatDaftarRumahSakit()
 {
		$this->load->model('rumah_sakit_model');
        $data = $this->rumah_sakit_model->getall();
        $this->load->vars('data', $data);
		$this->load->view('Pasien/lihatDaftarRumahSakit.php');
 }
 
	
}