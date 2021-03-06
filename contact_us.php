<?php 
session_start();
include('header.php');
?>
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/header6.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">Contact Us</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	

		<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">500 Dover Road Singapore 139651</li>
							<li class="phone"><a href="tel://92345678">+65 92345678</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">animaroo@info.com</a></li>
							<li class="url"><a href="http://gettemplates.co">www.animaroo.com</a></li>
						</ul>
						

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.77570670896!2d103.7753119141033!3d1.3098821620690304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1a602ff17c15%3A0xa9545dd23993859e!2sSingapore+Polytechnic!5e0!3m2!1sen!2ssg!4v1532056198254" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form class="form-contact" method="POST" action="contact_us_confirmed.php">

							<div class="form-group">
								<label>Name</label>
								<input type="name" name="name" id="inputName" class="form-control" placeholder="Name" required>
							</div>
	
							<div class="form-group">
								<label>E-Mail</label>
								<input type="email" name="email" id="inputEmail" class="form-control" placeholder="johnappleseed@apple.com" required>
							</div>
	
							<div class="form-group">
								<label>Subject</label>
								<input type="name" name="subject" id="inputSubject" class="form-control" placeholder="Subject Line" required>
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea name="message" class="form-control" id="inputMessage" rows="3"></textarea>
							</div>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
					</form>	
				</div>
			</div>
			
		</div>
	</div>


<?php
include('footer.php');
?>