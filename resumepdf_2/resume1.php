<?php
    $html = '<head>
                <meta charset="utf-8">
                <title>Download Your Resume</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="css/resume1.css">
            </head>
            <header>
            <h3>RESUME</h3>
            <p><strong>Contact No: </strong>'.$_POST['pnum'].' / <strong>Gmail Id: </strong>'.$_POST['gid'].'</p>
        </header>
                <table>
            <thead>
                <tr>
                    <th>OBJECTIVEES</th>
                </tr>
            </thead>
            <tbody>
                    <tr><td><p>'.$_POST['objective'].'</p></td></tr>
            </tbody>
        </table>

        <table>
        <thead>
            <tr>
                <th>SKILL SUMMURY</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul>';
                    foreach($_POST['summury'] as $s){
                        $html .= '<li>'.$s.'</li>';
                    }
                    $html .='</ul>
                </td>
            </tr>
        </tbody>
    </table>

    <table>
    <thead>
        <tr>
            <th>TECHNICAL SKILLS</th>
        </tr>
    </thead>
    <tbody>
        <tr><td><ul>';
        foreach($_POST['skill'] as $s){
            $html .= '<li>'.$s.'</li>';
        }
        $html .='</ul></td></tr>
    </tbody>
</table>

<table>
<thead>
    <tr>
        <th>ACADEMICS</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>
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
        </td>
    </tr>
</tbody>
</table>
<table>
<thead>
    <tr>
        <th>PROJECT WORK</th>
        <th>&nbsp;</th>
    </tr>
</thead>
<tbody>
    <tr><td>Title</td><td>'.$_POST['title'].'</td></tr>
    <tr><td>Team Size</td><td>'.$_POST['team'].'</td></tr>
</tbody>
</table>

<table>
<thead>
    <tr>
        <th>PROJECT DESCRIPTION</th>
    </tr>
</thead>
<tbody>
    <tr><td>
    <p>'.$_POST['desp'].'</p>
    </td></tr>
</tbody>
</table>

<table>
<thead>
    <tr><th>CURRICULAR ACTIVITIES</th></tr>
</thead>
<tbody>
    <tr>
        <td>
        <ul>';
        foreach($_POST['activities'] as $a){
            $html .= '<li>'.$a.'</li>';
        }
$html .= '</ul>
        </td>
    </tr>
</tbody>                   
</table>
<table>
<thead>
    <tr>
        <th>STRENGTH</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>
        <ul>';
        foreach($_POST['strength'] as $s){
            $html .= '<li>'.$s.'</li>';
        }
$html .= '</ul>
        </td>
    </tr>
</tbody>
</table>
<table>
<thead>
    <tr>
        <th>PERSONAL DETAILS</th>
        <th>&nbsp;</th>
    </tr>
</thead>
<tbody>
        <tr><td>Full Name</td><td>'.$_POST['fname'].' '.$_POST['lname'].'</td></tr>
        <tr><td>Date of Birth</td><td>'.$_POST['bday'].'</td></tr>
        <tr><td>Gender</td><td>'.$_POST['gender'].'</td></tr>
        <tr><td>Marital Status</td><td>'.$_POST['marital'].'</td></tr>
        <tr><td>Languages Known</td><td>'.$_POST['languages'].'</td></tr>
        <tr><td>Permanent Address</td><td>'.$_POST['paddress'].'</td></tr>
        <tr><td>Current Address</td><td>'.$_POST['caddress'].'</td></tr>
</tbody>
</table>
<table>
<thead>
    <tr>
        <th>DECLARATION</th>
    </tr>
</thead>
<tbody>
        <tr><td><p>'.$_POST['declaration'].'</p></td></tr>
</tbody>
</table>';
    require_once "dompdf/autoload.inc.php";
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Resume", array("Attachment"=>0));
?>