<?php
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup 
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_header.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
?>


<section class="contact-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="contact-two__content">
					<div class="contact-two__block">
						<h4>Don't Hesitate To Contact Us</h4>
						<p>Sed ut perspiciatis unde omnis iste natus erro voluptat accusantium doloremque laudantium
							totam rem aperiam eaque</p>
					</div><!-- /.contact-two__block -->
					<ul class="list-unstyled contact-two__info-list">
						<li>
							<div class="contact-two__info-list-title">
								<i class="far fa-map-marked"></i>
								Address :
							</div><!-- /.contact-two__info-list-title -->
							<p>27 Division St, New York, <br>NY 10002,USA</p>
						</li>
						<li>
							<div class="contact-two__info-list-title">
								<i class="far fa-phone"></i>
								Call Us :
							</div><!-- /.contact-two__info-list-title -->
							<p><a href="tel:08964712365">08964712365</a></p>
						</li>
						<li>
							<div class="contact-two__info-list-title">
								<i class="far fa-envelope"></i>
								Email Us :
							</div><!-- /.contact-two__info-list-title -->
							<p><a href="mailto:support@gmail.com">support@gmail.com</a></p>
						</li>
					</ul><!-- /.contact-two__info-list -->
				</div><!-- /.contact-two__content -->
			</div><!-- /.col-lg-5 -->
			<div class="col-lg-7">
				<form action="#" class="contact-two__form">
					<div class="contact-two__block">
						<h3>Get In Touch</h3>
						<p>Sed ut perspiciatis unde omnis iste natus erro voluptat accusantium <br>doloremque laudantium
							totam rem aperiam eaque</p>
					</div><!-- /.contact-two__block -->
					<div class="row">
						<div class="col-md-6">
							<input type="text" placeholder="Full Name">
						</div><!-- /.col-md-6 -->
						<div class="col-md-6">
							<input type="text" placeholder="Email Address">
						</div><!-- /.col-md-6 -->
						<div class="col-md-12">
							<input type="text" placeholder="Subject">
						</div><!-- /.col-md-12 -->
						<div class="col-md-12">
							<textarea name="message" placeholder="Message"></textarea>
							<button type="submit" class="thm-btn contact-two__btn">Send Message <i class="fa fa-angle-double-right"></i></button><!-- /.thm-btn contact-two__btn -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</form><!-- /.contact-two__form -->
			</div><!-- /.col-lg-7 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.contact-two -->


<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup 
?>