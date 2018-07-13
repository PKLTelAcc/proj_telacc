<?php
/**
* 
*/
class C_pegawai extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai');
	}

	public function index()
	{

		$pegawai=$this->M_pegawai->view();
		$data = array(
			'title'=>'Input Pegawai',
			'content' => 'V_pegawai',
			'pegawai' =>$pegawai
		);
		$this->load->view('tampilan/V_combine',$data);

	}
	public function form()
	{
		$nama = $_POST['txtNama'];
		$nik  = $_POST['txtNik'];
		$psa  = $_POST['txtpsa'];


		$data = array(
			'PEGA_NAME' =>$nama,
			'PEGA_NIK'	=>$nik,
			'PEGA_PSA'	=>$psa
			);
		$pegawai=$this->M_pegawai->insert($data);
		 redirect('C_pegawai');
	}
	public function formUpdate($id)
	{
		$pegawai=$this->M_pegawai->update($id);
		$data = array(
			'content'=>'V_editPegawai',
			'title'=>'Edit Pegawai',
			'pegawai' =>$pegawai
		);
		$this->load->view('tampilan/v_combine',$data);
	}
	public function updateData($id)
	{
		$nama = $_POST['txtNama'];
		$nik  = $_POST['txtNik'];
		$psa  = $_POST['txtpsa'];


		$data = array(
			'PEGA_NAME' =>$nama,
			'PEGA_NIK'	=>$nik,
			'PEGA_PSA'	=>$psa
			);
		$pegawai=$this->M_pegawai->updateData($id, $data);
		 redirect('C_pegawai');
	}
	public function delete($id)
	{
		$this->db->delete('pegawai', array('PEGA_ID' => $id));
		redirect('C_pegawai');
	}
}
?>
