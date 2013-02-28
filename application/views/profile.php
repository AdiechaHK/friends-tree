
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
        <div class="row-fluid">
          <div class="span3">[IMAGE]</div>
          <div class="span9">
            <div class="row-fluid">
              <div class="span4"><strong>Name:</strong></div>
              <div class="span8"><?php echo $user->name . " " . $user->sname; ?></div>
            </div>
            <div class="row-fluid">
              <div class="span4"><strong>Gender:</strong></div>
              <div class="span8"><?php echo $user->gender; ?></div>
            </div>
            <div class="row-fluid">
              <div class="span4"><strong>Email:</strong></div>
              <div class="span8"><?php echo $user->email; ?></div>
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12">
            <a class="pull-right" href=<?php echo "'" . site_url("user/profile_edit") . "'"; ?>>Edit</a>
          </div>
        </div>
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