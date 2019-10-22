<?php
require_once "vendor/autoload.php";
require_once "db.php";
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$Excel_writer = new Xlsx($spreadsheet);
 
$spreadsheet->setActiveSheetIndex(0);
$activeSheet = $spreadsheet->getActiveSheet();
 
$activeSheet->setCellValue('A1', 'Family Name');
$activeSheet->setCellValue('B1', 'First Name');
$activeSheet->setCellValue('C1', 'Middle Name');
$activeSheet->setCellValue('D1', 'Degree');
$activeSheet->setCellValue('E1', 'Age');
$activeSheet->setCellValue('F1', 'Nationality');
$activeSheet->setCellValue('G1', 'Status');
$activeSheet->setCellValue('H1', 'Year Graduated');
$activeSheet->setCellValue('I1', 'Present Address');
$activeSheet->setCellValue('J1', 'Present Employment');
$activeSheet->setCellValue('K1', 'Employment Status');
$activeSheet->setCellValue('L1', 'Office Address');
$activeSheet->setCellValue('M1', 'Contact Number');
$activeSheet->setCellValue('N1', 'Email');
$activeSheet->setCellValue('O1', 'Facebook');
$activeSheet->setCellValue('P1', 'Name of Classmate');
$activeSheet->setCellValue('Q1', 'Classmate Address');

 
$query = $db->query("SELECT * FROM alumni ORDER BY familyname");
 
if($query->num_rows > 0) {
    $i = 2;
    while($row = $query->fetch_assoc()) {
        $activeSheet->setCellValue('A'.$i , $row['familyname']);
        $activeSheet->setCellValue('B'.$i , $row['firstname']);
        $activeSheet->setCellValue('C'.$i , $row['middlename']);
        $activeSheet->setCellValue('D'.$i , $row['degree']);
        $activeSheet->setCellValue('E'.$i , $row['age']);
        $activeSheet->setCellValue('F'.$i , $row['nationality']);
        $activeSheet->setCellValue('G'.$i , $row['status']);
        $activeSheet->setCellValue('H'.$i , $row['year_graduated']);
        $activeSheet->setCellValue('I'.$i , $row['present_address']);
        $activeSheet->setCellValue('J'.$i , $row['present_employment']);
        $activeSheet->setCellValue('K'.$i , $row['employment_status']);
        $activeSheet->setCellValue('L'.$i , $row['office_address']);
        $activeSheet->setCellValue('M'.$i , $row['contact_number']);
        $activeSheet->setCellValue('N'.$i , $row['email']);
        $activeSheet->setCellValue('O'.$i , $row['facebook']);
        $activeSheet->setCellValue('P'.$i , $row['name_of_classmate']);
        $activeSheet->setCellValue('Q'.$i , $row['classmate_address']);
        $i++;
    }
}
 
$filename = 'alumni.xlsx';
 
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'. $filename);
header('Cache-Control: max-age=0');
$Excel_writer->save('php://output');