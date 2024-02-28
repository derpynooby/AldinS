<?php
include "control.php"
?>
<!DOCTYPE html>
<html lang='en'>

<head>

	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='Description' content='Bootstrap Responsive Admin Web Dashboard HTML5 Template'>
	<meta name='Author' content='Spruko Technologies Private Limited'>
	<meta name='Keywords' content='admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4' />

	<!-- Title -->
	<title>Kazim-<?php echo $filename; ?></title>

	<!--- Favicon --->
	<link rel='icon' href='../../../azira/assets/img/brand/favicon.png' type='image/x-icon' />

	<!-- Bootstrap css -->
	<link href='../../../azira/assets/plugins/bootstrap/css/bootstrap.css' rel='stylesheet' id='style' />

	<!--- Icons css --->
	<link href='../../../azira/assets/css/icons.css' rel='stylesheet'>

	<!--- Style css --->
	<link href='../../../azira/assets/css/style.css' rel='stylesheet'>
	<link href='../../../azira/assets/css/plugins.css' rel='stylesheet'>

	<!--- Animations css --->
	<link href='../../../azira/assets/css/animate.css' rel='stylesheet'>

</head>

<body class='main-body app sidebar-mini ltr'>

	<!-- Loader -->
	<!-- <div id='global-loader'>
		<img src='../../../azira/assets/img/loaders/loader-4.svg' class='loader-img' alt='Loader'>
	</div> -->
	<!-- /Loader -->

	<!-- page -->
	<div class='page custom-index'>

		<!-- main-header -->
		<div class='main-header side-header sticky nav nav-item'>
			<div class='container-fluid main-container '>
				<div class='main-header-left '>
					<div class='app-sidebar__toggle mobile-toggle' data-bs-toggle='sidebar'>
						<a class='open-toggle' href='javascript:void(0);'><i class='header-icons' data-eva='menu-outline'></i></a>
						<a class='close-toggle' href='javascript:void(0);'><i class='header-icons' data-eva='close-outline'></i></a>
					</div>
					<div class='responsive-logo'>
						<a href='../../Dashboard/index.php' class='header-logo'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJMTE5bZNATVrEF5_Fc-jpjxkJdGcLXeaz2X4zMPZqWO1fOt5cvHxcSe3PiZDTWK09W7w&usqp=CAU' class='logo-1 rounded-5'></a>
					</div>
					<ul class='header-megamenu-dropdown  nav'>
						<li class='nav-item'>
							<div class='btn-group dropdown'>
								<button aria-expanded='false' aria-haspopup='true' class='btn btn-link dropdown-toggle' data-bs-toggle='dropdown' id='dropdownMenuButton2' type='button'><span> Sign in As </span></button>
								<div class='dropdown-menu'>
									<div class='setting-scroll'>
										<div>
											<div class='setting-menu '>
												<a class='dropdown-item' href='signin-user.php'>User</a>
												<a class='dropdown-item' href='signin-officer.php'></i>Officer</a>
												<a class='dropdown-item' href='signin-admin.php'></i>Admin</a>
											</div>
										</div>
									</div>
								</div>
								<button aria-expanded='false' aria-haspopup='true' class='btn btn-link ' id='dropdownMenuButton2' type='button'><a href='register.html' class='text-white'> Sign Up </a></button>
							</div>
						</li>
					</ul>
				</div>
				<button class='navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent-4' aria-controls='navbarSupportedContent-4' aria-expanded='false' aria-label='Toggle navigation'>
					<i class='fe fe-more-vertical header-icons navbar-toggler-icon'></i>
				</button>
				<div class='mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0  mg-lg-s-auto'>
					<div class='collapse navbar-collapse' id='navbarSupportedContent-4'>
						<div class='main-header-right'>
							<div class='nav nav-item nav-link' id='bs-example-navbar-collapse-1'>
								<form class='navbar-form' role='search'>
									<div class='input-group'>
										<input type='text' class='form-control' placeholder='Search'>
										<span class='input-group-btn'>
											<button type='reset' class='btn btn-default'>
												<i class='fas fa-times'></i>
											</button>
											<button type='submit' class='btn btn-default nav-link'>
												<i class='fe fe-search'></i>
											</button>
										</span>
									</div>
								</form>
							</div>
							<li class='dropdown nav-item main-layout'>
								<a class='new theme-layout nav-link-bg layout-setting'>
									<span class='dark-layout'><i class='fe fe-moon'></i></span>
									<span class='light-layout'><i class='fe fe-sun'></i></span>
								</a>
							</li>
							<div class='nav nav-item  navbar-nav-right mg-lg-s-auto'>
								<div class='nav-item full-screen fullscreen-button'>
									<a class='new nav-link full-screen-link' href='javascript:void(0);'><i class='fe fe-maximize'></i></span></a>
								</div>


								<div class='dropdown main-profile-menu nav nav-item nav-link'>

									<a class='profile-user d-flex' href=''><img src='../../../azira/assets/img/faces/6.jpg' alt='user-img' class='rounded-circle mCS_img_loaded'><span></span></a>

									<div class='dropdown-menu'>
										<div class='main-header-profile header-img'>
											<h6>No Account</h6>
										</div>
									</div>
								</div>
								<div class='dropdown main-header-message right-toggle'>
									<a class='nav-link pe-0' data-bs-toggle='sidebar-right' data-bs-target='.sidebar-right'>
										<i class='ion ion-md-menu tx-20 bg-transparent'></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-header -->