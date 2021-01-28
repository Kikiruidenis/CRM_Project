<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_POST['remark']))
{
	$msg=mysqli_query($con,"update order set remark='".$_POST['adminremark']."' where id='".$_GET['id']."'");
	if($msg)
	{
	echo "<script>alert('Remark Updated');</script>";	
	}
}
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Admin |Order Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php");?>

<div class="page-container row"> 
  
      <?php include("leftbar.php");?>
    
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="page-content"> 
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3></h3>
      </div>
      <div class="modal-body"> </div>
    </div>

    <div class="clearfix"></div>
    <div class="content">                           
		<h3>Order Details</h3>	
	</div>
 	<?php
    $ret=mysqli_query($con,"select * from orders where id='".$_GET['id']."'");
	while($row=mysqli_fetch_array($ret))
	{
	
	?>
      			<div class="row">
					<div class="col-md-12">
						    <div class="grid simple vertical green">
							<div class="grid-title no-border">
								<h4><?php echo $row['name'];?>'s Order <span class="semi-bold">Details</span></h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#grid-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="grid-body no-border">
								<div class="row-fluid ">
									    <address class="margin-bottom-20 margin-top-10">
											<strong>Name</strong>:
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['name'];?><br>
                                            <strong>Email</strong>:
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['email'];?><br>
                                            <strong>Contact no.</strong>:
											&nbsp;<?php echo $row['contactno'];?><br>
											<strong>city</strong>:
											&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['city'];?><br>
										</address>	
                                        <address class="margin-bottom-20 margin-top-10">
											<strong>Required Services</strong><br>
											<?php echo $row['wdd'];?><br>
                    <?php echo $row['ld'];?>
                    <?php echo $row['seo'];?>
                    <?php echo $row['cim'];?>
                    <?php echo $row['ed'];?>
                    <?php echo $row['sa'];?>
											
										</address>										 
										<address>
										</address>
                                        <form name="remark" action="" method="post" enctype="multipart/form-data">
                                        <address>
											<strong>Remark</strong><br>
										<textarea name="adminremark" cols="70" rows="4"></textarea><br /><br />
                                        <input type="submit" name="remark" value="Submit" />
										</address>
                                        </form>
								</div>
							</div>
						</div> 
					</div>
				</div>
      			<?php } ?>
				
			
				</div>					
			 </div>			
        </div>    	
	</div> 
  </div>  
</div>
</body>
</html>