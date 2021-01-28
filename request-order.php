<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
error_reporting(0);
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$city=$_POST['city'];
	$wdd=$_POST['wdd'];
	$ld=$_POST['ld'];
	$seo=$_POST['seo'];
	$cim=$_POST['cim'];
	$ed=$_POST['ed'];
	$sa=$_POST['sa'];
	
mysqli_query($con,"insert into orders(name,email,contactno,city,wdd,ld,seo,cim,ed,sa) values('$name','$email','$contact','$city','$wdd','$ld','$seo','$cim','$ed','$sa')");
$_SESSION['msg']="Order Send";
}

$fields = array("live"=> "0",
"oid"=> "112",
"inv"=> "112020102292999",
"ttl"=> "0",
"tel"=> "0700583879",
"eml"=> "kajuej@gmailo.com",
"vid"=> "demo",
"curr"=> "KES",
"p1"=> "airtel",
"p2"=> "020102292999",
"p3"=> "",
"p4"=> "900",
"cbk"=> "http://localhost/CRM_Project/request-order.php",
"cst"=> "1",
"crl"=> "2"
);

$fields['ttl'] = "100";
$datastring =  $fields['live'].$fields['oid'].$fields['inv'].$fields['ttl'].$fields['tel'].$fields['eml'].$fields['vid'].$fields['curr'].$fields['p1'].$fields['p2'].$fields['p3'].$fields['p4'].$fields['cbk'].$fields['cst'].$fields['crl'];
$hashkey ="demoCHANGED";//use "demoCHANGED" for testing where vid is set to "demo"

$generated_hash = hash_hmac('sha1',$datastring , $hashkey);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Request Quote</title>
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
<link href="admin/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"
</head>
<body class="">

<?php echo $fields['ttl']; ?>
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
			<h3>Request an order</h3>
             <div class="row">
                        <div class="col-md-12">
                            <form action="https://payments.ipayafrica.com/v3/ke" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                 <p style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                                <div class="panel-body">
                                    <p>Please click below mention services of your interest to receive quotation for the same:</p>
                                </div>
                                <div class="panel-body">  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Name </label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="name" class="form-control" required/>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Contact no</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="contact" class="form-control" required/>
                                                    </div>            
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Email</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="email" name="email" class="form-control datepicker" value="" required>                                            
                                                    </div>
                                                </div>
                                            </div>
                                               <div class="form-group">                                        
                                                <label class="col-md-3 control-label">City</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="company" class="form-control datepicker" value="" required>                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                             <label class="col-md-3 control-label">Service Required :</label>
                                                <div class="col-md-9">  
                                                                                                                                                                                      
                                             <label class="check">Price $20<br>

                                             <input type="checkbox" class="icheckbox" name="wdd" value="Website Design & Development" /> Website Design & Development</label><br>
                                             <label class="check">Price $12<br>

                                             <input type="checkbox" class="icheckbox" name="ld" value="Logo Design" />Logo Design</label><br>
                                             <label class="check">Price $18<br>

                                             <input type="checkbox" class="icheckbox" name="seo" value="Search Engine Optimization" /> Search Engine Optimization  </label><br>
                                             <label class="check"> Price $42<br>

                                             <input type="checkbox" class="icheckbox" name="cim" value="CCTV Installation & Maintanance" /> CCTV Installation & Maintanancet  </label><br>
                                             <label class="check">Price $56<br>
                                             <input type="checkbox" class="icheckbox" name="ed" value="Electronic Devices" /> Electronic Device</label><br>
                                             <label class="check"> Price $34<br>
                                             <input type="checkbox" class="icheckbox" name="sa"  value="Security Alarm"/> Security Alarm</label><br>
                                        <div style="margin-top:20px;" class="col-md-6">
                                         <div class="form-group">
                                                <label class="col-md-3 control-label">Comment</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="query" required></textarea>
                                                </div>
                                            </div></div>
                                        
                                    </div>

                                </div>
                                <div class="panel-foote">
                                <?php  
                 foreach ($fields as $key => $value) {
                    //  echo $key;
                    //  echo ' :<input name="\'.$key.\'" type="text" value="\'.$value.\'"></br>';
                     echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';

                 }
                ?>
                                <INPUT name="hsh" type="hidden" value="<?php echo $generated_hash ?>">
                                <input value="Make Payment" type="submit" name="Make Payment" class="btn btn-primary pull-right">
                                                                   
                                    
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>  	
		</div>
    </div>
  </div>
</body>
</html>