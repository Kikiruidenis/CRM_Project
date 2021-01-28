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
<title>Admin | Manage Orders</title>
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
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <a href="#" class="active">Orders</a> </li>
  
        <h3>Manage User Order</h3>
      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Table <span class="semi-bold">Styles</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-hover table-condensed" id="example">
                <thead>
                  <tr>
                    <th style="width:1%">ID</th>
                    <th style="width:10%">Customer Email</th>
                    <th style="width:10%" data-hide="phone,tablet">Product Name</th>
                    <th style="width:10%">Description</th>
                    <th style="width:20%" data-hide="phone,tablet">Price</th>
                    <th style="width:20%" data-hide="phone,tablet">Quantity</th>
                    <th style="width:20%" data-hide="phone,tablet">Total Price</th>
                    <th style="width:10%">Action </th>
                  </tr>
                </thead>
                <tbody>
                <?php $ret=mysqli_query($con,"select * from orders order by id desc");
				$cnt=0;
				while($row=mysqli_fetch_array($ret))
				{?>
         <tr >
                    <td class="v-align-middle"><?php echo $cnt;?></td>
                    <td class="v-align-middle"><?php echo $row['user_email'];?></td>
                    <td class="v-align-middle"><span class="muted"><?php echo $row['name'];?></span></td>
                    <td><span class="muted"><?php echo $row['desc'];?></span></td>
                    <td><span class="muted"><?php echo $row['price'];?></span></td>
                    <td><span class="muted"><?php echo $row['quantity'];?></span></td>
                    <td><span class="muted"><?php echo $row['subtotal'];?></span></td>
                    
                      <td><a href="order-detail.php?id=<?php echo $row['id'];?>"><button class="btn-danger-dark">View</button></a></td>
                  </tr>
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
