<?php
include "../assets/php/connection/connection.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Magigilas</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			// google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	<script type="text/javascript">
		tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
		tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
		
		function GetClock(){
		var d=new Date();
		var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
		if(nyear<1000) nyear+=1900;
		var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
		
		if(nhour==0){ap=" AM";nhour=12;}
		else if(nhour<12){ap=" AM";}
		else if(nhour==12){ap=" PM";}
		else if(nhour>12){ap=" PM";nhour-=12;}
		
		if(nmin<=9) nmin="0"+nmin;
		if(nsec<=9) nsec="0"+nsec;
		
		document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
		}
		
		window.onload=function(){
		GetClock();
		setInterval(GetClock,1000);
		}
		

	</script>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" style="background-color:#43a047">
				<a style="color:white"></a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" style="background-color:#4caf50">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">

					</div>

				</div>
		
				<div>
					<ul class="navbar-nav mr-auto">
						<li style="color:white;"><h5 id="clockbox" class="white-text right" ></h5></li>
					</ul>			
				</div>
					
			
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" style="background-color:#1E282C">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<h2 class="fas fa-user" style="color:white;"></h2>
						</div>
						<div class="info">
							<a  data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									
									<span style="color:white;" class="user-level"></span>
									<span style="color:white;" class="user-level"></span>
									<span style="color:white;" class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="../assets/php/logout.php">
											<span class="link-collapse">Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary" >

						<li class="nav-item">
							<a href="index.php">
								<i class="fas fa-home"></i>
								<p style="color:white;">Home</p>
								
							</a>

						</li>
						<li class="nav-item">
							<a  data-toggle="collapse" href="#add" >
								<i class="fas fa-plus"></i>
								<p style="color:white;">Add</p>
								<span class="caret"></span>
								
							</a>
							<div  class="collapse" id="add">
								<ul class="nav nav-collapse">
									<li>
										<a href="dealerinfo.php">
											<span style="color:white;" class="sub-item">Add Dealer</span>
										</a>
									</li>							
									<!-- <li>
										<a href="checkvoucher.php">
											<span style="color:white;" class="sub-item">Check Voucher</span>
										</a>
									</li>														 -->
								</ul>
							</div>

						</li>



					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->