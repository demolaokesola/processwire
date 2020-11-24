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

		<header class="site-header-two site-header-two__">
			<nav class="main-nav__two stricky">
				<div class="container">
					<div class="main-nav__logo-box">
						<a href="<?php echo $pages->get('/'); ?>">
							<img src="<?php echo $config->urls->templates ?>assets/images/logo-dark.png" alt="">
						</a>
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
					<div class="main-nav__right d-md-none">
						<a href="#" class="side-menu__toggler"><span></span></a>
						<!-- /.thm-btn -->
					</div><!-- /.main-nav__right -->
				</div><!-- /.container-fluid -->
			</nav><!-- /.main-nav__one -->

		</header><!-- /.site-header-one -->

		<section class="page-header" style="background-image: url(<?php echo $config->urls->templates ?>assets/images/backgrounds/page-header-bg-1-1.jpg);">
			<div class="container">
				<h2>About Us</h2>
				<ul class="list-unstyled thm-breadcrumb">
					<li><a href="#">Home</a></li>
					<li><span>About Us</span></li>
				</ul><!-- /.list-unstyled thm-breadcrumb -->
			</div><!-- /.container -->
		</section><!-- /.page-header -->