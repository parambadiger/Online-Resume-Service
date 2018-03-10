<head>
    <meta charset="utf-8">
    <title>Download Your Resume</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../resumepdf/css/resume2.css">
</head>
<?php
        $fname=$_GET['fname'];
        $lname=$_GET['lname'];
        $con = @mysql_connect("localhost", "root", "") or die("Failed to connect to MySql.");
        mysql_select_db("resume", $con) or die("Failed to connect to database");

        $sql="SELECT * FROM resume_form WHERE fname='$fname' and lname='$lname'";
        $result = mysql_query($sql) or die(mysql_error());
        while ($row = mysql_fetch_array($result))
        {
    $html ='<header>
        <h2>RESUME</h2>
        <p><strong>Contact No: </strong>'.$row['pnum'].' / <strong>Gmail Id: </strong>'.$row['gid'].'</p>
    </header>
    <section>
    <div id="part1">
        <div>       
            <h3>OBJECTIVEES:</h3>
            <p>'.$row['objective'].'</p>
        </div>
        <div>        
            <h3>SUMMURY OF SKILLS:</h3>
            <ul>';
            $summury=explode('&& ', $row['summury']);
                            $summury=array_filter($summury);
                            foreach($summury as $s ) {
                                $html .= '<li>'.$s.'</li>';
                            }
            $html .='</ul>
        </div>
        <div>
            <h3>CAREER ACTIVITIES:</h3>
            <ul>';
            $activities=explode('&& ', $row['activities']);
            $activities=array_filter($activities);
            foreach($activities as $a ) {
                $html .= '<li>'.$a.'</li>';
            }
            $html .= '</ul>
        </div>
        <div>
            <h3>STRENGTH:</h3>
            <ul>';
            $strength=explode('&& ', $row['strength']);
            $strength=array_filter($strength);
            foreach($strength as $s ) {
                $html .= '<li>'.$s.'</li>';
            }
    $html .= '</ul>
        </div>
    </div>
    <div id="part2">          
        <h3>TECHNICAL SKILLS:</h3>
        <table>
            <tr><td>Web Skills</td><td>'.$row['skill'].'</td></tr>
            <tr><td>Web Tools</td><td>'.$row['tool'].'</td></tr>
            <tr><td>Database</td><td>'.$row['db'].'</td></tr>
            <tr><td>Operating System</td><td>'.$row['sos'].'</td></tr>
        </table>

        <h3>ACADEMICS:</h3>
        <ul>';
        $course=explode('&& ', $row['course']);
                    $university=explode('&& ', $row['university']);
                    $result=explode('&& ', $row['result']);
                    $passout=explode('&& ', $row['passout']);
        $passout=array_filter($passout); 
        $count=sizeof($passout);
        for($i=0;$i<$count;$i++){
            $html .='<li>'.$course[$i].' from '.$university[$i].' with '.$result[$i].'% Rsult in '.$passout[$i].'</li>';
            }
        $html .='</ul>

        <h3>ACADEMICS PROJECT:</h3>
        <table>
            <tr><td>Title</td><td>'.$row['title'].'</td></tr>
            <tr><td>Technologies Used</td><td>'.$row['tech'].'</td></tr>
            <tr><td>Server</td><td>'.$row['srvr'].'</td></tr>
            <tr><td>Operating System</td><td>'.$row['pos'].'</td></tr>
            <tr><td>Team Size</td><td>'.$row['team'].'</td></tr>
        </table>
        <h4>PROJECT DESCRIPTION:</h4>
            <p>'.$row['desp'].'</p>

        <h3>PERSONAL DETAILS:</h3>
        <table>
                <tr><td>Full Name</td><td>'.$row['fname'].' '.$row['lname'].'</td></tr>
                <tr><td>Date of Birth</td><td>'.$row['bday'].'</td></tr>
                <tr><td>Gender</td><td>'.$row['gender'].'</td></tr>
                <tr><td>Marital Status</td><td>'.$row['marital'].'</td></tr>
                <tr><td>Languages Known</td><td>'.$row['languages'].'</td></tr>
                <tr><td>Permanent Address</td><td>'.$row['paddress'].'</td></tr>
                <tr><td>Current Address</td><td>'.$row['caddress'].'</td></tr>
        </table>
    
    </div>
    </section>';
        }
    require_once "dompdf/autoload.inc.php";
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Resume", array("Attachment"=>0));
?>