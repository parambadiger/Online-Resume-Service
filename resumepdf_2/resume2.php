<?php
    $html = '
<head>
    <meta charset="utf-8">
    <title>Download Your Resume</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/resume2.css">
</head>

    <header>
        <h2>RESUME</h2>
        <p><strong>Contact No: </strong>'.$_POST['pnum'].' / <strong>Gmail Id: </strong>'.$_POST['gid'].'</p>
    </header>
    <section>
    <div id="part1">
        <div>       
            <h3>TECHNICAL SKILLS:</h3>
            <ul>';
            foreach($_POST['skill'] as $s){
                $html .= '<li>'.$s.'</li>';
            }
            $html .='</ul>
        </div>
        <div>        
            <h3>SUMMURY OF SKILLS:</h3>
            <ul>';
            foreach($_POST['summury'] as $s){
                $html .= '<li>'.$s.'</li>';
            }
            $html .='</ul>
        </div>
        <div>
            <h3>CAREER ACTIVITIES:</h3>
            <ul>';
            foreach($_POST['activities'] as $a){
                $html .= '<li>'.$a.'</li>';
            }
            $html .= '</ul>
        </div>
        <div>
            <h3>STRENGTH:</h3>
            <ul>';
            foreach($_POST['strength'] as $s){
                $html .= '<li>'.$s.'</li>';
            }
    $html .= '</ul>
        </div>
    </div>
    <div id="part2">          
        <h3>OBJECTIVEES:</h3>
            <p>'.$_POST['objective'].'</p>

        <h3>ACADEMICS:</h3>
        <ul>';
        $course=$_POST['course'];
        $allcourse=' ';
        foreach($course as $c){
            $allcourse .=$c.'&& ';
        }
        $university=$_POST['university'];
        $alluniversity=' ';
        foreach($university as $u){
            $alluniversity .=$u.'&& ';
        }
        $result=$_POST['result'];
        $allresult=' ';
        foreach($result as $r){
            $allresult .=$r.'&& ';
        }
        $passout=$_POST['passout'];
        $allpassout=' ';
        foreach($passout as $p){
            $allpassout .=$p.'&& ';
        }
        $course=explode('&& ', $allcourse);
        $course=array_filter($course); 
        $university=explode('&& ', $alluniversity);
        $university=array_filter($university); 
        $result=explode('&& ', $allresult);
        $result=array_filter($result); 
        $passout=explode('&& ', $allpassout);
        $passout=array_filter($passout); 
        $count=sizeof($course);
        for($i=0;$i<$count;$i++){
            $html .='<li>'.$course[$i].' from '.$university[$i].' with '.$result[$i].'% Rsult in '.$passout[$i].'</li>';
            }
        $html .='</ul>

        <h3>ACADEMICS PROJECT:</h3>
        <table>
            <tr><td>Title</td><td>'.$_POST['title'].'</td></tr>
            <tr><td>Team Size</td><td>'.$_POST['team'].'</td></tr>
        </table>
        <h4>PROJECT DESCRIPTION:</h4>
            <p>'.$_POST['desp'].'</p>

        <h3>PERSONAL DETAILS:</h3>
        <table>
                <tr><td>Full Name</td><td>'.$_POST['fname'].' '.$_POST['lname'].'</td></tr>
                <tr><td>Date of Birth</td><td>'.$_POST['bday'].'</td></tr>
                <tr><td>Gender</td><td>'.$_POST['gender'].'</td></tr>
                <tr><td>Marital Status</td><td>'.$_POST['marital'].'</td></tr>
                <tr><td>Languages Known</td><td>'.$_POST['languages'].'</td></tr>
                <tr><td>Permanent Address</td><td>'.$_POST['paddress'].'</td></tr>
                <tr><td>Current Address</td><td>'.$_POST['caddress'].'</td></tr>
        </table>
        <h3>DECLARATION:</h3>
            <p>'.$_POST['declaration'].'</p>
    </div>
    </section>';
    require_once "dompdf/autoload.inc.php";
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Resume", array("Attachment"=>0));
?>