<?php
    $html = '<head>
                <meta charset="utf-8">
                <title>Download Your Resume</title>
                <link rel="stylesheet" href="css/resume.css">
            </head>
            <div id="page">
                <div>
                    <h1>RESUME</h1>
                    <table>
                        <tr>
                            <td colspan="2" ><h2>'.$_POST['fname'].' '.$_POST['lname'].'</h2></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>: '.$_POST['pnum'].'</td>
                        </tr>
                        <tr>
                            <td>Gmail ID</td>
                            <td>: '.$_POST['gid'].'</td>
                        </tr>
                        <tr>
                            <td>Current Address</td>
                            <td>: '.$_POST['caddress'].'</td>
                        </tr>
                    </table>
                </div>
                <div>
                    <h3>OBJECTIVES:</h3>
                    <p>'.$_POST['objective'].'</p>
                </div>

                <div>
                    <h3>SUMMURY OF SKILLS:</h3>
                    <ul>';
                    foreach($_POST['summury'] as $s){
                        $html .= '<li>'.$s.'</li>';
                    }
                $html .= '</ul>
                </div>

                <div>
                    <h3>TECHNICAL SKILLS:</h3>
                    <ul>';
                    foreach($_POST['skill'] as $s){
                        $html .= '<li>'.$s.'</li>';
                    }
                $html .= '</ul>
                </div>

                <div id="edu">
                    <h3>ACADEMICS:</h3>
                    <table>
                        <tr>
                            <th>Course</th>
                            <th>University</th>
                            <th>Result</th>
                            <th>Passout Year</th>
                        </tr>';                            
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
                            $html .='<tr>
                                        <td>'.$course[$i].'</td>
                                        <td>'.$university[$i].'</td>
                                        <td>'.$result[$i].'</td>
                                        <td>'.$passout[$i].'</td>
                                    </tr>';
                            }
                $html .='</table>
                </div>

                <div>
                    <h3>PROJECT WORK:</h3>
                    <table>
                        <tr>
                            <td>Title</td>
                            <td>: '.$_POST['title'].'</td>
                        </tr>
                        <tr>
                            <td>Team Size</td>
                            <td>: '.$_POST['team'].'</td>
                        </tr>
                    </table>
                </div>

                <div>
                    <h4>PROJECT DESCRIPTION:</h4>
                    <p>'.$_POST['desp'].'</p>
                </div>

                <div>
                    <h3>CURRICULAR ACTIVITIES:</h3>
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
                <div>
                    <h3>PERSONAL DETAILS:</h3>
                    <table>
                        <tr><td>Full Name</td><td>: '.$_POST['fname'].' '.$_POST['lname'].'</td></tr>
                        <tr><td>Date of Birth</td><td>: '.$_POST['bday'].'</td></tr>
                        <tr><td>Gender</td><td>: '.$_POST['gender'].'</td></tr>
                        <tr><td>Language Known</td><td>: '.$_POST['languages'].'</td></tr>
                        <tr><td>Permanent Address</td><td>: '.$_POST['paddress'].'</a></td></tr>
                    </table>
                </div>
                <div>
                    <h3>DECLARATION:</h3>
                    <p>'.$_POST['declaration'].'</p>
                </div>
            </div>';
    require_once "dompdf/autoload.inc.php";
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Resume", array("Attachment"=>0));
?>