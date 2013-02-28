<html>
<head>
	<title>Welcome to Friendstree</title>
	<link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/css/bootstrap.css")."'";?>>
	<link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/css/bootstrap-responsive.css")."'";?>>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/js/jquery-1.9.1.min.js")."'";?>>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/js/bootstrap.min.js")."'";?>>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/js/core.js")."'";?>>
  <link rel="shortcut icon" href=<?php echo "'" . base_url("public/img/favicon.ico"). "'"; ?> type="image/x-icon">
  <style type="text/css">
  .hero-unit {
    margin-top: 70px;
    padding-bottom: 20px;
    padding-top: 20px;
  }
  </style>

</head>
<body style="background-color:green;">
<div>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a href="#" class="brand">Friendstree</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="hero-unit">
				<?php echo form_open("user/signin",array('class' =>'form-horizontal'));?>
				<h1>Welcome</h1><br>
				<p><a href=<?php echo "'" . site_url('welcome/sign_up') . "'"; ?>>Sign Up</a> or <a href=<?php echo "'" . site_url('welcome/sign_in') . "'"; ?>>Sign In</a></p>
			</form>
			</div>
		</div>
	</div>

</div>
</body>
</html>