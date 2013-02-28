
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
        <?php echo form_open("user/profile_save", array('class' => 'form-horizontal'));?>

       <fieldset>
            <div id="legend">
                <legend class="">Edit Profile</legend>
            </div>
        <div class="control-group">
            <label class="control-label" for="input01">Name:</label>
            <div class="controls">
                <input type="text" name="name" placeholder="Johnny" class="input-xlarge" style="height:28px" value=<?php echo $user->name; ?>>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="input01">Sir Name:</label>
            <div class="controls">
                <input type="text" name="sname" placeholder="Bravo" class="input-xlarge" style="height:28px" value=<?php echo $user->sname; ?>>
            </div>
        </div>

        <div class="control-group">

            <label class="control-label">Gender:</label>
                <div class="controls">
                    <select class="input-xlarge" name="gender" value=<?php echo $user->gender; ?>>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
        </div>


        <div class="control-group">
            <div class="form-actions">
                <button type="submit" class="btn btn-success input-xlarge">Save Changes</button>
            </div>
        </div>
    </fieldset>

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