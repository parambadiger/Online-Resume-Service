<?php
require 'header.php';
?>
<?php
        $fname=$_GET['fname'];
        $lname=$_GET['lname'];
        $gender=$_GET['gender'];
        $link = 'http://localhost/OnlineResumeService/resumelink_2/view.php?fname='.$fname.'&lname='.$lname;
        $pdf = 'linkdownload.php?fname='.$fname.'&lname='.$lname;
?>

<title>download your resume link</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .container{
      text-align: center;
      border: 2px solid #ddd;
      padding: 3rem;
    }
    #group{
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-gap: 2rem;
    }
    #myInput{
      grid-column: span 3;
    }
</style>
<div class="container">
    <?php
    if($gender == 'Male'){
      echo '<h1>Hello....! Mr.'.$fname.'</h1>';
    }else{
      echo '<h1>Hello....! Miss.'.$fname.'</h1>';
    }
    ?>
    <h3>Your Online Resume Created Successfuly</h3>
    <p>Your resume link given below.</p>
    <div id="group">
        <input type="text" value="<?php echo $link ?>" id="myInput" class="form-control">
        <button class="btn btn-info form-control" onclick="myFunction()">Copy link</button>
        <a href="<?php echo $link ?>" target="_BLANK"><button class="btn btn-info form-control">View</button></a>
        <a href="<?php echo $pdf ?>"><button class="btn btn-info form-control">Download link</button></a>
    </div>
</div>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("Copy");
  alert("Copied the text: " + copyText.value);
}
</script>