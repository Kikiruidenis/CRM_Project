<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
if(isset($_POST['update']))
{
$name=$_POST['name'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$userid=$_GET['id'];
	$ret=mysqli_query($con,"update user set name='$name',mobile='$contact',gender='$gender',address='$address' where id='$userid'");
	if($ret)
	{
	echo "<script>alert('Data Updated');</script>";	
	}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Dashboard </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">	
	<?php include("leftbar.php");?>
	<div class="clearfix"></div> 
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
	</div>
  </div>
  <div class="page-content"> 
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">
         <?php $rt=mysqli_query($con,"select * from user where id='".$_GET['id']."'");
			  while($rw=mysqli_fetch_array($rt))
			  {?>	
			<h3><?php echo $rw['name'];?>'s Profile</h3>	
             
                        <form name="muser" method="post" action="" enctype="multipart/form-data">
                        
                     <table width="100%" border="0">
  <tr>
    <td height="42">Name</td>
    <td><input type="text" name="name" id="name" value="<?php echo $rw['name'];?>" class="form-control"></td>
  </tr>
  <tr>
    <td height="42">Primary Email</td>
    <td><input type="text" name="email" id="email" value="<?php echo $rw['email'];?>" class="form-control" readonly></td>
  </tr>
  <tr>
    <td height="42">Contact no.</td>
    <td><input type="text" name="contact" id="contact" value="<?php echo $rw['mobile'];?>" class="form-control"></td>
  </tr>
  <tr>
    <td height="42">Gender</td>
    <td><select name="gender" class="form-control">
    <option value="<?php echo $rw['gender'];?>"><?php echo $rw['gender'];?></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
    </select>
    
    </td>
  </tr>
  <tr>
    <td height="42">User Image</td>
<?php if($rw['user_image']==""){?>
<td><img src="../images/noimages.png" width="120" height="100"  style="border:solid 1px #000000;" title="No Image available" /></td>
<?php } else { ?>
    <td><img src="../userimages/<?php echo $rw['user_image'];?>" width="120" height="80"  style="border:solid 1px #000000;" /></td>
  <?php } ?>
  </tr>

  <tr>
    <td height="42">Address</td>
    <td><textarea name="address" cols="64" rows="4"><?php echo $rw['address'];?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="42">
                          <button type="submit" name="update" class="btn btn-primary">Save changes</button></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php } ?>
</form>
</div>
  </div>
  </div>
</div>
 </div>

</body>
</html>