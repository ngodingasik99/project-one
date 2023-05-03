<!doctype html>
<html lang="en" dir="ltr">
	
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="Amirudin" name="author">

		<!-- Favicon -->
<link rel="icon" href="assets/images/brand/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />
<!-- Title -->
<title>IndoUi – Bootstrap 4 Admin Dashboard HTML Template</title>
<!--Bootstrap css-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!--Style css -->
<link href="assets/css/style.css" rel="stylesheet" />
<link href="assets/css/dark-style.css" rel="stylesheet" />
<link href="assets/css/skin-modes.css" rel="stylesheet">
<!-- P-scrollbar css-->
<link href="assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />
<!-- Sidemenu css -->
<link href="assets/plugins/sidemenu/sidemenu.css" rel="stylesheet" />
<!--Daterangepicker css-->
<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
<!-- Morris  Charts css-->
<link href="assets/plugins/morris/morris.css" rel="stylesheet" />
<!-- Rightsidebar css -->
<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">
<!---Icons css-->
<link href="assets/css/icons.css" rel="stylesheet" />

<!---Switcher css-->
<link href="assets/switcher/css/switcher.css" rel="stylesheet" />
<link href="assets/switcher/demo.css" rel="stylesheet" />
	</head>

	<body class="app sidebar-mini rtl">
	
		<!-- Switcher -->
		<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="demo-icon bg_dark">
					<i class="fa fa-cog fa-spin text_primary"></i>
				</div>
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							<div class="swichermainleft border-top mt-2 text-center">
								<div class="p-3">
									<a class="btn btn-warning btn-block mt-0" href="index.html">LTR Version</a> 
									<a class="btn btn-info btn-block" href="https://laravel.spruko.com/indoui/Leftmenu-Icon-LightSidebar-rtl/index">RTL Version</a>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Navigation Style</h4>
								<div class="pl-3 pr-3">
									<a class="wscolorcode blackborder nav-hor navstyle1" href="https://laravel.spruko.com/indoui/Horizontal-Light-ltr/index">Horizontal</a>
									<a class="wscolorcode blackborder nav-hor navstyle1" href="index.html">Left-menu</a>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Skin Modes</h4>
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Light Mode</span>
										<div class="onoffswitch2">
											<input checked class="onoffswitch2-checkbox" id="myonoffswitch" name="onoffswitch2" type="radio"> <label class="onoffswitch2-label" for="myonoffswitch"></label>
										</div>
									</div>
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Dark Mode</span>
										<div class="onoffswitch2">
											<input  class="onoffswitch2-checkbox" id="myonoffswitch1" name="onoffswitch2" type="radio"> <label class="onoffswitch2-label" for="myonoffswitch1"></label>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Skin Modes</h4>
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Default Body</span>
										<div class="onoffswitch2">
											<input checked class="onoffswitch2-checkbox" id="myonoffswitch7" name="onoffswitch" type="radio"> <label class="onoffswitch2-label" for="myonoffswitch7"></label>
										</div>
									</div>
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Body Style1</span>
										<div class="onoffswitch2">
											<input class="onoffswitch2-checkbox" id="myonoffswitch6" name="onoffswitch" type="radio"> <label class="onoffswitch2-label" for="myonoffswitch6"></label>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Background Patterns</h4>
								<div class="skin-body light-pattern">
									<button class="bg1 wscolorcode1 blackborder" id="background1" type="button"></button>
									<button class="bg2 wscolorcode1 blackborder" id="background2" type="button"></button> 
									<button class="bg3 wscolorcode1 blackborder" id="background3" type="button"></button> 
									<button class="bg4 wscolorcode1 blackborder" id="background4" type="button"></button> 
									<button class="bg5 wscolorcode1 blackborder" id="background5" type="button"></button>
								</div>
								<div class="skin-body dark-pattern">
									<button class="bg6 wscolorcode1 blackborder" id="background6" type="button"></button>
									<button class="bg7 wscolorcode1 blackborder" id="background7" type="button"></button> 
									<button class="bg8 wscolorcode1 blackborder" id="background8" type="button"></button> 
									<button class="bg9 wscolorcode1 blackborder" id="background9" type="button"></button> 
									<button class="bg10 wscolorcode1 blackborder" id="background10" type="button"></button>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Leftmenu Bg-Image</h4>
								<div class="skin-body">
									<button class="bgimage1 wscolorcode1 blackborder" id="leftmenuimage1" type="button"></button>
									<button class="bgimage2 wscolorcode1 blackborder" id="leftmenuimage2" type="button"></button> 
									<button class="bgimage3 wscolorcode1 blackborder" id="leftmenuimage3" type="button"></button> 
									<button class="bgimage4 wscolorcode1 blackborder" id="leftmenuimage4" type="button"></button>
									<button class="bgimage5 wscolorcode1 blackborder" id="leftmenuimage5" type="button"></button>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Leftmenu Styles</h4>
								<div class="switch_section">
									<div class="switch-toggle horizontal-light-switcher d-flex">
										<span class="mr-auto">Leftmenu Light</span>
										<div class="onoffswitch2">
											<input class="onoffswitch2-checkbox" id="myonoffswitch9" name="onoffswitch3" type="radio"> <label class="onoffswitch2-label" for="myonoffswitch9"></label>
										</div>
									</div>
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Leftmenu Color</span>
										<div class="onoffswitch2">
											<input class="onoffswitch2-checkbox" id="myonoffswitch10" name="onoffswitch3" type="radio"> <label class="onoffswitch2-label" for="myonoffswitch10"></label>
										</div>
									</div>
									<div class="switch-toggle horizontal-Dark-switcher d-flex">
										<span class="mr-auto">Leftmenu Dark</span>
										<div class="onoffswitch2">
											<input class="onoffswitch2-checkbox" id="myonoffswitch11" name="onoffswitch3" type="radio"> <label class="onoffswitch2-label" for="myonoffswitch11"></label>
										</div>
									</div>
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Leftmenu Gradient Color</span>
										<div class="onoffswitch2">
											<input class="onoffswitch2-checkbox" id="myonoffswitch12" name="onoffswitch3" type="radio"> <label class="onoffswitch2-label" for="myonoffswitch12"></label>
										</div>
									</div>
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Reset Leftmenu Styles</span>
										<div class="onoffswitch2">
											<input class="onoffswitch2-checkbox" id="myonoffswitch13" name="onoffswitch3" type="radio"> <label class="onoffswitch2-label" for="myonoffswitch13"></label>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft border-top mt-2 text-center">
								<div class="p-3">
									<a class="btn btn-primary btn-block mt-0" href="#">View Demo</a> 
									<a class="btn btn-secondary btn-block" href="https://themeforest.net/item/indoui-admin-bootstrap-4-dashboard-html-template/24864971">Buy Now</a> 
									<a class="btn btn-success btn-block" href="https://themeforest.net/user/sprukosoft/portfolio">Our Portfolio</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->
		
		<!--Global-Loader-->
		<div id="global-loader">
			<img src="assets/images/loader.svg" alt="loader">
		</div>
		<div class="page">
			<div class="page-main">
				<!--app-header-->
				<div class="app-header header d-flex navbar-collapse">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img src="assets/images/brand/logo.png" class="header-brand-img main-logo" alt="IndoUi logo">
								<img src="assets/images/brand/logo-light.png" class="header-brand-img dark-main-logo" alt="IndoUi logo">
								<img src="assets/images/brand/icon-light.png" class="header-brand-img dark-icon-logo" alt="IndoUi logo">
								<img src="assets/images/brand/icon.png" class="header-brand-img icon-logo" alt="IndoUi logo">
							</a><!-- logo-->
							<div class="app-sidebar__toggle" data-toggle="sidebar">
								<a class="open-toggle"  href="#"><i class="fe fe-align-left"></i></a>
								<a class="close-toggle"  href="#"><i class="fe fe-x"></i></a>
							</div>
							<div class="d-none dropdown d-md-flex header-settings">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-grid mr-2"></i><span class="lay-outstyle mt-1">Settings</span>
									<span class="pulse2 bg-warning" aria-hidden="true"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
									<a class="dropdown-item" href="#">Option 1</a>
									<a class="dropdown-item" href="#">Option 2</a>
									<a class="dropdown-item" href="#">Option 3</a>
									<a class="dropdown-item" href="#">Option 4</a>
									<a class="dropdown-item" href="#">Option 5</a>
								</div>
							</div>
							<div class="d-flex order-lg-2 ml-auto header-right">
								<div class="d-md-flex header-search" id="bs-example-navbar-collapse-1">
									<form class="navbar-form" role="search">
										<div class="input-group ">
											<input type="text" class="form-control" placeholder="Search...">
											<span class="input-group-btn">
												<button type="reset" class="btn btn-default">
													<i class="fe fe-x"></i>
												</button>
												<button type="submit" class="btn btn-default">
													<i class="fe fe-search"></i>
												</button>
											</span>
										</div>
									</form>
								</div><!-- Search -->
								<div class="d-md-flex">
									<a href="#" class="nav-link icon full-screen-link">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div>
								
								<!--Navbar -->
								<div class="dropdown header-profile">
									<a class="nav-link pr-0 leading-none d-flex pt-1" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/female/2.jpg"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-1">Vanessa Dyer</h5>
												<small class="text-muted">Web Developer</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-user"></i>Profile</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-edit"></i>Schedule</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-unlock"></i> Look Screen</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-power"></i> Log Out</a>
										<div class="dropdown-divider"></div>
										<div class="text-center dropdown-btn pb-3">
											<div class="btn-list">
												<a href="#" class="btn btn-icon btn-facebook btn-sm"><i class="icon icon-social-facebook"></i></a>
												<a href="#" class="btn btn-icon btn-twitter btn-sm"><i class="icon icon-social-twitter"></i></a>
												<a href="#" class="btn btn-icon btn-instagram btn-sm"><i class="icon icon-social-instagram"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="dropdown d-md-flex Sidebar-setting">
									<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class=""></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!--app-header end-->
				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar toggle-sidebar">
					<ul class="side-menu toggle-menu">
						<li><h3>Main</h3></li>
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="index-2.html#"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="index.html"><span>Analytics Dashboard</span></a></li>
								<li><a class="slide-item" href="index2.html"><span>E-Commerce Dashboard</span></a></li>
								<li><a class="slide-item" href="index3.html"><span>Sales Dashboard</span></a></li>
								<li><a class="slide-item" href="index4.html"><span>IT Dashboard</span></a></li>
								<li><a class="slide-item" href="index5.html"><span>Logistics Dashboard</span></a></li>
							</ul>
						</li>
					</ul>
				</aside>
				<!--sidemenu end-->

                <!-- Row -->
                <div class="app-content toggle-content">
                    <div class="side-app"> 
                        <div class="page-header">
							<h1 class="page-title">Data Tables</h1>
						</div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
												Launch demo modal
											</button>
                                        </div>
                                        <div class="card-options">
                                            <a href="#" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <span class="fe fe-more-horizontal fs-20"></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
                                                <li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
                                                <li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
                                                <li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
                                                <li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p">#</th>
                                                        <th class="wd-15p">Last name</th>
                                                        <th class="wd-20p">Position</th>
                                                        <th class="wd-15p">Start date</th>
                                                        <th class="wd-10p">Salary</th>
                                                        <th class="wd-25p">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>Chloe</td>
                                                        <td>System Developer</td>
                                                        <td>2018/03/12</td>
                                                        <td>$654,765</td>
                                                        <td>
                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#update">
																Update
															</button>
                                                            <a href="" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
	<!-- Row End-->


	<!-- Modal tambah -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
			...
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
		</div>
	</div>
	<!-- Modal update -->
	<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
			...
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
		</div>
	</div>

	<footer class="footer side-footer">
		<div class="container">
			<div class="row align-items-center flex-row-reverse">
				<div class="col-lg-12 col-sm-12   text-center">
					Copyright © 2019 <a href="#">IndoUi</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.
				</div>
			</div>
		</div>
	</footer>
