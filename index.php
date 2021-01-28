<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
$ret=mysqli_query($con,"SELECT * FROM user WHERE email='".$_POST['email']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['name'];
$val3 =date("Y/m/d");
date_default_timezone_set("East Africa/Nairobi");
$time=date("h:i:sa");
$tim = $time;
$ret=mysqli_query($con,"insert into usercheck(logindate,logintime,user_id,username,email)values('".$val3."','".$tim."','".$_SESSION['id']."','".$_SESSION['name']."','".$_SESSION['login']."')");

$extra="product/index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="Invalid username or password";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />


<link href="admin/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="admin/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
        <div class="col-md-5 col-md-offset-1">
          <h2>Sign in to CRM</h2>
          <p> <a href="registration.php">Register!</a> to Seculance System Group..</p>
          <p>Sign in as  <a href="admin/index.php">Admin!</a></p>
        </div>
        <div class="col-md-5 "> <br>
             <p style="color:#F00"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
		 <form id="login-form" class="login-form" action="" method="post">
		 <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Username</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="text" name="email" id="txtusername" class="form-control">                                 
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Password</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="password" name="password" id="txtpassword" class="form-control">                                 
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="control-group  col-md-10">
            <div class="checkbox checkbox check-success"> <a href="forgot-password.php">Forgot Password </a>&nbsp;&nbsp;
         </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <button class="btn btn-primary btn-cons pull-right" name="login" type="submit">Login</button>
            </div>
          </div>
		  </form>
        </div>
  </div>
</div>
</body>
</html>