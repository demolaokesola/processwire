<?php
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup 
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_header.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
?>

<section class="service-two service-two__service-page service-two__about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="service-two__image">
					<img src="<?php echo $config->urls->templates ?>assets/images/resources/about-page-moc-1.png" alt="">
				</div><!-- /.service-two__image -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="service-two__block">
					<div class="block-title-two text-left">
						<p>Consectetur adipisicing elit</p>
						<h3>Ut enim ad minim <br> nostrud exercitation</h3>
					</div><!-- /.block-title-two -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem
						por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
					<ul class="list-unstyled video-one__list">
						<li>
							<i class="far fa-check"></i>
							In auctor sed eros id rhoncus
						</li>
						<li>
							<i class="far fa-check"></i>
							Phasellus a lorem ut metus hendrerit rutrum
						</li>
						<li>
							<i class="far fa-check"></i>
							Donec porttitor semper maximus.
						</li>
						<li>
							<i class="far fa-check"></i>
							Quisque suscipit scelerisque magna
						</li>
					</ul><!-- /.list-unstyled video-one__list -->

					<a href="#" class="thm-btn">Read More <i class="fa fa-angle-double-right"></i></a>
					<!-- /.thm-btn -->
				</div><!-- /.service-two__block -->
			</div><!-- /.col-lg-5 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.service-two -->



<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup 
?>