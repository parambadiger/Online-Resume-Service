<?php
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $link = 'http://localhost/OnlineResumeService/resumelink_2/view.php?fname='.$fname.'&lname='.$lname;
    $html = '<a href="'.$link.'">'.$link.'</a>';
    require_once "dompdf/autoload.inc.php";
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Resumelink");
?>