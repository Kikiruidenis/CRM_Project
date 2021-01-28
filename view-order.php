<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | View Orders</title>
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
<link href="admin/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/
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
      </div>
      <div class="modal-body"> </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <a href="#" class="active">Orders</a>
      
        <h3>View Your Orders</h3>
      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Table <span class="semi-bold"></span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-hover table-condensed" id="example">
                <thead>
                  <tr>
                    <th style="width:1%">ID</th>
                    <th style="width:10%">Name</th>
                    <th style="width:10%">Description</th>
                    <th style="width:10%" data-hide="phone,tablet">Price</th>
                    <th style="width:10%">Quantity</th>
                    <th style="width:20%" data-hide="phone,tablet">Total Price</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php 
                $uid= $_SESSION['id'];
                // SELECT * FROM `order` WHERE `uid` = 6
                $ret=mysqli_query($con,"SELECT * FROM `order` WHERE `uid` = $uid");
				$cnt=0;
				while($row=mysqli_fetch_array($ret))
				{?>
         <tr >
                    <td class="v-align-middle"><?php echo $row['id'];?></td>
                    <td class="v-align-middle"><?php echo $row['name'];?></td>
                    <td class="v-align-middle"><?php echo $row['desc'];?></td>
                    <td class="v-align-middle"><?php echo $row['price'];?></td>
                    <td class="v-align-middle"><?php echo $row['quantity'];?></td>
                    <td><span class="muted"><?php echo $row['subtotal'];?></span></td>
                    
                    
                 <?php $cnt=$cnt+1; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
   
</div>
</body>
</html>
