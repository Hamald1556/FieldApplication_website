<?php
session_start();
  require_once('faos_session_checker.php');
?>
<?php
$db=mysqli_connect("localhost","atchosting_hamadially","@1903bahati","atchosting_21051013018");

    require('fpdf/fpdf.php');

    class tz extends FPDF{
        function header(){
            // $this->Image('../picha/tochi.png',10,6,20);
            $this->SetDrawColor(0,80,180);
            $this->SetFillColor(230,230,0);
            $this->SetTextColor(220,50,50);
            $this->Setfont('Arial', 'B', 25);
            $this->Cell(210,10, 'NAME OF STUDENTS SUBMITTED FORM', 0, 1,'0');
            $this->Ln(10);
        }
        function footer(){
            $this->SetY(-12);
            $this->Setfont('Arial', 'I', 10);
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
            $this->Ln(10);
        }
        function ChapterTitle(){
        // Arial 12
        $this->SetFont('Arial','B',16);
        $this->SetDrawColor(0,80,180);
        $this->SetFillColor(200,220,255);
        // Title
        $this->Cell(100,10,  0,1, 'C');
        $this->SetFont('Arial','B',14);
        $this->Cell(100,10, 0,1, 'C');
        // Line break
        $this->Ln(4);
        }

        function printData(){
            //set font properties
            // $this->SetFont('Arial','','10');
            //set font color
         $db=mysqli_connect("localhost","atchosting_hamadially","@1903bahati","atchosting_21051013018");
    
            //print the text
            $this->SetFont('Arial','','7');
          //  $this->Cell(45);
            $this->Cell(7,7,'S/No','1','0','0');
            $this->Cell(20,7,'FIRST NAME','1','0','0');
            $this->Cell(20,7,'LAST NAME','1','0','0');
            // $this->Cell(45,7,'EMAIL','1','0','c');
            $this->Cell(30,7,'COURSE','1','0','0');
            $this->Cell(23,7,'FIELD AREA','1','0','0');
            $this->Cell(23,7,'DERPARTMENT','1','0','0');
            $this->Cell(45,7,'UN/COLLEGE','1','0','0');
            // $this->Cell(90,7,'PROBLEMS','1','0','C');
            $this->ln();
            $this->SetFont('Arial','','10');
            $result = mysqli_query($db,"SELECT * FROM `submit`");
            if(mysqli_num_rows($result)>0){
                $num = 0;
                while($row = mysqli_fetch_assoc($result)){
                    $num ++;

                    $this->Cell(7,7,$num,'1','0','l');
                    $this->Cell(20,7,$row['first_name'],'1','0','l');
                    $this->Cell(20,7,$row['last_name'],'1','0','l');
                    // $this->Cell(45,7,$row['email'],'1','0','l');
                    $this->Cell(30,7,$row['course'],'1','0','1');
                    // $this->Cell(20,7,$row['course'],'1','0','1');
                    $this->Cell(23,7,$row['field'],'1','0','1');
                    $this->Cell(23,7,$row['dept'],'1','0','1');
                    $this->Cell(45,7,$row['uni_college'],'1','0','1');
                    // $this->Cell(90,7,$row['Problems'],'1','0','l');
                    $this->Ln();
                    
                }
            }else{
                $this->Cell(60);
                $this->Cell(80,5,"No data found");
            }
        }
        
    }




    $tz = new tz();
    $tz -> Addpage();
    $tz-> AliasNbPages();
    $tz->SetAuthor('TZ');
    $tz ->SetCreator("TZ");
    $tz ->SetTitle('F O S');
    $tz -> printData();
    
    $tz -> Output("I", "FAOS APPLICANTS LIST.pdf");
?>