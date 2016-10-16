<html>
<head>
        <meta charset="utf-8">
	<title>admin</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
        <link id="bootstrap-style" href="<?php echo ADMIN_DOMAIN  ?>public/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo ADMIN_DOMAIN  ?>public/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo ADMIN_DOMAIN  ?>public/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo ADMIN_DOMAIN  ?>public/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
    </head>
<body>   
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span><image src="<?php echo ADMIN_DOMAIN  ?>public/img/logo.png"></span></a>
								
				<!-- start: Header Menu -->
                   <ul class="nav pull-right">
						<!-- start: User Dropdown -->
			<li class="dropdown">
			<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> Dennis Ji
                            <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li class="dropdown-menu-title">
 					<span>Account Settings</span>
				</li>
				<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
				<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
			</ul>
                    </li>
						<!-- end: User Dropdown -->
		</ul>
	</div>
				<!-- end: Header Menu -->
				
    </div>
</div>
