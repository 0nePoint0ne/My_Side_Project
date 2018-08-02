<?php
function headerPart(){
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="site.css">
  	<script type="text/javascript" src="jQuery.js"></script>
  	<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="modal.js"></script>
</head>
<div id = "nav">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="jobs.php">Find A Job</a></li>
        <li><a href="#">Find Talent</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a onclick="openLoginModal()" href="#"><span class="glyphicon glyphicon-log-in"></span><span>Login</span></a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<?php
}




function searchForm(){
?>
<body id="test">
<div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
<?php
}

function test(){
?>
<script>

</script>

<button onclick="openLoginModal()" id="myBtn">Open Modal</button>
<div id="myModal" class="modal-alt">

  <!-- Modal content -->
  <div class="modal-content-alt">
    <div class="modal-header-alt ">
      <p class="white-text"><span class="glyphicon glyphicon-log-in"></span>Login</p>
    </div>
    <div class="modal-body=alt">
    <form>
      <ul>
      <li>
      <input type="text" placeholder="Email"/>
    </li>
    <li>
      <input type="password" placeholder="password" />
    </li>
    <li>
      <input type="button" value="Login"/>
      <a href="#">forgot Password</a>
    </li>
      </ul>
    </form>
  </div>
  </div>

</div>
<?php
}
?>
