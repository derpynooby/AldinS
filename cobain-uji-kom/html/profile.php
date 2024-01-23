<?php 
$conn = mysqli_connect('localhost','root','','test');

$name = ["name"];
$email = ["email"];
$password = ["password"];


if (isset($_POST["submit"])){
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
   
    
    $query = "INSERT INTO user VALUES('', '$name', '$email', '$password')";
    mysqli_query($conn, $query);
};
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Azira -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!--- Favicon --->
		<link rel="icon" href="../assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--- Style css --->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini ltr">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- page -->
		<div class="page custom-index">
			
			<!-- main-header -->
			<div class="main-header side-header sticky nav nav-item">
				<div class="container-fluid main-container ">
					<div class="main-header-left ">
						<div class="app-sidebar__toggle mobile-toggle" data-bs-toggle="sidebar">
							<a class="open-toggle"   href="javascript:void(0);"><i class="header-icons" data-eva="menu-outline"></i></a>
							<a class="close-toggle"   href="javascript:void(0);"><i class="header-icons" data-eva="close-outline"></i></a>
						</div>
						<div class="responsive-logo">
							<a href="index.html" class="header-logo"><img src="../assets/img/brand/logo.png" class="logo-11"></a>
							<a href="index.html" class="header-logo"><img src="../assets/img/brand/logo-white.png" class="logo-1"></a>
						</div>
					
					</div>
					<button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
					</button>
					<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0  mg-lg-s-auto">
						<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
							<div class="main-header-right">
								<div class="nav nav-item nav-link" id="bs-example-navbar-collapse-1">
									<form class="navbar-form" role="search">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search">
											<span class="input-group-btn">
												<button type="reset" class="btn btn-default">
													<i class="fas fa-times"></i>
												</button>
												<button type="submit" class="btn btn-default nav-link">
													<i class="fe fe-search"></i>
												</button>
											</span>
										</div>
									</form>
								</div>
								<li class="dropdown nav-item main-layout">
									<a class="new theme-layout nav-link-bg layout-setting" >
										<span class="dark-layout"><i class="fe fe-moon"></i></span>
										<span class="light-layout"><i class="fe fe-sun"></i></span>
									</a>
								</li>
								<div class="nav nav-item  navbar-nav-right mg-lg-s-auto">
									<div class="nav-item full-screen fullscreen-button">
										<a class="new nav-link full-screen-link"   href="javascript:void(0);"><i class="fe fe-maximize"></i></span></a>
									</div>
									
									
									<div class="dropdown main-profile-menu nav nav-item nav-link">

										<a class="profile-user d-flex" href=""><img src="../assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>

										<div class="dropdown-menu">
											<div class="main-header-profile header-img">
												<div class="main-img-user"><img alt="" src="../assets/img/faces/6.jpg"></div>
												<h6>Aldin S</h6><span>Premium Member</span>
											</div>
											<a class="dropdown-item" href="profile.html"><i class="far fa-user"></i> My Profile</a>
											<a class="dropdown-item" href="profile.html"><i class="far fa-edit"></i> Edit Profile</a>
											<a class="dropdown-item" href="profile.html"><i class="far fa-clock"></i> Activity Logs</a>
											<a class="dropdown-item" href="profile.html"><i class="fas fa-sliders-h"></i> Account Settings</a>
											<a class="dropdown-item" href="signin.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
										</div>
									</div>
									<div class="dropdown main-header-message right-toggle">
										<a class="nav-link pe-0" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
											<i class="ion ion-md-menu tx-20 bg-transparent"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->

			<!-- main-sidebar -->
			<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
			<div class="sticky">
				<aside class="app-sidebar sidebar-scroll">
					<div class="main-sidebar-header active">
						<a class="desktop-logo logo-light active" href="index.html"><img src="../assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
						<a class="desktop-logo logo-dark active" href="index.html"><img src="../assets/img/brand/logo-white.png" class="main-logo" alt="logo"></a>
						<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="../assets/img/brand/favicon.png" alt="logo"></a>
						<a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="../assets/img/brand/favicon-white.png" alt="logo"></a>
					</div>
					<div class="main-sidemenu">
						<div class="main-sidebar-loggedin">
							<div class="app-sidebar__user">
								<div class="dropdown user-pro-body text-center">
									<div class="user-pic">
										<img src="../assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded">
									</div>
									<div class="user-info">
										<h6 class=" mb-0 text-dark">Aldin S</h6>
										<span class="text-muted app-sidebar__user-name text-sm">Owner</span>
									</div>
								</div>
							</div>
						</div>
						<br><br>
						<div class="sidebar-navs">
							<p>
								We commit for a performance and make it the best in the world
							</p>
						</div>
						<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
						<ul class="side-menu ">
							<li class="slide">
								<a class="side-menu__item" href="index.html"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide"   href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Login As</span><i class="angle fe fe-chevron-down"></i></a>
								<ul class="slide-menu">
									<li class="side-menu__label1"><a href="javascript:void(0);">Apps</a></li>
									<li><a class="slide-item" href="login-user.html">User</a></li>
									<li><a class="slide-item" href="login-admin.html">Administrator</a></li>
									<li><a class="slide-item" href="login-officer.html">Officer</a></li>
									
									
								</ul>
							</li>
							<li class="slide">
								<a class="side-menu__item" href="register-user.html"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Register</span></a>
							</li>
							

						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
					</div>
				</aside>
			</div>
			<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div>
						<h4 class="content-title mb-2">Hi, welcome back!</h4>
						<nav aria-label="breadcrumb">
							<h5>You can login as an admin officer or user from left sidebar</h5>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class=" d-flex right-page">
							
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->
				<div class="row row-sm">
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="ps-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="../assets/img/faces/6.jpg"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">Petey Cruiser</h5>
												<p class="main-profile-name-text">Web Designer</p>
											</div>
										</div>
										<h6>Bio</h6>
										<div class="main-profile-bio">
											pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a>
										</div><!-- main-profile-bio -->
										<div class="main-profile-work-list">
											<div class="media">
												<div class="media-logo bg-success-transparent text-success">
													<i class="icon ion-logo-whatsapp"></i>
												</div>
												<div class="media-body">
													<h6>Web Designer at <a href="">Spruko</a></h6><span>2018 - present</span>
													<p>Past Work: Spruko, Inc.</p>
												</div>
											</div>
											<div class="media">
												<div class="media-logo bg-primary-transparent text-primary">
													<i class="icon ion-logo-buffer"></i>
												</div>
												<div class="media-body">
													<h6>Studied at <a href="">University</a></h6><span>2004-2008</span>
													<p>Graduation: Bachelor of Science in Computer Science</p>
												</div>
											</div>
										</div><!-- main-profile-work-list -->
										<hr class="mg-y-30">
										<label class="main-content-label tx-13 mg-b-20">Social</label>
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-logo-github"></i>
												</div>
												<div class="media-body">
													<span>Github</span> <a href="">github.com/spruko</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-success-transparent text-success">
													<i class="icon ion-logo-twitter"></i>
												</div>
												<div class="media-body">
													<span>Twitter</span> <a href="">twitter.com/spruko.me</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info-transparent text-info">
													<i class="icon ion-logo-linkedin"></i>
												</div>
												<div class="media-body">
													<span>Linkedin</span> <a href="">linkedin.com/in/spruko</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-danger-transparent text-danger">
													<i class="icon ion-md-link"></i>
												</div>
												<div class="media-body">
													<span>My Portfolio</span> <a href="">spruko.com/</a>
												</div>
											</div>
										</div><!-- main-profile-social-list -->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="main-content-body main-content-body-profile">
							<div class="">
								<div class="wideget-user-tab">
									<div class="tab-menu-heading">
										<div class="tabs-menu1">
											<ul class="nav">
												<li class=""><a href="#tab-51" class="active show" data-bs-toggle="tab">Profile</a></li>
												<li><a href="#tab-61" data-bs-toggle="tab" class="">Friends</a></li>
												<li><a href="#tab-71" data-bs-toggle="tab" class="">Gallery</a></li>
												<li><a href="#tab-81" data-bs-toggle="tab" class="">Followers</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-content">
								<div class="tab-pane active show" id="tab-51">
									<div id="profile-log-switch">
										<div class="card">
											<div class="card-body">
												<div class="card-header">
													<div class="media">
														<div class="media-user me-2">
															<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../assets/img/faces/6.jpg"></div>
														</div>
														<div class="media-body">
															<h6 class="mb-0 mg-t-9">Petey Cruiser Pechon</h6><span class="text-primary">just now</span>
														</div>
														<div class="ms-auto">
															<div class="dropdown show">
																<a class="new" data-bs-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												<div><img alt="img" class="w-100" src="../assets/img/photos/12.jpg"></div>
												<div class="media mg-t-15 profile-footer">
													<div class="media-user me-2">
														<div class="demo-avatar-group">
															<div class="demo-avatar-group main-avatar-list-stacked">
																<div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/faces/12.jpg"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/faces/12.jpg"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/faces/13.jpg"></div>
																<div class="main-img-user online"><img alt="" class="rounded-circle" src="../assets/img/faces/13.jpg"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/faces/14.jpg"></div>
																<div class="main-avatar">
																	+23
																</div>
															</div><!-- demo-avatar-group -->
														</div><!-- demo-avatar-group -->
													</div>
													<div class="media-body">
														<h6 class="mb-0 mg-t-10">28 people like your photo</h6>
													</div>
													<div class="ms-auto">
														<div class="dropdown show">
															<a class="new" href="JavaScript:void(0);"><i class="far fa-heart"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card mg-b-20">
											<div class="card-body">
												<div class="card-header">
													<div class="media">
														<div class="media-user me-2">
															<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../assets/img/faces/6.jpg"></div>
														</div>
														<div class="media-body">
															<h6 class="mb-0 mg-t-9">Petey Cruiser Pechon</h6><span class="text-dark">Sep 22 2019, 10:14am</span>
														</div>
														<div class="ms-auto">
															<div class="dropdown show">
																<a class="new" data-bs-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

												<div class="media mg-t-15 profile-footer">
													<div class="media-user me-2">
														<div class="demo-avatar-group">
															<div class="demo-avatar-group main-avatar-list-stacked">
																<div class="main-img-user online"><img alt="" class="rounded-circle" src="../assets/img/faces/12.jpg"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/faces/12.jpg"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/faces/13.jpg"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/faces/13.jpg"></div>
																<div class="main-img-user online"><img alt="" class="rounded-circle" src="../assets/img/faces/14.jpg"></div>
																<div class="main-avatar">
																	+23
																</div>
															</div><!-- demo-avatar-group -->
														</div><!-- demo-avatar-group -->
													</div>
													<div class="media-body">
														<h6 class="mb-0 mg-t-10">28 people like your photo</h6>
													</div>
													<div class="ms-auto">
														<div class="dropdown show">
															<a class="new" href="JavaScript:void(0);"><i class="far fa-heart"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-61">
									<ul class="widget-users row ps-0 mb-5">
										<li class="col-xl-4 col-lg-6  col-md-6 col-sm-12 col-12">
											<div class="card border p-0">
												<a href="profile.html">
													<div class="card-body text-center">
														<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../assets/img/faces/6.jpg"></span>
														<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">James Thomas</h5>
														<span class="text-muted">Web designer</span>
													</div>
												</a>
												<div class="card-footer text-center">
													<div class="row user-social-detail">
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-google"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-facebook"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile  rounded text-center bg-primary-transparent">
															<i class="fab fa-twitter"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
										<li class="col-xl-4 col-lg-6  col-md-6 col-sm-12 col-12">
											<div class="card border p-0">
												<a href="profile.html">
													<div class="card-body text-center">
														<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../assets/img/faces/4.jpg"></span>
														<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">George Clooney</h5>
														<span class="text-muted">Web designer</span>
													</div>
												</a>
												<div class="card-footer text-center">
													<div class="row user-social-detail">
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-google"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-facebook"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile  rounded text-center bg-primary-transparent">
															<i class="fab fa-twitter"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
										<li class="col-xl-4 col-lg-6  col-md-6 col-sm-12 col-12">
											<div class="card border p-0">
												<a href="profile.html">
													<div class="card-body text-center">
														<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../assets/img/faces/5.jpg"></span>
														<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Robert Downey Jr.</h5>
														<span class="text-muted">Web designer</span>
													</div>
												</a>
												<div class="card-footer text-center">
													<div class="row user-social-detail">
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-google"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-facebook"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile  rounded text-center bg-primary-transparent">
															<i class="fab fa-twitter"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
										<li class="col-xl-4 col-lg-6  col-md-6 col-sm-12 col-12">
											<div class="card border p-0 mb-lg-0">
												<a href="profile.html">
													<div class="card-body text-center">
														<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../assets/img/faces/3.jpg"></span>
														<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Emma Watson</h5>
														<span class="text-muted">Web designer</span>
													</div>
												</a>
												<div class="card-footer text-center">
													<div class="row user-social-detail">
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-google"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-facebook"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile  rounded text-center bg-primary-transparent">
															<i class="fab fa-twitter"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
										<li class="col-xl-4 col-lg-6  col-md-6 col-sm-12 col-12">
											<div class="card border p-0 mb-lg-0">
												<a href="profile.html">
													<div class="card-body text-center">
														<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../assets/img/faces/8.jpg"></span>
														<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Mila Kunis</h5>
														<span class="text-muted">Web designer</span>
													</div>
												</a>
												<div class="card-footer text-center">
													<div class="row user-social-detail">
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-google"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-facebook"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile  rounded text-center bg-primary-transparent">
															<i class="fab fa-twitter"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
										<li class="col-xl-4 col-lg-6  col-md-6 col-sm-12 col-12">
											<div class="card border p-0 mb-0">
												<div class="card-body text-center">
													<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../assets/img/faces/2.jpg"></span>
													<a href="profile.html">
														<h5 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Ryan Gossling</h5>
													</a>
													<span class="text-muted">Web designer</span>
												</div>
												<div class="card-footer text-center">
													<div class="row user-social-detail">
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-google"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile me-4 rounded text-center bg-primary-transparent">
															<i class="fab fa-facebook"></i>
														</a>
														<a href="javascript:void(0);" class="social-profile  rounded text-center bg-primary-transparent">
															<i class="fab fa-twitter"></i>
														</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="tab-pane" id="tab-71">
									<div class="row  mb-5 img-gallery" id="lightgallery">
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/1.jpg" data-src="../assets/img/media/1.jpg">
											<a href="javascript:void(0);"><img class="img-fluid mb-2 br-7" src="../assets/img/media/1.jpg " alt="banner image"></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/2.jpg" data-src="../assets/img/media/2.jpg">
											<a href="javascript:void(0);"><img class="img-fluid mb-2 br-7" src="../assets/img/media/2.jpg" alt="banner image "></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/3.jpg" data-src="../assets/img/media/3.jpg">
											<a href="javascript:void(0);"><img class="img-fluid  mb-2 br-7" src="../assets/img/media/3.jpg" alt="banner image "></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/4.jpg" data-src="../assets/img/media/4.jpg">
											<a href="javascript:void(0);"><img class="img-fluid  mb-2 br-7" src="../assets/img/media/4.jpg" alt="banner image "></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/5.jpg" data-src="../assets/img/media/5.jpg">
											<a href="javascript:void(0);"><img class="img-fluid mb-2 br-7" src="../assets/img/media/5.jpg " alt="banner image"></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/6.jpg" data-src="../assets/img/media/6.jpg">
											<a href="javascript:void(0);"><img class="img-fluid mb-2 br-7" src="../assets/img/media/6.jpg" alt="banner image "></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/7.jpg" data-src="../assets/img/media/7.jpg">
											<a href="javascript:void(0);"><img class="img-fluid  mb-2 br-7" src="../assets/img/media/7.jpg" alt="banner image "></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/1.jpg" data-src="../assets/img/media/1.jpg">
											<a href="javascript:void(0);"><img class="img-fluid  mb-2 br-7" src="../assets/img/media/1.jpg" alt="banner image "></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/8.jpg" data-src="../assets/img/media/8.jpg">
											<a href="javascript:void(0);"><img class="img-fluid mb-2 br-7" src="../assets/img/media/8.jpg " alt="banner image"></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/3.jpg" data-src="../assets/img/media/3.jpg">
											<a href="javascript:void(0);"><img class="img-fluid mb-2 br-7" src="../assets/img/media/3.jpg" alt="banner image "></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/4.jpg" data-src="../assets/img/media/4.jpg">
											<a href="javascript:void(0);"><img class="img-fluid  mb-2 br-7" src="../assets/img/media/4.jpg" alt="banner image "></a>
										</div>
										<div class="col-lg-3 col-md-6" data-responsive="../assets/img/media/2.jpg" data-src="../assets/img/media/2.jpg">
											<a href="javascript:void(0);"><img class="img-fluid  mb-2 br-7" src="../assets/img/media/2.jpg" alt="banner image "></a>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-71">
									<div class="row  mb-5">
										<div class="col-xl-6 col-lg-12 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<img class="avatar brround avatar-md me-3" src="../assets/img/faces/10.jpg" alt="avatar-img">
													<div class="media-body valign-middle">
														<a href="" class=" fw-semibold text-dark">John Paige</a>
														<p class="text-muted mb-0">johan@gmail.com</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-2">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
										<div class=" col-lg-6 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
													<div class="media-body valign-middle mt-0">
														<a href="" class="fw-semibold text-dark">Lillian Quinn</a>
														<p class="text-muted mb-0">lilliangore</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-1">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
										<div class=" col-lg-6 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<span class="avatar cover-image avatar-md brround me-3 bg-primary">IH</span>
													<div class="media-body valign-middle mt-0">
														<a href="" class="fw-semibold text-dark">Irene Harris</a>
														<p class="text-muted mb-0">ireneharris@gmail.com</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-1">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
										<div class=" col-lg-6 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<img class="avatar brround avatar-md me-3" src="../assets/img/faces/1.jpg" alt="avatar-img">
													<div class="media-body valign-middle mt-0">
														<a href="" class="text-dark fw-semibold">Harry Fisher</a>
														<p class="text-muted mb-0">harryuqt</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-1">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
										<div class=" col-lg-6 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<span class="avatar cover-image avatar-md brround bg-pink me-3">AB</span>
													<div class="media-body valign-middle mt-0">
														<a href="" class="fw-semibold text-dark">Aida Bugg</a>
														<p class="text-muted mb-0">Aidasr</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-1">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
										<div class=" col-lg-6 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
													<div class="media-body valign-middle mt-0">
														<a href="" class="fw-semibold text-dark">Lillian Quinn</a>
														<p class="text-muted mb-0">lilliangore</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-1">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-81">
									<div class="row">
										<div class="col-xl-6 col-lg-12 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<img class="avatar brround avatar-md me-3" src="../assets/img/faces/12.jpg" alt="avatar-img">
													<div class="media-body valign-middle">
														<a href="" class=" fw-semibold text-dark">John Paige</a>
														<p class="text-muted mb-0">johan@gmail.com</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-2">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-12 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
													<div class="media-body valign-middle mt-0">
														<a href="" class="fw-semibold text-dark">Lillian Quinn</a>
														<p class="text-muted mb-0">lilliangore</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-1">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-12 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<span class="avatar cover-image avatar-md brround me-3 bg-primary">IH</span>
													<div class="media-body valign-middle mt-0">
														<a href="" class="fw-semibold text-dark">Irene Harris</a>
														<p class="text-muted mb-0">ireneharris@gmail.com</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-1">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-12 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<img class="avatar brround avatar-md me-3" src="../assets/img/faces/4.jpg" alt="avatar-img">
													<div class="media-body valign-middle mt-0">
														<a href="" class="text-dark fw-semibold">Saureen Bgist</a>
														<p class="text-muted mb-0">harryuqt</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-1">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-12 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<img class="avatar brround avatar-md me-3" src="../assets/img/faces/13.jpg" alt="avatar-img">
													<div class="media-body valign-middle mt-0">
														<a href="" class="text-dark fw-semibold">Maureen Biologist</a>
														<p class="text-muted mb-0">harryuqt</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-1">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-12 col-md-12">
											<div class="card border p-0 over-flow-hidden">
												<div class="media card-body media-xs overflow-visible ">
													<span class="avatar cover-image avatar-md brround me-3 bg-info">PF</span>
													<div class="media-body valign-middle mt-0">
														<a href="" class="fw-semibold text-dark">Paddy O'Furniture.</a>
														<p class="text-muted mb-0">ireneharris@gmail.com</p>
													</div>
													<div class="media-body valign-middle text-end overflow-visible mt-1">
														<button class="btn btn-primary" type="button">Follow</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!--Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="panel panel-primary card mb-0">
				<div class="panel-body tabs-menu-body p-0 border-0">
					<ul class="Date-time">
						<li class="time">
							<h1 class="animated ">21:00</h1>
							<p class="animated ">Sat,October 1st 2029</p>
						</li>
					</ul>
					<div class="card-body latest-tasks">
						<h3 class="events-title"><span>Events For Week </span></h3>
						<div class="event">
							<div class="Day">Monday 20 Jan</div>
							<a   href="javascript:void(0);">No Events Today</a>
						</div>
						<div class="event">
							<div class="Day">Tuesday 21 Jan</div>
							<a   href="javascript:void(0);">No Events Today</a>
						</div>
						<div class="event">
							<div class="Day">Wednessday 22 Jan</div>
							<div class="tasks">
								<div class=" task-line primary">
									<a   href="javascript:void(0);" class="label">
										XML Import &amp; Export
									</a>
									<div class="time">
										12:00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input checked="" type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks">
								<div class="task-line danger">
									<a   href="javascript:void(0);" class="label">
										Connect API to pages
									</a>
									<div class="time">
										08:00 AM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="Day">Thursday 23 Jan</div>
							<div class="tasks">
								<div class="task-line success">
									<a   href="javascript:void(0);" class="label">
										Create Wireframes
									</a>
									<div class="time">
										06:20 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="Day">Friday 24 Jan</div>
							<div class="tasks">
								<div class="task-line warning">
									<a   href="javascript:void(0);" class="label">
										Test new features in tablets
									</a>
									<div class="time">
										02: 00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks">
								<div class="task-line teal">
									<a   href="javascript:void(0);" class="label">
										Design Evommerce
									</a>
									<div class="time">
										10: 00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks mb-0">
								<div class="task-line purple">
									<a   href="javascript:void(0);" class="label">
										Fix Validation Issues
									</a>
									<div class="time">
										12: 00 AM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="d-flex pagination wd-100p">
							<a   href="javascript:void(0);">Previous</a>
							<a   href="javascript:void(0);" class="ms-auto">Next</a>
						</div>
					</div>
					<div class="card-body border-top border-bottom">
						<div class="row">
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
								<div>Inbox</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"></i></a>
								<div>Settings</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
								<div>Sign out</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->

		<!-- Footer opened -->
		<div class="main-footer ht-45">
			<div class="container-fluid pd-t-0-f ht-100p">
					<span> Copyright © 2022 <a   href="javascript:void(0);" class="text-primary">Azira</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a   href="javascript:void(0);"> Spruko </a> All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed -->
	</div>
		<!-- page closed -->

		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js --->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="../assets/plugins/bootstrap/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="../assets/plugins/ionicons/ionicons.js"></script>

		<!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- P-scroll js --->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>



		<!--- Sidebar js --->
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="../assets/js/sticky.js"></script>

		<!--- Right-sidebar js --->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!--- Eva-icons js --->
		<script src="../assets/js/eva-icons.min.js"></script>

		<!--- Index js --->
		<script src="../assets/js/script.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="../assets/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>