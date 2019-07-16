<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function setvalue(){
    $inputFileName = 'db/MA121-001-Student_Information_Fall2018.xlsx';

    /** Load $inputFileName to a Spreadsheet object **/
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
    $sheet = $spreadsheet->getActiveSheet();

    $writer = new Xlsx($spreadsheet);
    $writer->save($inputFileName);
}


function getvalue(){
    $inputFileName = 'db/MA121-001-Student_Information_Fall2018.xlsx';

    /** Load $inputFileName to a Spreadsheet object **/
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);

}
?>