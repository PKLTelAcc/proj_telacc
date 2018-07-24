<?php 
/**
 * 
 */
class C_report extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_report');
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
	}

	public function index()
	{
		$dataWitel 			= $this->M_report->getWitel();
		$dataSubWitel 		= $this->M_report->getSubWitel();
		$dataProgram 		= $this->M_report->getProgram();
		$dataStatus 		= $this->M_report->getStatus();
		$dataMitra			= $this->M_report->getMitra();
		$dataWorkOrder 		= $this->M_report->getWorkOrder();
		$dataSurvey 		= $this->M_report->getSurvey();
		$dataInstalasi 		= $this->M_report->getInstalasi();
		$dataReport			= $this->M_report->getReport();

		$data = array(
			'title'			=> 'Report',
			'content' 		=> 'V_report',
			'dataWitel' 	=> $dataWitel,
			'dataSubWitel'	=> $dataSubWitel,
			'dataProgram'	=> $dataProgram,
			'dataStatus'	=> $dataStatus,
			'dataMitra'		=> $dataMitra,
			'dataWorkOrder'	=> $dataWorkOrder,
			'dataSurvey'	=> $dataSurvey,
			'dataInstalasi'	=> $dataInstalasi,
			'dataReport'	=> $dataReport
		);

		$this->load->view('tampilan/V_combine',$data);
	}

	/*public function upload(){
  $fileName = $this->input->post('file', TRUE);

  $config['upload_path'] = './upload/'; 
  $config['file_name'] = $fileName;
  $config['allowed_types'] = 'xls|xlsx|csv|ods|ots';
  $config['max_size'] = 10000;

  $this->load->library('upload', $config);
  $this->upload->initialize($config); 
  
  if (!$this->upload->do_upload('file')) {
   $error = array('error' => $this->upload->display_errors());
   $this->session->set_flashdata('msg','Ada kesalah dalam upload'); 
   redirect('C_report'); 
  } else {
   $media = $this->upload->data();
   $inputFileName = 'upload/'.$media['file_name'];
   
   try {
    $inputFileType = IOFactory::identify($inputFileName);
    $objReader = IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
   } catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
   }

   $sheet = $objPHPExcel->getSheet(0);
   $highestRow = $sheet->getHighestRow();
   $highestColumn = $sheet->getHighestColumn();

   for ($row = 2; $row <= $highestRow; $row++){  
     $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
       NULL,
       TRUE,
       FALSE);
     $data = array(
     "INST_PROGRES"	=> $rowData[0][4],
     "INST_KENDALA"	=> $rowData[0][7],
     "INST_DOKUMENTASI"	=> $rowData[0][23],
     "INST_MATERIAL"=> $rowData[0][11],
     "INST_JASA"=> $rowData[0][12],
     "INST_TOTAL"=> $rowData[0][13],
    );
    $this->M_report->insert($data);
   } 
   $this->session->set_flashdata('msg','Berhasil upload ...!!'); 
   redirect('C_report');
  }  
 } */

 public function upload()
	{
		$fileName = $this->input->post('file', TRUE);

		$config['upload_path'] = './upload/'; 
		$config['file_name'] = $fileName;
		$config['allowed_types'] = 'xls|xlsx|csv|ods|ots';
		$config['max_size'] = 99999999;

		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		  
		if (!$this->upload->do_upload('file')) {
		   $error = array('error' => $this->upload->display_errors());
		   $this->session->set_flashdata('msg','Ada kesalahan dalam upload'); 
		   redirect('C_report'); 
		} else {
		   $media = $this->upload->data();
		   $inputFileName = 'upload/'.$media['file_name'];
		   
		   try {
		    $inputFileType = IOFactory::identify($inputFileName);
		    $objReader = IOFactory::createReader($inputFileType);
		    $objPHPExcel = $objReader->load($inputFileName);
		   } catch(Exception $e) {
		    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
		   }

		   $sheet = $objPHPExcel->getSheet(0);
		   $highestRow = $sheet->getHighestRow();
		   $highestColumn = $sheet->getHighestColumn();

		   for ($row = 2; $row <= $highestRow; $row++){  
		     $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
		       NULL,
		       TRUE,
		       FALSE);
		     
		     $idWtel = array(
		     "WTEL_NAME"=> $rowData[0][1]
		    );
		     

		     $cekWtel=$this->M_report->cekWtel($rowData[0][1]);

		     //jika data duplicate ditemukan
		     if ($cekWtel!=null) {
		     	echo "";
		     }else{
		     	$this->M_report->insertWtel($idWtel);
		     }

		     $ambilIDWtel=$this->M_report->ambilIDWtel($rowData[0][1]);

		     $idSwit = array(
		     "SWIT_NAME"=> $rowData[0][2],
		     "SWIT_WTEL_ID"=> $ambilIDWtel[0]["WTEL_ID"]
		    );

		     $cekSwit=$this->M_report->cekSwit($rowData[0][2]);

		     //jika data duplicate ditemukan
		     if ($cekSwit!=null) {
		     	echo "";
		     }else{
		     	$this->M_report->insertSwit($idSwit);
		     }

		     $idProg = array(
		     	"PROG_NAME" => $rowData[0][3]
		     );
		     
		     $cekProg=$this->M_report->cekProg($rowData[0][3]);

		     //jika data duplicate ditemukan
		     if ($cekProg!=null) {
		     	echo "";
		     }else{
		     	$this->M_report->insertProg($idProg);
		     }

		     $idStat = array(
		     	"STAT_NAME" => $rowData[0][23]
		     );
		     
		     $cekStat=$this->M_report->cekStat($rowData[0][23]);

		     //jika data duplicate ditemukan
		     if ($cekStat!=null) {
		     	echo "";
		     }else{
		     	$this->M_report->insertStat($idStat);
		     }

		     $ambilIDSwit=$this->M_report->ambilIDSwit($rowData[0][2]);
		     $ambilIDProg=$this->M_report->ambilIDProg($rowData[0][3]);
		     $ambilIDStat=$this->M_report->ambilIDStat($rowData[0][23]);

		     $idWode = array(
		     "WODE_ID_TA"	=> $rowData[0][4],
		     "WODE_NAMA_LOKASI"	=> $rowData[0][7],
		     "WODE_WTEL_ID"	=> $ambilIDWtel[0]["WTEL_ID"],
		     "WODE_SWIT_ID"	=> $ambilIDSwit[0]["SWIT_ID"],
		     "WODE_PROG_ID"	=> $ambilIDProg[0]["PROG_ID"],
		     "WODE_STAT_ID"	=> $ambilIDStat[0]["STAT_ID"]
		    );

		     $cekWode=$this->M_report->cekWode($rowData[0][4]);

		     //jika data duplicate ditemukan
		     if ($cekWode!=null) {
		     	echo "";
		     }else{
		     	$this->M_report->insertWode($idWode);
		     }

		     $ambilIDWode=$this->M_report->ambilIDWode($rowData[0][4]);

		     $idInst = array(
		     "INST_MATERIAL"=> $rowData[0][12],
		     "INST_JASA"	=> $rowData[0][13],
		     "INST_TOTAL"	=> $rowData[0][14],
		     "INST_ODP"		=> $rowData[0][10],
		     "INST_WTEL_ID"	=> $ambilIDWtel[0]["WTEL_ID"],
		     "INST_SWIT_ID"	=> $ambilIDSwit[0]["SWIT_ID"],
		     "INST_PROG_ID"	=> $ambilIDProg[0]["PROG_ID"],
		     "INST_STAT_ID"	=> $ambilIDStat[0]["STAT_ID"],
		     "INST_WODE_ID"	=> $ambilIDWode[0]["WODE_ID"]
		    );

		     $cekInst=$this->M_report->cekInst($rowData[0][14]);

		     //jika data duplicate ditemukan
		     if ($cekInst!=null) {
		     	echo "";
		     }else{
		     	$this->M_report->insertInst($idInst);
		     }

		   } 
		   $this->session->set_flashdata('msg','Berhasil upload ...!!'); 
		   redirect('C_report');
		}  
	} 
}
 ?>