<?php 
$link1 = "../PHP/Casting/cast.php";
$link2 = "../PHP/Constanta/constanta.php";
$link3 = "../PHP/Data_type/data_type.php";
$link4 = "../PHP/Directory/directory.php";
$link5 = "../PHP/Echo_and_print/difference_echo_and_print.php";
$link6 = "../PHP/Else_If/elseif.php";
$link7 = "../PHP/Function/function.php";
$link8 = "../PHP/Loops/loops.php";
$link9 = "../PHP/Math/math.php";
$link10 = "../PHP/Operators/operators.php";
$link11 = "../PHP/Switch/switch.php";
$link12 = "../PHP/Variables/variable.php";
$link13 = "../PHP/Form/register.html";
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
		<link rel="icon" href="../../azira/assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="../../azira/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="../../azira/assets/css/icons.css" rel="stylesheet">

		<!--- Style css --->
		<link href="../../azira/assets/css/style.css" rel="stylesheet">
		<link href="../../azira/assets/css/plugins.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../../azira/assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini ltr">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../../azira/assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
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
							<a href="index.html" class="header-logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJMTE5bZNATVrEF5_Fc-jpjxkJdGcLXeaz2X4zMPZqWO1fOt5cvHxcSe3PiZDTWK09W7w&usqp=CAU" class="logo-1 rounded-5"></a>
						</div>
						<ul class="header-megamenu-dropdown  nav">
							<li class="nav-item">
								<div class="btn-group dropdown">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton2" type="button"><span> Sign in As </span></button>
									<div  class="dropdown-menu" >
										<div class="setting-scroll">
											<div>
												<div class="setting-menu ">
													<a  class="dropdown-item"   href="signin-user.php">User</a>
													<a class="dropdown-item"   href="signin-officer.php"></i>Officer</a>
													<a class="dropdown-item"   href="signin-admin.php"></i>Admin</a>
												</div>
											</div>
										</div>
									</div>
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-link "  id="dropdownMenuButton2" type="button"><a  href="register.html" class="text-white"> Sign Up </a></button>
								</div>
							</li>
						</ul>
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

										<a class="profile-user d-flex" href=""><img src="../../../azira/assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>

										<div class="dropdown-menu">
											<div class="main-header-profile header-img">
												<h6>No Account</h6>
											</div>
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
					
					<div class="main-sidemenu">
						<div class="main-sidebar-loggedin">
							<div class="app-sidebar__user">
								<div class="dropdown user-pro-body text-center">
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJMTE5bZNATVrEF5_Fc-jpjxkJdGcLXeaz2X4zMPZqWO1fOt5cvHxcSe3PiZDTWK09W7w&usqp=CAU" alt="user-img" class="rounded-circle wd-150 mCS_img_loaded">
									<div class="user-info">
										<h6 class=" mb-0 text-dark">M Kazim</h6>
										<span class="text-muted app-sidebar__user-name text-sm">XI RPL</span>
									</div>
								</div>
							</div>
						</div>
						<br><br>
						<div class="sidebar-navs">
							<p>
								All of my learning history as programmer
							</p>
						</div>
						<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
						<ul class="side-menu ">
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide"   href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">PHP</span><i class="angle fe fe-chevron-down"></i></a>
								<ul class="slide-menu">
									<li class="side-menu__label1"><a href="javascript:void(0);">PHP</a></li>
									<li><a class="slide-item" href="<?php echo $link1  ?>">Casting</a></li>
									<li><a class="slide-item" href="<?php echo $link2  ?>">Constanta</a></li>
									<li><a class="slide-item" href="<?php echo $link3  ?>">Data Type</a></li>
									<li><a class="slide-item" href="<?php echo $link4  ?>">Directoy</a></li>
									<li><a class="slide-item" href="<?php echo $link5  ?>">Echo & Print</a></li>
									<li><a class="slide-item" href="<?php echo $link6  ?>">Else If</a></li>
									<li><a class="slide-item" href="<?php echo $link7  ?>">Function</a></li>
									<li><a class="slide-item" href="<?php echo $link8  ?>">Loops</a></li>
									<li><a class="slide-item" href="<?php echo $link9  ?>">Math</a></li>
									<li><a class="slide-item" href="<?php echo $link10 ?>">Operators</a></li>
									<li><a class="slide-item" href="<?php echo $link11 ?>">Switch</a></li>
									<li><a class="slide-item" href="<?php echo $link12 ?>">Variables</a></li>
									<li><a class="slide-item" href="<?php echo $link13 ?>">Form</a></li>
								</ul>
							</li> 
					
							
							

						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
					</div>
				</aside>
			</div>
			<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid ">

				<!-- breadcrumb -->
				<div class="breadcrumb-header d-block ">
					<div class="d-flex col-12">
						<img class="wd-200 m-0 bd bd-3 bd-danger rounded-30" alt="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJMTE5bZNATVrEF5_Fc-jpjxkJdGcLXeaz2X4zMPZqWO1fOt5cvHxcSe3PiZDTWK09W7w&usqp=CAU" alt="">

						<nav aria-label="breadcrumb" class="px-4 pt-4">
							<h1 class="text-white">M Kazim</h1>
							<h4 class="text-white">Start as a newbie try to improve and be the best at it</h4>
						</nav>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row -->
					<div class="row">
                        <div class="col-6 col-4 bg-transparent text-dark">
							<div class="d-flex">
								<div class="">
									<img class="m-3 border border-dark wd-150" src="https://static.vecteezy.com/system/resources/previews/003/545/332/original/lazy-fox-cartoon-sleep-animal-vector.jpg" alt="">
								</div>
								<div class="m-4">
									<fieldset>
										<h5>Nama : M. Kazim Aldin S.</h5>
										<h5>Kelas : XI RPL</h5>
										<h5>Tanggal : </h5>
										<h5>Tentang : Casting PHP</h5>
									</fieldset>
								</div>
							</div>
                        </div>
                    </div>

				<!-- row closed -->

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
								<a class="" href="index.html"><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
								<div>Sign out</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->

		
	</div>
		<!-- page closed -->

		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- Perfect-scrollbar js --->
		<script src="../../azira/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		

		<!--- JQuery min js --->
		<script src="../../azira/assets/plugins/jquery/jquery.min.js"></script>

		<!--- Datepicker js --->
		<script src="../../azira/assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="../../azira/assets/plugins/bootstrap/popper.min.js"></script>
		<script src="../../azira/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="../../azira/assets/plugins/ionicons/ionicons.js"></script>

		<!--- Moment js --->
		<script src="../../azira/assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../../azira/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Select2 js --->
		<script src="../../azira/assets/plugins/select2/js/select2.min.js"></script>

		<!--- Eva-icons js --->
		<script src="../../azira/assets/js/eva-icons.min.js"></script>

		<!--- Sidebar js --->
		<script src="../../azira/assets/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="../../azira/assets/js/sticky.js"></script>

		<!--- Right-sidebar js --->
		<script src="../../azira/assets/plugins/sidebar/sidebar.js"></script>
		<script src="../../azira/assets/plugins/sidebar/sidebar-custom.js"></script>

		<!--- Internal Multislider js --->
		<script src="../../azira/assets/plugins/multislider/multislider.js"></script>

		<!--- Index js --->
		<script src="../../azira/assets/js/script.js"></script>

		<!--themecolor js-->
		<script src="../../azira/assets/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="../../azira/assets/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="../../azira/assets/js/custom.js"></script>

	</body>
</html>
    
            
      