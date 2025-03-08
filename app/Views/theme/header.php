<!DOCTYPE html>
<html lang="en">


<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo esc($title); ?></title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/theme/img/favicon.png'); ?>">

	<!-- Custom CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/theme/css/styles.css'); ?>" rel="stylesheet">

</head>

<body>

	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader"></div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<div class="header header-light dark-text">
			<div class="container">
				<nav id="navigation" class="navigation navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand" href="#">
							<img src="<?php echo base_url('assets/theme/img/logo.png'); ?>" class="logo" alt="" />
						</a>
						<div class="nav-toggle"></div>
						<div class="mobile_nav">
							<ul>
								<li>
									<a href="#" data-bs-toggle="modal" data-bs-target="#login" class="theme-cl fs-lg">
										<i class="lni lni-user"></i>
									</a>
								</li>
								<li>
									<a href="add-listing" class="crs_yuo12 w-auto text-white theme-bg">
										<span class="embos_45"><i class="fas fa-plus me-2"></i>Add Listing</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="nav-menus-wrapper" style="transition-property: none;">
						<ul class="nav-menu">

							<li class="active">
								<a href="<?php echo base_url(); ?>">Home</a>
							</li>

							<li>
								<a href="<?php echo base_url('about-us'); ?>">About Us</a>
							</li>

							<li>
								<a href="business-list">Business List</a>
							</li>

							<li>
								<a href="#">Blog</a>
							</li>
							<li>
								<a href="#">Adverdising</a>
							</li>
							<li>
								<a href="#">Contact Us</a>
							</li>

						</ul>

						<ul class="nav-menu nav-menu-social align-to-right">
							<!-- <li>
								<a href="#" data-bs-toggle="modal" data-bs-target="#login" class="ft-bold">
									<i class="fas fa-sign-in-alt me-1 theme-cl"></i>Sign In
								</a>
							</li> -->
							<li>
								<a href="login"class="ft-bold">
									<i class="fas fa-sign-in-alt me-1 theme-cl"></i>Sign In
								</a>
							</li>
							<li class="add-listing">
								<a href="add-listing">
									<i class="fas fa-plus me-2"></i>Add Listing
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
