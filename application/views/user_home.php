
<html>
<head>
  <title>Welcome to Friendstree</title>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/css/bootstrap.css")."'";?>>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/css/bootstrap-responsive.css")."'";?>>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/js/jquery-1.9.1.min.js")."'";?>>
  <link rel="shortcut icon" href=<?php echo "'" . base_url("public/img/favicon.ico"). "'"; ?> type="image/x-icon">
  <script type="text/javascript" src=<?php echo "'".base_url("public/js/jquery-1.9.1.min.js")."'";?>></script>
  <script type="text/javascript" src=<?php echo "'".base_url("public/js/bootstrap.js")."'";?>></script>
  <script type="text/javascript" src=<?php echo "'".base_url("public/js/core.js")."'";?>></script>
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
                  <a href=<?php echo "'" . site_url() . "'"; ?> class="brand">Friendstree</a>
                  <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav pull-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href=<?php echo "'" . site_url("user/profile") . "'"; ?>>Profile</a></li>
                          <li><a href="#">Settings</a></li>
                          <li class="divider"></li>
                          <li><a href=<?php echo "'" . site_url("user/sign_out") . "'"; ?>>Sign Out</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
<!-- <div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a href="#" class="brand">Friendstree</a>
    </div>
  </div>
</div>
 --><div class="container">
  <div class="row">
    <div class="span12">
      <div class="hero-unit">
        <?php echo form_open("user/signin",array('class' =>'form-horizontal'));?>
        <h1>Welcome</h1><br>
        <p>Home page is under designing.</p>
      </form>
      </div>
    </div>
  </div>

</div>
<script type="text/javascript">
$(document).ready(function(){
  $('.dropdown-toggle').dropdown();
});
</script>
</body>
</html>