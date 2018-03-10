<?php
require 'header.php';
?>
<title>Online Resume Service</title>
<section id="index_section">
	<div id="demo" >
		<h3>For Any Degree</h3>
		<h4>Build your resume in defferent format, download it in pdf and you can see preview of resume.</h4>
		<div id="rsmbtn">
			<div>
				<a href="resumepdf_2/index.php?file=resume"><input type="button" class="btn btn-info " value="Build Resume" id="up"></a>
				<p>Sample Resume 1</p>
				<input type="button" class="btn btn-info down" id="myBtn1" value="Preview">
			</div>
			<div>
				<a href="resumepdf_2/index.php?file=resume1"><input type="button" class="btn btn-info " value="Build Resume" id="up"></a>
				<p>Sample Resume 2</p>
				<input type="button" class="btn btn-info down" id="myBtn2" value="Preview">
			</div>
			<div>
				<a href="resumepdf_2/index.php?file=resume2"><input type="button" class="btn btn-info " value="Build Resume" id="up"></a>
				<p>Sample Resume 3</p>
				<input type="button" class="btn btn-info down" id="myBtn3" value="Preview">
			</div>
		</div>
	</div>

	<div class="modal fade" id="demo1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title">Sample Resume</h4>
				</div>

				<div class="modal-body">
				<img src="img/Resume_0.jpg"  style="width:100%;height:100%;" >
				<img src="img/Resume_1.jpg"  style="width:100%;height:100%;" >
				</div>

				<div class="modal-footer">
				<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="demo2" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title">Sample Resume</h4>
				</div>

				<div class="modal-body">
				<img src="img/Resume_2.jpg" alt="" style="width:100%;height:100%;" >
				</div>

				<div class="modal-footer">
				<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="demo3" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title">Sample Resume</h4>
				</div>

				<div class="modal-body">
				<img src="img/Resume_3.jpg" alt="" style="width:100%;height:100%;" >
				</div>

				<div class="modal-footer">
				<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</div>
		</div>
	</div>
</section>