<html>
<head>
	<title>Welcome to Friendstree</title>
	<link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/css/bootstrap.css")."'";?>>
	<link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/css/bootstrap-responsive.css")."'";?>>
</head>
<body>
<div style="background-color:#99f">

<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container">
			<a href="#" class="brand">Friendstree</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="span6">
			<strong>here will be our signup</strong>
		</div>
		<div class="span6">
			<div class="hero-unit">
				<?php echo form_open("user/signin",array('class' =>'form-horizontal'));?>
				<h1>Welcome</h1>
			</form>
			</div>
		</div>
	</div>

</div>
</body>
</html>