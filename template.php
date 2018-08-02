<html style="overflow-x: hidden;">
<head>
  <meta http-equiv="x-ua-compatible" content="IE=edge"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="Bootstrap/css/bootstrap.css"/>
    <!--[if !IE]>--><div id="bodyContainer" class="W3C">
        <link rel="stylesheet" href="siteC.css"/>
    <!--<![endif]-->
    <!--[if IE]>-->
        <link rel="stylesheet" href="site.css" />
     <!--<![endif]-->
    </script>
  	<script type="text/javascript" src="jQuery.js"></script>
  	<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="modal.js"></script>
    <title><?php echo $title; ?></title>
</head>
<nav class="navbar navbar-alt navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">
      <span style="font-size:28px;"><span style="color: white;"><span style="font-style:italic;">Nihon</span>&#8203;
    </span></span>
      <span style="font-size:28px;"><span style="color: white;"><span style="font-style:italic;">Works</span>&#8203;
    </span></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if($title == "Home"){ echo 'class="active"';} ?>><a href="index.php">Home</a></li>
        <li <?php if($title == "Find A Job"){ echo 'class="active"';} ?> ><a href="jobs.php">Find A Job</a></li>
        <li <?php if($title == "Find Talent"){ echo 'class="active"';} ?>><a href="FindTalent.php">Find Talent</a></li>
        <li <?php if($title == "About"){ echo 'class="active"';} ?>><a href="About.php">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a onclick="openLoginModal()" href="#"><span class="glyphicon glyphicon-log-in"></span><span> Login</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
	<?php echo $content; ?>
</body>
<footer class="site-footer">
	&copy; Copyright 2018
</footer>
</html>