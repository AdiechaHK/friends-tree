<html>
<head>
    <title>Friendstree signup page</title>
    <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/css/bootstrap.min.css")."'";?>>
    <link rel="stylesheet" type="text/css" href=<?php echo "'".base_url("public/css/bootstrap-responsive.min.css")."'";?>>
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
<div>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a href=<?php echo "'" . site_url() . "'"; ?> class="brand">Friendstree</a>
        </div>
    </div>
</div>


<div class="container" >
    <div class="hero-unit span6 offset2">
        <?php echo form_open("user/sign_up", array('class' => 'form-horizontal', 'id'=> 'sign-up-form'));?>
        <fieldset>
            <div id="legend">
                <legend class="">Sign-up for Friendstree</legend>
            </div>

        <div class="control-group">
            <label class="control-label" for="input01">Name:</label>
            <div class="controls">
                <input type="text" name="name" placeholder="Johnny" class="input-xlarge" style="height:28px">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="input01">Sir Name:</label>
            <div class="controls">
                <input type="text" name="sname" placeholder="Bravo" class="input-xlarge" style="height:28px">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="input01">E-mail:</label>
            <div class="controls">
                <input class="email" type="text" name="email" placeholder="Example@domain.com" class="input-xlarge" style="height:28px">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="input01">Password:</label>
            <div class="controls">
                <input type="password" name="password" class="input-xlarge" style="height:28px">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="input01">Confirm Password:</label>
            <div class="controls">
                <input type="password" class="input-xlarge" style="height:28px">
            </div>
        </div>

        <div class="control-group">

            <label class="control-label">Gender:</label>
                <div class="controls">
                    <select class="input-xlarge" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
        </div>

        <div class="control-group">
            <div class="form-actions">
                <button type="submit" class="btn btn-success input-xlarge">Create account </button>
            </div>
        </div>
    </fieldset>
        </form>
    </div>
</div>


</div>
</body>
</html>