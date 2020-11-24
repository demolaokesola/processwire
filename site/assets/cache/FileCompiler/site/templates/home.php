<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $page->title; ?></title>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->urls->templates ?>assets/images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config->urls->templates ?>assets/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config->urls->templates ?>assets/images/favicons/favicon-16x16.png">
	<meta name="description" content="<?php echo $page->summary; ?>" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/gilroy-extrabold.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/gilroy-light.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/gilroy-semibold.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/gilroy-bold.css">

	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/bootstrap-datepicker.min.css">

	<!-- template styles -->
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates ?>assets/css/responsive.css">

</head>

<body>
	<div class="page-wrapper">

		<header class="site-header-one">
			<nav class="main-nav__one stricky">
				<div class="container-fluid">
					<div class="main-nav__logo-box">
						<a href="index.html">
							<img src="<?php echo $config->urls->templates ?>assets/images/logo-full-light.png" alt="">
						</a>
						<a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i></a>
					</div><!-- /.main-nav__logo-box -->
					<div class="main-nav__main-navigation">
						<ul class=" main-nav__navigation-box">
							<?php
							// top navigation consists of homepage and its visible children
							$homepage = $pages->get('/');
							$children = $homepage->children();

							// make 'home' the first item in the navigation
							$children->prepend($homepage);

							// render an <li> for each top navigation item
							foreach ($children as $child) {
								if ($child->hasChildren() < 1 || $child->id == 1) {
									if ($child->id == $page->rootParent->id) {
										// this $child page is currently being viewed (or one of it's children/descendents)
										// so we highlight it as the current page in the navigation
										echo "<li class='active' aria-current='true'><a href='$child->url'>$child->title</a></li>";
									} else {
										echo "<li><a href='$child->url'>$child->title</a></li>";
									}
								} else {
									$grandchildren = $child->children;
									echo "<li class='dropdown'><a href='$child->url'>$child->title</a><ul>";
									foreach ($grandchildren as $grandchild) {
										if ($grandchild->id == $page->rootParent->id) {
											// this $child page is currently being viewed (or one of it's children/descendents)
											// so we highlight it as the current page in the navigation
											echo "<li class='active' aria-current='true'><a href='$grandchild->url'>$grandchild->title</a></li>";
										} else {
											echo "<li><a href='$grandchild->url'>$grandchild->title</a></li>";
										}
									}
									echo "</ul></li>";
								}
							}

							// output an "Edit" link if this page happens to be editable by the current user
							if ($page->editable()) {
								echo "<li class='edit'><a href='$page->editUrl'>Edit</a></li>";
							}

							?>
						</ul>
					</div><!-- /.main-nav__main-navigation -->
					<div class="main-nav__right">
						<a href="tel:+812-456-789-99" class="main-nav__phone"><i class="far fa-phone"></i>+812 456 789 99</a>
						<a href="contact.html" class="thm-btn">Free Trial <i class="fa fa-angle-right"></i></a>
						<!-- /.thm-btn -->
					</div><!-- /.main-nav__right -->
				</div><!-- /.container-fluid -->
			</nav><!-- /.main-nav__one -->

		</header><!-- /.site-header-one -->

		<section class="banner-one" style="background-image: url(<?php echo $config->urls->templates ?>assets/images/backgrounds/banner-bg-1-1.png);">
			<img src="<?php echo $config->urls->templates ?>assets/images/resources/banner-1-1.png" alt="" class="banner-one__moc">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="banner-one__content">
							<h3><span>Discover New </span> <br>Idea To Build <br> Your <em>Business</em></h3>
							<p>We are professional & Experiene Digital Agency</p>
							<a href="#" class="thm-btn banner-one__btn">Discover Now <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn -->
						</div><!-- /.banner-one__content -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</section><!-- /.banner-one -->

		<section class="about-one">
			<div class="container">
				<img src="<?php echo $config->urls->templates ?>assets/images/resources/cta-1-1.png" alt="" class="about-one__moc">
				<div class="row justify-content-end">
					<div class="col-lg-6">
						<div class="about-one__content">
							<div class="block-title text-left">
								<p><span>About Us</span></p>
								<h3>We Are Specialized In <br> Business Soluation</h3>
								<div class="block-title__line"></div><!-- /.block-title__line -->
							</div><!-- /.block-title -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid dunt
								utlabore et dolore magna aliqua. Ut enim ad minim veniam weay.</p>
							<h4>We Are Always With You</h4>
							<p>But we must be dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
								labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
								laboris nisi ut aliquip exea commodo consequat</p>
							<a href="$" class="thm-btn about-one__btn">Read More <i class="fa fa-angle-double-right"></i></a>
							<!-- /.thm-btn -->
						</div><!-- /.about-one__content -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.about-one -->

		<section class="about-two">
			<img src="<?php echo $config->urls->templates ?>assets/images/shapes/about-two-bg.png" alt="" class="about-two__bg">
			<div class="container">
				<img src="<?php echo $config->urls->templates ?>assets/images/resources/cta-2-1.png" alt="" class="about-two__moc">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-two__content">
							<div class="block-title text-left">
								<p><span>What We Do</span></p>
								<h3>We Offer Best Soluation <br> For Your Business</h3>
								<div class="block-title__line"></div><!-- /.block-title__line -->
							</div><!-- /.block-title -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incid idunt ut labore
								et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerc itation ullamco laboris nisi
								ut aliquip exea commodo consequat.</p>
							<div class="about-two__box">
								<div class="about-two__box-icon">
									<i class="far fa-leaf"></i>
								</div><!-- /.about-two__box-icon -->
								<div class="about-two__box-content">
									<h3>Manage Your Project</h3>
									<p>Consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam</p>
								</div><!-- /.about-two__box-content -->
							</div><!-- /.about-two__box -->
							<div class="about-two__box">
								<div class="about-two__box-icon">
									<i class="far fa-laptop-code"></i>
								</div><!-- /.about-two__box-icon -->
								<div class="about-two__box-content">
									<h3>Business & Data Analytics</h3>
									<p>Consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam</p>
								</div><!-- /.about-two__box-content -->
							</div><!-- /.about-two__box -->
						</div><!-- /.about-two__content -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.about-two -->

		<section class="team-one">
			<div class="container">
				<div class="block-title text-center">
					<p><span>Our Team</span></p>
					<h3>Meet Our Exclusive <br> Team Member</h3>
					<div class="block-title__line"></div><!-- /.block-title__line -->
				</div><!-- /.block-title -->
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="team-one__single">
							<div class="team-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/team/team-1-1.jpg" alt="">
							</div><!-- /.team-one__image -->
							<div class="team-one__content">
								<div class="team-one__social">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-behance"></i></a>
								</div><!-- /.team-one__social -->
								<h3>Ricardo Torres</h3>
								<p>Web designer</p>
							</div><!-- /.team-one__content -->
						</div><!-- /.team-one__single -->
					</div><!-- /.col-lg-3 -->
					<div class="col-lg-3 col-md-6">
						<div class="team-one__single">
							<div class="team-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/team/team-1-2.jpg" alt="">
							</div><!-- /.team-one__image -->
							<div class="team-one__content">
								<div class="team-one__social">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-behance"></i></a>
								</div><!-- /.team-one__social -->
								<h3>Paul Sanchez</h3>
								<p>Web designer</p>
							</div><!-- /.team-one__content -->
						</div><!-- /.team-one__single -->
					</div><!-- /.col-lg-3 -->
					<div class="col-lg-3 col-md-6">
						<div class="team-one__single">
							<div class="team-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/team/team-1-3.jpg" alt="">
							</div><!-- /.team-one__image -->
							<div class="team-one__content">
								<div class="team-one__social">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-behance"></i></a>
								</div><!-- /.team-one__social -->
								<h3>Herbert Waters</h3>
								<p>Web designer</p>
							</div><!-- /.team-one__content -->
						</div><!-- /.team-one__single -->
					</div><!-- /.col-lg-3 -->
					<div class="col-lg-3 col-md-6">
						<div class="team-one__single">
							<div class="team-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/team/team-1-4.jpg" alt="">
							</div><!-- /.team-one__image -->
							<div class="team-one__content">
								<div class="team-one__social">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-behance"></i></a>
								</div><!-- /.team-one__social -->
								<h3>Jeremy Harrington</h3>
								<p>Web designer</p>
							</div><!-- /.team-one__content -->
						</div><!-- /.team-one__single -->
					</div><!-- /.col-lg-3 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.team-one -->

		<section class="testimonials-one">
			<div class="container">
				<div class="testimonials-one__top">
					<div class="block-title text-left">
						<p><span>Clients Say</span></p>
						<h3>know Everything About <br> Professional Skills</h3>
						<div class="block-title__line"></div><!-- /.block-title__line -->
					</div><!-- /.block-title -->
					<div class="testimonials-one__carousel-btn__wrap">
						<a href="#" class="testimonials-one__carousel-btn-left"><i class="fa fa-angle-double-left"></i></a>
						<a href="#" class="testimonials-one__carousel-btn-right"><i class="fa fa-angle-double-right"></i></a>
					</div><!-- /.testimonials-one__carousel-btn__wrap -->
				</div><!-- /.testimonials-one__top -->

				<div class="testimonials-one__arrow-decor-wrap">
					<i class="fa fa-angle-right"></i>
					<i class="fa fa-angle-right"></i>
					<i class="fa fa-angle-right"></i>
					<i class="fa fa-angle-right"></i>
				</div><!-- /.testimonials-one__arrow-decor-wrap -->

				<div class="testimonials-one__carousel owl-carousel thm__owl-carousel owl-theme" data-carousel-prev-btn=".testimonials-one__carousel-btn-left" data-carousel-next-btn=".testimonials-one__carousel-btn-right" data-options='{"loop": true, "margin": 65, "stagePadding": 50, "items": 3, "smartSpeed": 700, "autoplay": true, "autoplayTimeout": 7000, "nav": false, "dots": false, "responsive": { "0": { "items": 1, "stagePadding": 20 }, "1199": { "items": 2 }, "1200": { "items": 3 } }}'>
					<div class="item">
						<div class="testimonials-one__single">
							<div class="testimonials-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/testimonials/testimonial-1-1.jpg" alt="">
							</div><!-- /.testimonials-one__image -->
							<div class="testimonials-one__content">
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiumod tempor incididunt ut
									labore e dolore magna aliqua. Ut enim ad miveniam quis nostrud exercitation</p>
								<h3>Pearl Campbell</h3>
								<span>CEO & Founder</span>
								<i class="fa fa-quote-right testimonials-one__qoute-icon"></i>
							</div><!-- /.testimonials-one__content -->
						</div><!-- /.testimonials-one__single -->
					</div><!-- /.item -->
					<div class="item">
						<div class="testimonials-one__single">
							<div class="testimonials-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/testimonials/testimonial-1-2.jpg" alt="">
							</div><!-- /.testimonials-one__image -->
							<div class="testimonials-one__content">
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiumod tempor incididunt ut
									labore e dolore magna aliqua. Ut enim ad miveniam quis nostrud exercitation</p>
								<h3>Landon Anderson</h3>
								<span>CEO & Founder</span>
								<i class="fa fa-quote-right testimonials-one__qoute-icon"></i>
							</div><!-- /.testimonials-one__content -->
						</div><!-- /.testimonials-one__single -->
					</div><!-- /.item -->
					<div class="item">
						<div class="testimonials-one__single">
							<div class="testimonials-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/testimonials/testimonial-1-3.jpg" alt="">
							</div><!-- /.testimonials-one__image -->
							<div class="testimonials-one__content">
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiumod tempor incididunt ut
									labore e dolore magna aliqua. Ut enim ad miveniam quis nostrud exercitation</p>
								<h3>Daniel Howell</h3>
								<span>CEO & Founder</span>
								<i class="fa fa-quote-right testimonials-one__qoute-icon"></i>
							</div><!-- /.testimonials-one__content -->
						</div><!-- /.testimonials-one__single -->
					</div><!-- /.item -->
					<div class="item">
						<div class="testimonials-one__single">
							<div class="testimonials-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/testimonials/testimonial-1-1.jpg" alt="">
							</div><!-- /.testimonials-one__image -->
							<div class="testimonials-one__content">
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiumod tempor incididunt ut
									labore e dolore magna aliqua. Ut enim ad miveniam quis nostrud exercitation</p>
								<h3>Jay Houston</h3>
								<span>CEO & Founder</span>
								<i class="fa fa-quote-right testimonials-one__qoute-icon"></i>
							</div><!-- /.testimonials-one__content -->
						</div><!-- /.testimonials-one__single -->
					</div><!-- /.item -->
					<div class="item">
						<div class="testimonials-one__single">
							<div class="testimonials-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/testimonials/testimonial-1-2.jpg" alt="">
							</div><!-- /.testimonials-one__image -->
							<div class="testimonials-one__content">
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiumod tempor incididunt ut
									labore e dolore magna aliqua. Ut enim ad miveniam quis nostrud exercitation</p>
								<h3>Austin Houston</h3>
								<span>CEO & Founder</span>
								<i class="fa fa-quote-right testimonials-one__qoute-icon"></i>
							</div><!-- /.testimonials-one__content -->
						</div><!-- /.testimonials-one__single -->
					</div><!-- /.item -->
					<div class="item">
						<div class="testimonials-one__single">
							<div class="testimonials-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/testimonials/testimonial-1-3.jpg" alt="">
							</div><!-- /.testimonials-one__image -->
							<div class="testimonials-one__content">
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiumod tempor incididunt ut
									labore e dolore magna aliqua. Ut enim ad miveniam quis nostrud exercitation</p>
								<h3>Myrtie Wise</h3>
								<span>CEO & Founder</span>
								<i class="fa fa-quote-right testimonials-one__qoute-icon"></i>
							</div><!-- /.testimonials-one__content -->
						</div><!-- /.testimonials-one__single -->
					</div><!-- /.item -->
					<div class="item">
						<div class="testimonials-one__single">
							<div class="testimonials-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/testimonials/testimonial-1-1.jpg" alt="">
							</div><!-- /.testimonials-one__image -->
							<div class="testimonials-one__content">
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiumod tempor incididunt ut
									labore e dolore magna aliqua. Ut enim ad miveniam quis nostrud exercitation</p>
								<h3>Ronald Sharp</h3>
								<span>CEO & Founder</span>
								<i class="fa fa-quote-right testimonials-one__qoute-icon"></i>
							</div><!-- /.testimonials-one__content -->
						</div><!-- /.testimonials-one__single -->
					</div><!-- /.item -->
					<div class="item">
						<div class="testimonials-one__single">
							<div class="testimonials-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/testimonials/testimonial-1-2.jpg" alt="">
							</div><!-- /.testimonials-one__image -->
							<div class="testimonials-one__content">
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiumod tempor incididunt ut
									labore e dolore magna aliqua. Ut enim ad miveniam quis nostrud exercitation</p>
								<h3>Sophia Zimmerman</h3>
								<span>CEO & Founder</span>
								<i class="fa fa-quote-right testimonials-one__qoute-icon"></i>
							</div><!-- /.testimonials-one__content -->
						</div><!-- /.testimonials-one__single -->
					</div><!-- /.item -->
					<div class="item">
						<div class="testimonials-one__single">
							<div class="testimonials-one__image">
								<img src="<?php echo $config->urls->templates ?>assets/images/testimonials/testimonial-1-3.jpg" alt="">
							</div><!-- /.testimonials-one__image -->
							<div class="testimonials-one__content">
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiumod tempor incididunt ut
									labore e dolore magna aliqua. Ut enim ad miveniam quis nostrud exercitation</p>
								<h3>Chester Ortiz</h3>
								<span>CEO & Founder</span>
								<i class="fa fa-quote-right testimonials-one__qoute-icon"></i>
							</div><!-- /.testimonials-one__content -->
						</div><!-- /.testimonials-one__single -->
					</div><!-- /.item -->
				</div><!-- /.testimonials-one__carousel owl-carousel thm__owl-carousel owl-theme -->
			</div><!-- /.container -->
		</section><!-- /.testimonials-one -->

		<section class="cta-one">
			<div class="container">
				<div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
					<div class="cta-one__left">
						<h3>Build Your Business</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
					</div><!-- /.cta-one__left -->
					<div class="cta-one__right">
						<a href="#" class="thm-btn cta-one__btn">Contact Us <i class="fa fa-angle-double-right"></i></a>
						<!-- /.thm-btn cta-one__btn -->
					</div><!-- /.cta-one__right -->
				</div><!-- /.inner-container -->
			</div><!-- /.container -->
		</section><!-- /.cta-one -->

		<section class="blog-one">
			<div class="container-fluid">
				<div class="blog-one__left">
					<div class="block-title text-left">
						<p><span>Our Blog</span></p>
						<h3>Reads Our Latest <br> News & Blog</h3>
						<div class="block-title__line"></div><!-- /.block-title__line -->
					</div><!-- /.block-title -->
					<p>But we ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
					<div class="blog-one__carousel-btn__wrap">
						<a href="#" class="blog-one__carousel-btn-left"><i class="fa fa-angle-double-left"></i></a>
						<a href="#" class="blog-one__carousel-btn-right"><i class="fa fa-angle-double-right"></i></a>
					</div><!-- /.blog-one__carousel-btn__wrap -->
				</div><!-- /.blog-one__left -->
				<div class="blog-one__right">
					<div class="blog-one__carousel owl-carousel owl-theme thm__owl-carousel" data-carousel-prev-btn=".blog-one__carousel-btn-left" data-carousel-next-btn=".blog-one__carousel-btn-right" data-options='{"loop": true, "margin": 30, "stagePadding": 0, "items": 3, "smartSpeed": 700, "autoplay": true, "autoplayTimeout": 7000, "nav": false, "dots": false, "responsive": { "0": { "items": 1 }, "991": { "items": 2 }, "1200": { "items": 3 } }}'>
						<div class="item">
							<div class="blog-one__single">
								<div class="blog-one__image">
									<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-1-1.jpg" alt="">
								</div><!-- /.blog-one__image -->
								<div class="blog-one__content">
									<div class="blog-one__author">
										<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-author-1-1.jpg" alt="">
										<p>Hakila K. Dolika</p>
									</div><!-- /.blog-one__author -->
									<h3><a href="blog-details.html">Adobe Experience Manager vs. WordPress The Authoring Expeene Compared</a></h3>
									<a href="#" class="thm-btn blog-one__btn">Read More <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn -->
								</div><!-- /.blog-one__content -->
							</div><!-- /.blog-one__single -->
						</div><!-- /.item -->
						<div class="item">
							<div class="blog-one__single">
								<div class="blog-one__image">
									<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-1-2.jpg" alt="">
								</div><!-- /.blog-one__image -->
								<div class="blog-one__content">
									<div class="blog-one__author">
										<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-author-1-2.jpg" alt="">
										<p>Hakila K. Dolika</p>
									</div><!-- /.blog-one__author -->
									<h3><a href="blog-details.html">Understanding API Based form
											Guide For Product Managers Are Programs Ways</a></h3>
									<a href="#" class="thm-btn blog-one__btn">Read More <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn -->
								</div><!-- /.blog-one__content -->
							</div><!-- /.blog-one__single -->
						</div><!-- /.item -->
						<div class="item">
							<div class="blog-one__single">
								<div class="blog-one__image">
									<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-1-3.jpg" alt="">
								</div><!-- /.blog-one__image -->
								<div class="blog-one__content">
									<div class="blog-one__author">
										<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-author-1-1.jpg" alt="">
										<p>Hakila K. Dolika</p>
									</div><!-- /.blog-one__author -->
									<h3><a href="blog-details.html">Monthly Web Development
											Update Rethinking Habits And Finding Custom Solutions</a></h3>
									<a href="#" class="thm-btn blog-one__btn">Read More <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn -->
								</div><!-- /.blog-one__content -->
							</div><!-- /.blog-one__single -->
						</div><!-- /.item -->
						<div class="item">
							<div class="blog-one__single">
								<div class="blog-one__image">
									<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-1-3.jpg" alt="">
								</div><!-- /.blog-one__image -->
								<div class="blog-one__content">
									<div class="blog-one__author">
										<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-author-1-1.jpg" alt="">
										<p>Hakila K. Dolika</p>
									</div><!-- /.blog-one__author -->
									<h3><a href="blog-details.html">Adobe Experience Manager vs. WordPress The Authoring Expeene Compared</a></h3>
									<a href="#" class="thm-btn blog-one__btn">Read More <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn -->
								</div><!-- /.blog-one__content -->
							</div><!-- /.blog-one__single -->
						</div><!-- /.item -->
						<div class="item">
							<div class="blog-one__single">
								<div class="blog-one__image">
									<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-1-2.jpg" alt="">
								</div><!-- /.blog-one__image -->
								<div class="blog-one__content">
									<div class="blog-one__author">
										<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-author-1-2.jpg" alt="">
										<p>Hakila K. Dolika</p>
									</div><!-- /.blog-one__author -->
									<h3><a href="blog-details.html">Understanding API Based form
											Guide For Product Managers Are
											Programs Ways</a></h3>
									<a href="#" class="thm-btn blog-one__btn">Read More <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn -->
								</div><!-- /.blog-one__content -->
							</div><!-- /.blog-one__single -->
						</div><!-- /.item -->
						<div class="item">
							<div class="blog-one__single">
								<div class="blog-one__image">
									<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-1-3.jpg" alt="">
								</div><!-- /.blog-one__image -->
								<div class="blog-one__content">
									<div class="blog-one__author">
										<img src="<?php echo $config->urls->templates ?>assets/images/blog/blog-author-1-1.jpg" alt="">
										<p>Hakila K. Dolika</p>
									</div><!-- /.blog-one__author -->
									<h3><a href="blog-details.html">Monthly Web Development
											Update Rethinking Habits And Finding Custom Solutions</a></h3>
									<a href="#" class="thm-btn blog-one__btn">Read More <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn -->
								</div><!-- /.blog-one__content -->
							</div><!-- /.blog-one__single -->
						</div><!-- /.item -->
					</div><!-- /.blog-one__carousel owl-carousel owl-theme thm__owl-carousel -->
				</div><!-- /.blog-one__right -->
			</div><!-- /.container-fluid -->
		</section><!-- /.blog-one -->

		<footer class="site-footer-one">
			<div class="site-footer-one__upper">
				<div class="container">
					<img src="<?php echo $config->urls->templates ?>assets/images/resources/footer-1-1.png" alt="" class="site-footer-one__upper-moc">
					<div class="row">
						<div class="col-lg-3">
							<div class="footer-widget footer-widget__about">
								<a href="index.html">
									<img src="<?php echo $config->urls->templates ?>assets/images/logo-dark.png" alt="">
								</a>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod </p>
								<form action="#" class="footer__mc-form">
									<input type="text" placeholder="Enter Your Email">
									<button type="submit"><i class="fa fa-long-arrow-alt-right"></i></button>
								</form><!-- /.footer__mc-form -->
								<div class="footer-widget__social">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-behance"></i></a>
								</div><!-- /.footer-widget__social -->
							</div><!-- /.footer-widget -->
						</div><!-- /.col-lg-3 -->
						<div class="col-lg-4">
							<div class="footer-widget footer-widget__contact">
								<h3 class="footer-widget__title">Official Address</h3><!-- /.footer-widget__title -->
								<div class="footer-widget__contact-box">
									<div class="footer-widget__contact-top">
										<i class="far fa-map-marked"></i>
										<h3>Address</h3>
									</div><!-- /.footer-widget__contact-top -->
									<p>205, Khola Street Name, New York, USA</p>
								</div><!-- /.footer-widget__contact-box -->
								<div class="footer-widget__contact-box">
									<div class="footer-widget__contact-top">
										<i class="far fa-phone"></i>
										<h3>Phone</h3>
									</div><!-- /.footer-widget__contact-top -->
									<p><a href="tel:+82-123-456-89">+82 123 456 89</a></p>
								</div><!-- /.footer-widget__contact-box -->
							</div><!-- /.footer-widget footer-widget__contact -->
						</div><!-- /.col-lg-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.site-footer-one__upper -->
			<div class="site-footer-one__bottom">
				<div class="container">
					<div class="site-footer-one__bottom-line"></div><!-- /.site-footer-one__bottom-line -->
					<p>Copy@2020 <a href="#">Bizkar</a>. All Right Reserved.Design By LayerDrops. </p>
				</div><!-- /.container -->
			</div><!-- /.site-footer-one__bottom -->
		</footer><!-- /.site-footer-one -->


	</div><!-- /.page-wrapper -->


	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


	<div class="side-menu__block">


		<div class="side-menu__block-overlay custom-cursor__overlay">
			<div class="cursor"></div>
			<div class="cursor-follower"></div>
		</div><!-- /.side-menu__block-overlay -->
		<div class="side-menu__block-inner ">
			<div class="side-menu__top justify-content-end">

				<a href="#" class="side-menu__toggler side-menu__close-btn"><img src="<?php echo $config->urls->templates ?>assets/images/shapes/close-1-1.png" alt=""></a>
			</div><!-- /.side-menu__top -->


			<nav class="mobile-nav__container">
				<!-- content is loading via js -->
			</nav>
			<div class="side-menu__sep"></div><!-- /.side-menu__sep -->
			<div class="side-menu__content">
				<p>Lorem Ipsum is simply dummy text the printing and setting industry. Lorm Ipsum has been the industry's stanard dummy text ever. </p>
				<p><a href="mailto:needhelp@bizkar.com">needhelp@bizkar.com</a> <br> <a href="tel:888-999-0000">888 999 0000</a></p>
				<div class="side-menu__social">
					<a class="fab fa-facebook-f" href="#"></a>
					<a class="fab fa-twitter" href="#"></a>
					<a class="fab fa-instagram" href="#"></a>
					<a class="fab fa-pinterest-p" href="#"></a>
				</div>
			</div><!-- /.side-menu__content -->
		</div><!-- /.side-menu__block-inner -->
	</div><!-- /.side-menu__block -->



	<div class="search-popup" style="display: none;">
		<div class="search-popup__overlay custom-cursor__overlay">
			<div class="cursor"></div>
			<div class="cursor-follower"></div>
		</div><!-- /.search-popup__overlay -->
		<div class="search-popup__inner">
			<form action="#" class="search-popup__form">
				<input type="text" name="search" placeholder="Type here to Search....">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div><!-- /.search-popup__inner -->
	</div><!-- /.search-popup -->


	<script src="<?php echo $config->urls->templates ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/waypoints.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/jquery.counterup.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/TweenMax.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/wow.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/bootstrap-select.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/bootstrap-datepicker.min.js"></script>
	<script src="<?php echo $config->urls->templates ?>assets/js/isotope.js"></script>

	<!-- template scripts -->
	<script src="<?php echo $config->urls->templates ?>assets/js/theme.js"></script>

</body>

</html>