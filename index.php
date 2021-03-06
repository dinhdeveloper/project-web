<?php
    /**
     * Created by PhpStorm.
     * User: Dinht
     * Date: 6/22/2018
     * Time: 1:07 AM
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="description"
	      content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
	<meta name="keywords"
	      content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
	<title>Trang Quản Trị</title>
	<!-- Favicons-->
	<link rel="icon" href="images/favicon/Ofavicon-32x32.png" sizes="32x32">
	<!-- Favicons-->
	<link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
	<!-- For iPhone -->
	<meta name="msapplication-TileColor" content="#00bcd4">
	<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
	<!-- For Windows Phone -->
	<!-- CORE CSS-->
	<link href="css/themes/fixed-menu/materialize.css" type="text/css" rel="stylesheet">
	<link href="css/themes/fixed-menu/style.css" type="text/css" rel="stylesheet">
	<!-- Custome CSS-->
	<link href="css/custom/custom.css" type="text/css" rel="stylesheet">
	<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
	<link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
	<link href="vendors/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet">
	<link href="vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
</head>
<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
	<div id="loader"></div>
	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START HEADER -->
<header id="header" class="page-topbar">
	<!-- start header nav-->
	<div class="navbar-fixed">
		<nav class="navbar-color">
			<div class="nav-wrapper">
				<ul class="left">
					<li>
						<h1 class="logo-wrapper">
							<a href="index.php" class="brand-logo darken-1">
								<img src="images/logo/materialize-logo.png" alt="materialize logo">
								<span class="logo-text hide-on-med-and-down">C1706L</span>
							</a>
						</h1>
					</li>
				</ul>
				<div class="header-search-wrapper hide-on-med-and-down">
					<i class="material-icons">search</i>
					<input type="text" name="Search" class="header-search-input z-depth-2"
					       placeholder="Tìm kiếm"/>
				</div>
				<ul class="right hide-on-med-and-down">
					<li>
						<a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"
						   data-activates="translation-dropdown">
							<span class="flag-icon flag-icon-gb"></span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
							<i class="material-icons">settings_overscan</i>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button"
						   data-activates="notifications-dropdown">
							<i class="material-icons">notifications_none
								<small class="notification-badge pink accent-2">5</small>
							</i>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button"
						   data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
						</a>
					</li>
					<li>
						<a href="#" data-activates="chat-out"
						   class="waves-effect waves-block waves-light chat-collapse">
							<i class="material-icons">format_indent_increase</i>
						</a>
					</li>
				</ul>
				<!-- translation-button -->
				<ul id="translation-dropdown" class="dropdown-content">
					<li>
						<a href="#!" class="grey-text text-darken-1">
							<i class="flag-icon flag-icon-gb"></i> English</a>
					</li>
					<li>
						<a href="#!" class="grey-text text-darken-1">
							<i class="flag-icon flag-icon-fr"></i> French</a>
					</li>
					<li>
						<a href="#!" class="grey-text text-darken-1">
							<i class="flag-icon flag-icon-cn"></i> Chinese</a>
					</li>
					<li>
						<a href="#!" class="grey-text text-darken-1">
							<i class="flag-icon flag-icon-de"></i> German</a>
					</li>
				</ul>
				<!-- notifications-dropdown -->
				<ul id="notifications-dropdown" class="dropdown-content">
					<li>
						<h6>Thông báo
							<span class="new badge">5</span>
						</h6>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#!" class="grey-text text-darken-2">
							<span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> Đơn đặt hàng mới
						</a>
						<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
					</li>
					<li>
						<a href="#!" class="grey-text text-darken-2">
							<span class="material-icons icon-bg-circle red small">stars</span> Nhiệm vụ đã hoàn thành</a>
						<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
					</li>
					<li>
						<a href="#!" class="grey-text text-darken-2">
							<span class="material-icons icon-bg-circle teal small">settings</span> Cập nhật cài đặt</a>
						<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
					</li>
					<li>
						<a href="#!" class="grey-text text-darken-2">
							<span class="material-icons icon-bg-circle deep-orange small">today</span> Lịch hẹn
							</a>
						<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
					</li>
					<li>
						<a href="#!" class="grey-text text-darken-2">
							<span class="material-icons icon-bg-circle amber small">trending_up</span> Báo cáo hàng tháng
							</a>
						<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
					</li>
				</ul>
				<!-- profile-dropdown -->
				<ul id="profile-dropdown" class="dropdown-content">
					<li>
						<a href="#" class="grey-text text-darken-1">
							<i class="material-icons">face</i> Thông tin cá nhân</a>
					</li>
					<li>
						<a href="#" class="grey-text text-darken-1">
							<i class="material-icons">settings</i> Cài Đặt</a>
					</li>
					<li>
						<a href="#" class="grey-text text-darken-1">
							<i class="material-icons">live_help</i> Giúp đỡ</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#" class="grey-text text-darken-1">
							<i class="material-icons">lock_outline</i> Lock</a>
					</li>
					<li>
						<a href="#" class="grey-text text-darken-1">
							<i class="material-icons">keyboard_tab</i> Đăng xuất</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<!-- end header nav-->
</header>
<!-- END HEADER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START MAIN -->
<div id="main">
	<!-- START WRAPPER -->
	<div class="wrapper">
		<!-- START LEFT SIDEBAR NAV-->
		<aside id="left-sidebar-nav">
			<ul id="slide-out" class="side-nav fixed leftside-navigation">
				<li class="user-details cyan darken-2">
					<div class="row">
						<div class="col col s4 m4 l4">
							<img src="images/avatar/avatar-7.png" alt="Quản trị viên"
							     class="circle responsive-img valign profile-image cyan">
						</div>
						<div class="col col s8 m8 l8">
							<a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
							   data-activates="profile-dropdown-nav">Cảnh Dinh<i
										class="mdi-navigation-arrow-drop-down right"></i></a>
							<p class="user-roal">Trang cá nhân</p>
						</div>
					</div>
				</li>
				<li class="no-padding">
					<ul class="collapsible" data-collapsible="accordion">
						<li class="bold">
							<a class="collapsible-header waves-effect waves-cyan">
								<i class="material-icons">dashboard</i>
								<span class="nav-text">Quản lý cửa hàng</span>
							</a>
							<div class="collapsible-body">
								<ul>
									<li>
										<a href="#">
											<i class="material-icons">keyboard_arrow_right</i>
											<span>Quản lý doanh thu</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="material-icons">keyboard_arrow_right</i>
											<span>Analytics</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="bold">
							<a class="collapsible-header waves-effect waves-cyan">
								<i class="material-icons">dvr</i>
								<span class="nav-text">Danh mục</span>
							</a>
							<div class="collapsible-body">
								<ul>
									<li>
										<a href="#">
											<i class="material-icons">keyboard_arrow_right</i>
											<span> Sản phẩm</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="material-icons">keyboard_arrow_right</i>
											<span> Bài viết</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="material-icons">keyboard_arrow_right</i>
											<span>Slider</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="material-icons">keyboard_arrow_right</i>
											<span> Banner</span>
										</a>
									</li>
								</ul>
							</div>
						</li>  <!-- danh mục-->
						<li class="bold">
							<a class="collapsible-header waves-effect waves-cyan">
								<i class="material-icons">web</i>
								<span class="nav-text">Chứng nhận</span>
							</a>
							<div class="collapsible-body">
								<ul>
									<li>
										<a href="#">
											<i class="material-icons">keyboard_arrow_right</i>
											<span>Giấy chứng nhận</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="material-icons">keyboard_arrow_right</i>
											<span>Giải thưởng</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="bold">
							<a href="#" class="waves-effect waves-cyan">
								<i class="material-icons">mail_outline</i>
								<span class="nav-text">Email</span>
							</a>
						</li>
						<li class="bold">
							<a href="#" class="waves-effect waves-cyan">
								<i class="material-icons">today</i>
								<span class="nav-text">Đối tác</span>
							</a>
						</li>
						<li class="bold">
							<a class="collapsible-header  waves-effect waves-cyan">
								<i class="material-icons">photo_filter</i>
								<span class="nav-text">Liên hệ</span>
							</a>
							<div class="collapsible-body">
								<ul class="collapsible" data-collapsible="accordion">
									<li>
										<a href="#">
											<i class="material-icons">keyboard_arrow_right</i>
											<span>Yêu cầu liên hệ</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="material-icons">keyboard_arrow_right</i>
											<span>Ý kiến khách hàng</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="li-hover">
							<p class="ultra-small margin more-text">MORE</p>
						</li>
						<li class="bold">
							<a class="collapsible-header  waves-effect waves-cyan">
								<i class="material-icons">account_circle</i>
								<span class="nav-text">Quản lý tài khoản</span>
							</a>
							<div class="collapsible-body">
								<ul class="collapsible" data-collapsible="accordion">
									<li class="bold">
										<a class="collapsible-header  waves-effect waves-cyan">
											<i class="material-icons">keyboard_arrow_right</i>
											<span class="nav-text">Tài khoản Khách hàng</span>
										</a>
										<div class="collapsible-body">
											<ul class="collapsible" data-collapsible="accordion">
												<li>
													<a href="#">
														<i class="material-icons">keyboard_arrow_right</i>
														<span>Tạo tài khoản</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="material-icons">keyboard_arrow_right</i>
														<span>Quên mật khẩu</span>
													</a>
												</li>
											</ul>
										</div>
									</li>

									<li class="bold">
										<a class="collapsible-header  waves-effect waves-cyan">
											<i class="material-icons">keyboard_arrow_right</i>
											<span class="nav-text">Tài khoản Quản trị</span>
										</a>
										<div class="collapsible-body">
											<ul class="collapsible" data-collapsible="accordion">
												<li>
													<a href="#">
														<i class="material-icons">keyboard_arrow_right</i>
														<span>Tạo tài khoản</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="material-icons">keyboard_arrow_right</i>
														<span>Quên mật khẩu</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
					</ul>
					<a href="#" data-activates="slide-out"
					   class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
						<i class="material-icons">menu</i>
					</a>
		</aside>
		<!-- END LEFT SIDEBAR NAV-->
		<!-- //////////////////////////////////////////////////////////////////////////// -->
		<!-- START CONTENT -->
		<section id="content">
			<!--start container-->
			<div class="container">
				<!--card stats start-->
				<div id="card-stats">
					<div class="row">
						<div class="col s12 m6 l3">
							<div class="card">
								<div class="card-content cyan white-text">
									<p class="card-stats-title">
										<i class="material-icons">person_outline</i> Khách hàng mới</p>
									<h4 class="card-stats-number">500</h4>
									<p class="card-stats-compare">
										<i class="material-icons">keyboard_arrow_up</i> 15%
										<span class="cyan text text-lighten-5">so với hôm qua</span>
									</p>
								</div>
								<div class="card-action cyan darken-1">
									<div id="clients-bar" class="center-align"></div>
								</div>
							</div>
						</div>
						<div class="col s12 m6 l3">
							<div class="card">
								<div class="card-content red accent-2 white-text">
									<p class="card-stats-title">
										<i class="material-icons">attach_money</i>Tổng doanh thu</p>
									<h4 class="card-stats-number">$8990.63</h4>
									<p class="card-stats-compare">
										<i class="material-icons">keyboard_arrow_up</i> 70%
										<span class="red-text text-lighten-5">so với tháng trước</span>
									</p>
								</div>
								<div class="card-action red darken-1">
									<div id="sales-compositebar" class="center-align"></div>
								</div>
							</div>
						</div>
						<div class="col s12 m6 l3">
							<div class="card">
								<div class="card-content teal accent-4 white-text">
									<p class="card-stats-title">
										<i class="material-icons">trending_up</i> Lợi nhuận hôm nay</p>
									<h4 class="card-stats-number">$806.52</h4>
									<p class="card-stats-compare">
										<i class="material-icons">keyboard_arrow_up</i> 80%
										<span class="teal-text text-lighten-5">so với năm trước</span>
									</p>
								</div>
								<div class="card-action teal darken-1">
									<div id="profit-tristate" class="center-align"></div>
								</div>
							</div>
						</div>
						<div class="col s12 m6 l3">
							<div class="card">
								<div class="card-content deep-orange accent-2 white-text">
									<p class="card-stats-title">
										<i class="material-icons">content_copy</i> Hóa đơn mới</p>
									<h4 class="card-stats-number">1806</h4>
									<p class="card-stats-compare">
										<i class="material-icons">keyboard_arrow_down</i> 3%
										<span class="deep-orange-text text-lighten-5">so với tháng trước</span>
									</p>
								</div>
								<div class="card-action  deep-orange darken-1">
									<div id="invoice-line" class="center-align"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--card stats end-->
				<!--chart dashboard start-->
				<div id="chart-dashboard">
					<div class="row">
						<div class="col s12 m8 l8">
							<div class="card">
								<div class="card-move-up waves-effect waves-block waves-light">
									<div class="move-up cyan darken-1">
										<div>
											<span class="chart-title white-text">Doanh thu</span>
											<div class="chart-revenue cyan darken-2 white-text">
												<p class="chart-revenue-total">$4,500.85</p>
												<p class="chart-revenue-per">
													<i class="material-icons">arrow_drop_up</i> 21.80 %</p>
											</div>
											<div class="switch chart-revenue-switch right">
												<label class="cyan-text text-lighten-5">
													Tháng
													<input type="checkbox">
													<span class="lever"></span> Năm
												</label>
											</div>
										</div>
										<div class="trending-line-chart-wrapper">
											<canvas id="trending-line-chart" height="70"></canvas>
										</div>
									</div>
								</div>
								<div class="card-content">
									<a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
										<i class="material-icons activator">filter_list</i>
									</a>
									<div class="col s12 m3 l3">
										<div id="doughnut-chart-wrapper">
											<canvas id="doughnut-chart" height="200"></canvas>
											<div class="doughnut-chart-status">4500
												<p class="ultra-small center-align">Sold</p>
											</div>
										</div>
									</div>
									<div class="col s12 m2 l2">
										<ul class="doughnut-chart-legend">
											<li class="mobile ultra-small">
												<span class="legend-color"></span>Mobile
											</li>
											<li class="kitchen ultra-small">
												<span class="legend-color"></span> Kitchen
											</li>
											<li class="home ultra-small">
												<span class="legend-color"></span> Home
											</li>
										</ul>
									</div>
									<div class="col s12 m5 l6">
										<div class="trending-bar-chart-wrapper">
											<canvas id="trending-bar-chart" height="90"></canvas>
										</div>
									</div>
								</div>
								<div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Revenue by Month
                        <i class="material-icons right">close</i>
                      </span>
									<table class="responsive-table">
										<thead>
										<tr>
											<th data-field="id">ID</th>
											<th data-field="month">Month</th>
											<th data-field="item-sold">Item Sold</th>
											<th data-field="item-price">Item Price</th>
											<th data-field="total-profit">Total Profit</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>1</td>
											<td>January</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>2</td>
											<td>February</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>3</td>
											<td>March</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>4</td>
											<td>April</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>5</td>
											<td>May</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>6</td>
											<td>June</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>7</td>
											<td>July</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>8</td>
											<td>August</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>9</td>
											<td>Septmber</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>10</td>
											<td>Octomber</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>11</td>
											<td>November</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										<tr>
											<td>12</td>
											<td>December</td>
											<td>122</td>
											<td>100</td>
											<td>$122,00.00</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col s12 m4 l4">
							<div class="card">
								<div class="card-move-up teal accent-4 waves-effect waves-block waves-light">
									<div class="move-up">
										<p class="margin white-text">Browser Stats</p>
										<canvas id="trending-radar-chart" height="114"></canvas>
									</div>
								</div>
								<div class="card-content  teal">
									<a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
										<i class="material-icons activator">done</i>
									</a>
									<div class="line-chart-wrapper">
										<p class="margin white-text">Revenue by country</p>
										<canvas id="line-chart" height="114"></canvas>
									</div>
								</div>
								<div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Revenue by country
                        <i class="material-icons right">close</i>
                      </span>
									<table class="responsive-table">
										<thead>
										<tr>
											<th data-field="country-name">Country Name</th>
											<th data-field="item-sold">Item Sold</th>
											<th data-field="total-profit">Total Profit</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>USA</td>
											<td>65</td>
											<td>$452.55</td>
										</tr>
										<tr>
											<td>UK</td>
											<td>76</td>
											<td>$452.55</td>
										</tr>
										<tr>
											<td>Canada</td>
											<td>65</td>
											<td>$452.55</td>
										</tr>
										<tr>
											<td>Brazil</td>
											<td>76</td>
											<td>$452.55</td>
										</tr>
										<tr>
											<td>India</td>
											<td>65</td>
											<td>$452.55</td>
										</tr>
										<tr>
											<td>France</td>
											<td>76</td>
											<td>$452.55</td>
										</tr>
										<tr>
											<td>Austrelia</td>
											<td>65</td>
											<td>$452.55</td>
										</tr>
										<tr>
											<td>Russia</td>
											<td>76</td>
											<td>$452.55</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end container-->
		</section>
		<!-- END CONTENT -->
		<!-- START RIGHT SIDEBAR NAV-->
		<aside id="right-sidebar-nav">
			<ul id="chat-out" class="side-nav rightside-navigation">
				<li class="li-hover">
					<div class="row">
						<div class="col s12 border-bottom-1 mt-5">
							<ul class="tabs">
								<li class="tab col s4">
									<a href="#activity" class="active">
										<span class="material-icons">graphic_eq</span>
									</a>
								</li>
								<li class="tab col s4">
									<a href="#chatapp">
										<span class="material-icons">face</span>
									</a>
								</li>
								<li class="tab col s4">
									<a href="#settings">
										<span class="material-icons">settings</span>
									</a>
								</li>
							</ul>
						</div>
						<div id="settings" class="col s12">
							<h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
							<ul class="collection border-none">
								<li class="collection-item border-none">
									<div class="m-0">
										<span class="font-weight-600">Notifications</span>
										<div class="switch right">
											<label>
												<input checked type="checkbox">
												<span class="lever"></span>
											</label>
										</div>
									</div>
									<p>Use checkboxes when looking for yes or no answers.</p>
								</li>
								<li class="collection-item border-none">
									<div class="m-0">
										<span class="font-weight-600">Show recent activity</span>
										<div class="switch right">
											<label>
												<input checked type="checkbox">
												<span class="lever"></span>
											</label>
										</div>
									</div>
									<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
								</li>
								<li class="collection-item border-none">
									<div class="m-0">
										<span class="font-weight-600">Notifications</span>
										<div class="switch right">
											<label>
												<input type="checkbox">
												<span class="lever"></span>
											</label>
										</div>
									</div>
									<p>Use checkboxes when looking for yes or no answers.</p>
								</li>
								<li class="collection-item border-none">
									<div class="m-0">
										<span class="font-weight-600">Show recent activity</span>
										<div class="switch right">
											<label>
												<input type="checkbox">
												<span class="lever"></span>
											</label>
										</div>
									</div>
									<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
								</li>
								<li class="collection-item border-none">
									<div class="m-0">
										<span class="font-weight-600">Show your emails</span>
										<div class="switch right">
											<label>
												<input type="checkbox">
												<span class="lever"></span>
											</label>
										</div>
									</div>
									<p>Use checkboxes when looking for yes or no answers.</p>
								</li>
								<li class="collection-item border-none">
									<div class="m-0">
										<span class="font-weight-600">Show Task statistics</span>
										<div class="switch right">
											<label>
												<input type="checkbox">
												<span class="lever"></span>
											</label>
										</div>
									</div>
									<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
								</li>
							</ul>
						</div>
						<div id="chatapp" class="col s12">
							<div class="collection border-none">
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-1.png" alt="" class="circle cyan">
									<span class="line-height-0">Elizabeth Elliott </span>
									<span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-2.png" alt=""
									     class="circle deep-orange accent-2">
									<span class="line-height-0">Mary Adams </span>
									<span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Hello Boo </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
									<span class="line-height-0">Caleb Richards </span>
									<span class="medium-small right blue-grey-text text-lighten-3">9.00 PM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Keny ! </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-4.png" alt="" class="circle cyan">
									<span class="line-height-0">June Lane </span>
									<span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Ohh God </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-5.png" alt="" class="circle red accent-2">
									<span class="line-height-0">Edward Fletcher </span>
									<span class="medium-small right blue-grey-text text-lighten-3">5.15 PM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Love you </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-6.png" alt=""
									     class="circle deep-orange accent-2">
									<span class="line-height-0">Crystal Bates </span>
									<span class="medium-small right blue-grey-text text-lighten-3">8.00 AM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Can we </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-7.png" alt="" class="circle cyan">
									<span class="line-height-0">Nathan Watts </span>
									<span class="medium-small right blue-grey-text text-lighten-3">9.53 PM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Great! </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-8.png" alt="" class="circle red accent-2">
									<span class="line-height-0">Willard Wood </span>
									<span class="medium-small right blue-grey-text text-lighten-3">4.20 AM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Do it </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-9.png" alt="" class="circle teal accent-4">
									<span class="line-height-0">Ronnie Ellis </span>
									<span class="medium-small right blue-grey-text text-lighten-3">5.30 PM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Got that </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-1.png" alt="" class="circle cyan">
									<span class="line-height-0">Gwendolyn Wood </span>
									<span class="medium-small right blue-grey-text text-lighten-3">4.34 AM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Like you </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-2.png" alt="" class="circle red accent-2">
									<span class="line-height-0">Daniel Russell </span>
									<span class="medium-small right blue-grey-text text-lighten-3">12.00 AM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
									<span class="line-height-0">Sarah Graves </span>
									<span class="medium-small right blue-grey-text text-lighten-3">11.14 PM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Okay you </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-4.png" alt="" class="circle red accent-2">
									<span class="line-height-0">Andrew Hoffman </span>
									<span class="medium-small right blue-grey-text text-lighten-3">7.30 PM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Can do </p>
								</a>
								<a href="#!" class="collection-item avatar border-none">
									<img src="images/avatar/avatar-5.png" alt="" class="circle cyan">
									<span class="line-height-0">Camila Lynch </span>
									<span class="medium-small right blue-grey-text text-lighten-3">2.00 PM</span>
									<p class="medium-small blue-grey-text text-lighten-3">Leave it </p>
								</a>
							</div>
						</div>
						<div id="activity" class="col s12">
							<h6 class="mt-5 mb-3 ml-3">Hoạt động gần đây</h6>
							<div class="activity">
								<div class="col s3 mt-2 center-align recent-activity-list-icon">
									<i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
								</div>
								<div class="col s9 recent-activity-list-text">
									<a href="#" class="deep-purple-text medium-small">just now</a>
									<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe
										Purchased new equipments for zonal office.</p>
								</div>
								<div class="recent-activity-list chat-out-list row mb-0">
									<div class="col s3 mt-2 center-align recent-activity-list-icon">
										<i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
									</div>
									<div class="col s9 recent-activity-list-text">
										<a href="#" class="cyan-text medium-small">Yesterday</a>
										<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next
											flight for USA will be on 15th August 2015.</p>
									</div>
								</div>
								<div class="recent-activity-list chat-out-list row mb-0">
									<div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
										<i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
									</div>
									<div class="col s9 recent-activity-list-text">
										<a href="#" class="green-text medium-small">5 Days Ago</a>
										<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya
											Parker Send you a voice mail for next conference.</p>
									</div>
								</div>
								<div class="recent-activity-list chat-out-list row mb-0">
									<div class="col s3 mt-2 center-align recent-activity-list-icon">
										<i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
									</div>
									<div class="col s9 recent-activity-list-text">
										<a href="#" class="amber-text medium-small">1 Week Ago</a>
										<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay
											open a new store at S.G Road.</p>
									</div>
								</div>
								<div class="recent-activity-list row">
									<div class="col s3 mt-2 center-align recent-activity-list-icon">
										<i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
									</div>
									<div class="col s9 recent-activity-list-text">
										<a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
										<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail
											for conference.</p>
									</div>
								</div>
								<div class="recent-activity-list chat-out-list row mb-0">
									<div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
										<i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
									</div>
									<div class="col s9 recent-activity-list-text">
										<a href="#" class="brown-text medium-small">1 Month Ago</a>
										<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya
											Parker Send you a voice mail for next conference.</p>
									</div>
								</div>
								<div class="recent-activity-list chat-out-list row mb-0">
									<div class="col s3 mt-2 center-align recent-activity-list-icon">
										<i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
									</div>
									<div class="col s9 recent-activity-list-text">
										<a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
										<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay
											open a new store at S.G Road.</p>
									</div>
								</div>
								<div class="recent-activity-list row">
									<div class="col s3 mt-2 center-align recent-activity-list-icon">
										<i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
									</div>
									<div class="col s9 recent-activity-list-text">
										<a href="#" class="grey-text medium-small">1 Year Ago</a>
										<p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail
											for conference.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</aside>
		<!-- END RIGHT SIDEBAR NAV-->
	</div>
	<!-- END WRAPPER -->
</div>
<!-- END MAIN -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START FOOTER -->
<footer class="page-footer">
	<div class="container">
		<div class="row section">
			<div class="col l6 s12">
				<h5 class="white-text">World Market</h5>
				<p class="grey-text text-lighten-4">World map, world regions, countries and cities.</p>
				<div id="world-map-markers"></div>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text">Sales by Country</h5>
				<p class="grey-text text-lighten-4">A sample polar chart to show sales by country.</p>
				<div id="polar-chart-holder">
					<canvas id="polar-chart-country" width="200"></canvas>
				</div>
			</div>
		</div>
	</div>
	<div class="page-footer">
		<div class="footer-copyright">
			<div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2"
                           href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span>
				<span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-2"
				                                                                   href="https://pixinvent.com/">PIXINVENT</a></span>
			</div>
		</div>
	</div>
</footer>
<!-- END FOOTER -->
<!-- ================================================
Scripts
================================================ -->
<!-- jQuery Library -->
<script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!-- chartjs -->
<script type="text/javascript" src="vendors/chartjs/chart.min.js"></script>
<!-- sparkline -->
<script type="text/javascript" src="vendors/sparkline/jquery.sparkline.min.js"></script>
<!-- google map api -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>
<!--jvectormap-->
<script type="text/javascript" src="vendors/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="vendors/jvectormap/vectormap-script.js"></script>
<!--google map-->
<script type="text/javascript" src="js/scripts/google-map-script.js"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.js"></script>
<!--card-advanced.js - Page specific JS-->
<script type="text/javascript" src="js/scripts/dashboard-analytics.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="js/custom-script.js"></script>
</body>
</html>
