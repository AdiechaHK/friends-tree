<html>
<head>
  <title>Friendstree signup page</title>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/css/bootstrap.css")."'";?>>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/css/bootstrap-responsive.css")."'";?>>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/js/jquery-1.9.1.min.js")."'";?>>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/js/bootstrap.min.js")."'";?>>
  <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/js/core.js")."'";?>>
  <link rel="shortcut icon" href=<?php echo "'" . base_url("public/img/favicon.ico"). "'"; ?> type="image/x-icon">
  <style type="text/css">
  .hero-unit {
    margin-top: 70px;
    padding-bottom: 0px;
    padding-top: 20px;
  }
  </style>
</head>
<body style="background-color:green">
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a href=<?php echo "'" . site_url() . "'"; ?> class="brand">Friendstree</a>
    </div>
  </div>
</div>


<div class="container">
  <div class="hero-unit span6 offset2">
    <?php echo form_open("user/sign_in", array('class' => 'form-horizontal'));?>
    <fieldset>
      <div id="legend">
        <legend class="">Sign-In for Friendstree</legend>
      </div>


        <div class="control-group">
          <label class="control-label" for="email">E-mail:</label>
          <div class="controls">
              <input id="email" type="text" name="email" placeholder="Example@domain.com" class="input-xlarge" style="height:28px">
            </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="password">Password:</label>
          <div class="controls">
              <input id="password" type="password" name="password" class="input-xlarge" style="height:28px">
            </div>
        </div>

        <div class="control-group">
            <div class="form-actions">
              <button type="submit" class="btn btn-success input-xlarge">Sign In</button>
            </div>
        </div>
    </fieldset>
    </form>
  </div>
</div>


</div>
</body>
</html>