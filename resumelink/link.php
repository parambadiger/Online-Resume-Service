<?php
	$host='localhost';
    $user='root';
    $pass='';
    $db='resume'; 
    $con=mysqli_connect($host,$user,$pass,$db) or die(mysql_error());

    $objective = $_POST['objective'];
    $course = $_POST['course'];
    $allcourse='';
    foreach($course as $c ) {
		$allcourse .= $c.'&& '; 
	}
    $university = $_POST['university'];
    $alluniversity='';
    foreach($university as $u ) {
		$alluniversity .= $u.'&& '; 
	}
    $result = $_POST['result'];
    $allresult='';
    foreach($result as $r ) {
		$allresult .= $r.'&& '; 
	}
    $passout = $_POST['passout'];
    $allpassout='';
    foreach($passout as $p ) {
		$allpassout .= $p.'&& '; 
	}
    $summury = $_POST['summury'];
    $allsummury='';
    foreach($summury as $s ) {
		$allsummury .= $s.'&& '; 
	}
    $skill = $_POST['skill'];
    $tool = $_POST['tool'];
    $db = $_POST['db'];
    $sos = $_POST['sos'];
    $title = $_POST['title'];
    $srvr = $_POST['srvr'];
    $pos = $_POST['pos'];
    $team = $_POST['team'];
    $tech = $_POST['tech'];
    $desp = $_POST['desp'];
    $activities = $_POST['activities'];
    $allactivities='';
    foreach($activities as $a ) {
		$allactivities .= $a.'&& '; 
	}
    $strength = $_POST['strength'];
    $allstrength='';
    foreach($strength as $s ) {
		$allstrength .= $s.'&& '; 
	}
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $bday = $_POST['bday'];
    $gender = $_POST['gender'];
    $pnum = $_POST['pnum'];
    $gid = $_POST['gid'];
    $caddress = $_POST['caddress'];
    $paddress = $_POST['paddress'];
    $languages = $_POST['languages'];
    $marital = $_POST['marital'];
    $facebook = $_POST['facebook'];  
    $linkedin = $_POST['linkedin'];
    $twitter = $_POST['twitter'];
    $googleplus = $_POST['googleplus'];         
    $photo = $_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"],"img/".$photo);            

    $sql="INSERT INTO `resume_form`(`id`, `objective`, `course`, `university`, `result`, `passout`, `summury`, `skill`, `tool`, `db`, `sos`, `title`, `srvr`, `pos`, `team`, `tech`, `desp`, `activities`, `strength`, `fname`, `lname`, `bday`, `gender`, `pnum`, `gid`, `caddress`, `paddress`, `languages`, `marital`, `facebook`, `linkedin`, `twitter`, `googleplus`, `photo`) 
    VALUES (NULL,'$objective','$allcourse','$alluniversity','$allresult','$allpassout','$allsummury','$skill','$tool','$db','$sos','$title','$srvr','$pos','$team','$tech','$desp','$allactivities','$allstrength','$fname','$lname','$bday','$gender','$pnum','$gid','$caddress','$paddress','$languages','$marital','$facebook','$linkedin','$twitter','$googleplus','$photo')";
    $query=mysqli_query($con,$sql); 
  
    header('location:linkpdf.php?fname='.$fname.'&lname='.$lname.'&gender='.$gender.'');
?>
