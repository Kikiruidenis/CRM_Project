<?php
session_start();
//echo $_SESSION['id'];
//$_SESSION['msg'];
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_POST['send']))
{

$tid=$_POST['query_id'];
$email=$_SESSION['login'];
$subject=$_POST['subject'];
$tt=$_POST['tasktype'];
$priority=$_POST['priority'];
$query=$_POST['description'];
//$ticfile=$_FILES["tfile'"]["name"];
$st="Open";
$pdate=date('Y-m-d');
//move_uploaded_file($_FILES["tfile"]["tmp_name"],"ticketfiles/".$_FILES["tfile"]["name"]);
$a=mysqli_query($con,"insert into query(query_id,email_id,subject,task_type,prority,query,status,posting_date)  values('$tid','$email','$subject','$tt','$priority','$query','$st','$pdate')");
if($a)
{
echo "<script>alert('query Genrated');</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Create  Query</title>
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
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">	
	<?php include("leftbar.php");?>
	<div class="clearfix"></div>
  </div>
  </div>
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
      </div>
      <div class="modal-body"> </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">	
			<h3>Create a Query</h3>
             <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" name="form1" method="post" action="" onSubmit="return valid();">
                            <div class="panel panel-default">
                                <div class="panel-body">                                                                        
                                    <p align="center" style="color:#FF0000"></p>
                               <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Subject</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="subject" id="subject" value="" required class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Task Type</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select  name="tasktype" class="form-control select" required>
                                                <option> Select your Task Type</option>
                                                <option value="billing">Billing</option>
                                                <option value="ot1">Availability of service</option>
                                                <option value="ot2">Make enquiries</option>
                                                <option value="ot3">other</option>
                                            </select>
                                           </div>
                                    </div>
										 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Priority</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="priority" class="form-control select">
                                                <option value="">Choose your Priority</option>
                                                <option value="important">Important</option>
                                                <option value="urgent(functional problem)">Urgent (Functional Problem)</option>
                                                <option value="non-urgent">Non-Urgent</option>
                                                <option value="question">Just a question</option>
                                            </select>
                                           </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Description</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea name="description" required class="form-control" rows="5"></textarea>
                                            
                                        </div>
                                    </div>
                                    </div>
                                </div>
								
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <input type="submit" value="Send" name="send" class="btn btn-primary pull-right">
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                     	
		</div>
    </div>
  </div>

 </div>

</body>
</html>