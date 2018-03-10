<?php
require 'header.php';
?>
<title>About Us</title>
<style>
#welcome{
	transform: translateY(-100vh);
	transition: all 1.5s linear;
}
#abt{
	opacity: 0;
	transition: all 1.5s linear;
}
#welcome.active{
	transform: translateY(0);
}
#abt.active{
	opacity: 1;
}
</style>
<div class="container" id="abt">
<section id="about_section">
	<div id="demo" class="profilecard">
		<img src="img/paramanand.jpg" class="img-thumbnail img-circle img-responsive" id="welcome">
		<hr>
		<h2>Mr.Paramanand</h2>
		<h4>Freelance Web Developer</h4>
		<p>B.Sc(Computer Science) from Karnataka Science College, Dharwad in 2017</p>
		<p>Bengaluru, Karnataka, India</p>
		<hr>
		<div id="card">
			<div><a href="https://www.facebook.com/paramanand.badiger.90"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i><br>Facebook</a></div>
			<div><a href="https://www.linkedin.com/in/paramanand-badiger-567020139"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i><br>LinkedIn</a></div>
			<div><a href="https://plus.google.com/109183252985709522178"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i><br>Google+</a></div>
			<div><a href="https://twitter.com/paramanandbadig?s=09"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i><br>Twitter</a></div>
			<div><a href="tel:+918792631798"><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i><br>Phone</a></div>
			<div><a href="mailto:parameshbadiger245@gmail.com"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i><br>Gmail</a></div>
		</div>
	</div>
</section>
</div>
<script>
$(document).ready(function(){
	$('#welcome').addClass('active');
	$('#abt').addClass('active');
});
</script>