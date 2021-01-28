<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="admin/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="admin/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css">
</head>
<script language="javascript" type="text/javascript">
function valid()
{
if(document.form1.oldpass.value=="")
{
alert(" Old Password Field Empty !!");
document.form1.oldpass.focus();
return false;
}
else if(document.form1.newpass.value=="")
{
alert(" New Password Field Empty !!");
document.form1.newpass.focus();
return false;
}
else if(document.form1.confirmpassword.value=="")
{
alert(" Re-Type Password Field Empty !!");
document.form1.confirmpassword.focus();
return false;
}
else if(document.form1.newpass.value.length<6)
{
alert(" Password Field length must be atleast of 6 characters !!");
document.form1.newpass.focus();
return false;
}
else if(document.form1.confirmpassword.value.length<6)
{
alert(" Re-Type Password Field less than 6 characters !!");
document.form1.confirmpassword.focus();
return false;
}
else if(document.form1.newpass.value!= document.form1.confirmpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.form1.newpass.focus();
return false;
}
return true;
}
</script>
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
			<h3>Change your Password</h3>	
            <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" name="form1" method="post" action="" onSubmit="return valid();">
                            <div class="panel panel-default">
                               
                             
                                <div class="panel-body">                                                                        
                                    <p align="center" style="color:#FF0000"></p>
                               <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Current Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" name="oldpass" id="oldpass" value="" class="form-control"/>
                                            </div>            
                                        
                                        </div>
                                    </div>
									  <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">New Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" name="newpass" id="newpass" value="" class="form-control"/>
                                            </div>            
                                          </div>
                                    </div>
									 <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Confirm Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" name="confirmpassword"  id="confirmpassword" class="form-control"/>
                                            </div>            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <input type="submit" value="Change" name="change" class="btn btn-primary pull-right">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>                    
		</div>
    </div>
  </div>
</div>
 </div>

</body>
</html>