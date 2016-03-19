<?php

namespace Demo;
use HTML2PDF;

define('APP_PATH', dirname(__DIR__));
/**
 * author: yangbin
 * Date: 2016/3/8
 * Time: 16:58
 */
require_once(APP_PATH."/vendor/autoload.php");
class CreatePdf {

    public function index() {

        $content = file_get_contents(APP_PATH."/src/test.html");
        $html2pdf = new HTML2PDF('P', 'A4', 'en');
        $html2pdf->setDefaultFont('javiergb');
        $html2pdf->writeHTML($content);
        $html2pdf->Output(APP_PATH.'/first_PDF_file.pdf');
    }



}
$pdfobj = new CreatePdf();
$pdfobj->index();

?>


