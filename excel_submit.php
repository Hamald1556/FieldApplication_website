<?php
session_start();
require_once('faos_session_checker.php');
?>
<?php
error_reporting(0);
//connect to db
require_once('database.php');
//set filename
$title.$filename="FAOS-Field Applications Online System.xls";
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';


// Create new PHPExcel object
echo date('H:i:s') , " Create new PHPExcel object" , EOL;
$objPHPExcel = new PHPExcel();

// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;
// $objPHPExcel->getProperties()->setCreator("ATC-SMS System")
// 							 ->setLastModifiedBy("ATC-SMS System")
// 							 ->setTitle("ATC-NACTE REPORT")
// 							 ->setSubject("ATC-NACTE REPORT")
// 							 ->setDescription("Test document for PHPExcel, generated using PHP classes.")
// 							 ->setKeywords("office PHPExcel php")
// 							 ->setCategory("Test result file");
//set font size for the whole document
//$objPHPExcel->getActiveSheet()->getStyle("F1:G1")->getFont()->setSize(16);//for some cells
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(10);
// Add some data
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(0)
// ->setCellValue('A1', $org)
->setCellValue('A2', 'FAOS -SUBMITTED STUDENTS LIST')
->setCellValue('A3','Sno.')
->setCellValue('B3','First Name')
->setCellValue('C3','Last Name')
->setCellValue('D3','Email')
->setCellValue('E3','Course')
->setCellValue('F3','Department')
->setCellValue('G3','Field Area')
->setCellValue('H3','Uni_College');
//align right
 $style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );
$objPHPExcel->getActiveSheet()->getStyle("A1:H3")->applyFromArray($style);
//align center
$stylecenter = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );
// $objPHPExcel->getActiveSheet()->getStyle("A2:D2")->applyFromArray($style);
// //bold
$objPHPExcel->getActiveSheet()->getStyle('A3:H3')->getFont()->setBold(true);
//look for results and display them
require_once('database.php');
$sql="SELECT * FROM submit";
$geja=mysqli_query($db,$sql);
$id=1;
$row=8;
while($store=mysqli_fetch_array($geja)){
    $k=$store['id'];
    $l=$store['first_name'];
    $m=$store['last_name'];
    $n=$store['email'];
    $o=$store['course'];
    $d=$store['dept'];
    $f=$store['field'];
    $p=$store['uni_college'];
		 
		 $objPHPExcel->getActiveSheet()->SetCellValue('A'.$row, $id);
			$objPHPExcel->getActiveSheet()->SetCellValue('B'.$row, $l);
			$objPHPExcel->getActiveSheet()->SetCellValue('C'.$row, $m);
      $objPHPExcel->getActiveSheet()->SetCellValue('D'.$row, $n);
      $objPHPExcel->getActiveSheet()->SetCellValue('E'.$row, $o);
      $objPHPExcel->getActiveSheet()->SetCellValue('F'.$row, $d);
      $objPHPExcel->getActiveSheet()->SetCellValue('G'.$row, $f);
      $objPHPExcel->getActiveSheet()->SetCellValue('H'.$row, $p);
		 $id++;
		 $row++;
                 }
// $sql="SELECT DISTINCT(regno),course,semister,stid,regno FROM results where course='$coz' AND semister>='$sem1' AND semister<='$sem' AND year='$yr' group by regno order by regno";
// 	$result=mysqli_query($conn,$sql);
// 	$k=1;
// 	$dz=1;
// 	$row=4;
// 	while($rows=mysqli_fetch_array($result))
// 	{
// 			//Data
// 			 $coll="Arusha Technical College";
// 			 $pz=ucwords(ucfirst(strtolower($pz)));
// 			 $coz_nm=ucwords(ucfirst(strtolower($coz_nm)));
// 			 //$dis=$ca.'-'.$final.'-'.$total.'-'.$level1;
// 			$objPHPExcel->getActiveSheet()->SetCellValue('A'.$row, $examyear);
// 			$objPHPExcel->getActiveSheet()->SetCellValue('B'.$row, $coll);
// 			$objPHPExcel->getActiveSheet()->SetCellValue('C'.$row, $regno);
// 			$objPHPExcel->getActiveSheet()->SetCellValue('D'.$row, $regyear);
// 			$objPHPExcel->getActiveSheet()->SetCellValue('E'.$row, $fname);
// 			$objPHPExcel->getActiveSheet()->SetCellValue('F'.$row, $nta);
// 			$objPHPExcel->getActiveSheet()->SetCellValue('G'.$row, $pz);
// 			$objPHPExcel->getActiveSheet()->SetCellValue('H'.$row, $coz_nm);
// 			$objPHPExcel->getActiveSheet()->SetCellValue('I'.$row, $class );
// 			$objPHPExcel->getActiveSheet()->SetCellValue('J'.$row, '');
// 			$row++;
// 			}
	//set auto width in cells
	foreach(range('A','H') as $columnID) {
    $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}
foreach(range('A3','H3') as $columnID) {
    $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}
//applyborders
$applyborders = array(
  'borders' => array(
    'allborders' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
    )
  )
);
//$objPHPExcel->getActiveSheet()->getStyle('A3:J3')->applyFromArray($applyborders);
//$objPHPExcel->getActiveSheet()->getStyle('A7:J7')->applyFromArray($applyborders);
//$objPHPExcel->getActiveSheet()->getStyle('A8:J8')->applyFromArray($applyborders);//
//unset($styleArray);
$objPHPExcel->getActiveSheet()->getStyle(
    'A4:' . 
    $objPHPExcel->getActiveSheet()->getHighestColumn() . 
    $objPHPExcel->getActiveSheet()->getHighestRow()
)->applyFromArray($applyborders);

//merge cells
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:H1');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:H2');




// Rename worksheet
echo date('H:i:s') , " Rename worksheet" , EOL;
$objPHPExcel->getActiveSheet()->setTitle('Certificates');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

ob_end_clean();
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename='.$filename);
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