<!-- End Footer-->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
<!-- Jquery js-->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<!--Bootstrap.min js-->
<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--Jquery Sparkline js-->
<script src="assets/js/jquery.sparkline.min.js"></script>
<!-- Chart Circle js-->
<script src="assets/js/circle-progress.min.js"></script>
<!-- Star Rating js-->
<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
<!--Moment js-->
<script src="assets/plugins/moment/moment.min.js"></script>
<!-- Daterangepicker js-->
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<!--Side-menu js-->
<script src="assets/plugins/sidemenu/sidemenu.js"></script>

<!-- P-scrollbar js-->
<script src="assets/plugins/p-scrollbar/p-scrollbar.js"></script>
<script src="assets/plugins/p-scrollbar/p-scrollbar-leftmenu.js"></script>
<!--Peitychart js -->
<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
<script src="assets/plugins/peitychart/peitychart.init.js"></script>
<!-- Charts js-->
<script src="assets/plugins/chart/chart.bundle.js"></script>
<script src="assets/plugins/chart/utils.js"></script>
<!--Morris  Charts js-->
<script src="assets/plugins/morris/raphael-min.js"></script>
<script src="assets/plugins/morris/morris.js"></script>
<!-- Custom-charts js-->
<script src="assets/js/index1.js"></script>
<!--Time Counter js-->
<script src="assets/plugins/counters/jquery.missofis-countdown.js"></script>
<script src="assets/plugins/counters/counter.js"></script>
<!-- Rightsidebar js -->
<script src="assets/plugins/sidebar/sidebar.js"></script>
<!-- Custom js-->
<script src="assets/js/custom.js"></script>

<!-- Switcher js-->
<script src="assets/switcher/js/switcher.js"></script>
	
</body>
</html>