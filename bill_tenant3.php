<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());
require_once('session1.php');
$numb=1;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="navbar-fixed-top.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	
	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/alert.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
 	<link rel="shortcut icon" href="assets/img/calculator.png">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <title>Student Bill</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
      <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="span3">&nbsp;&nbsp;&nbsp;&nbsp;<img class="index_logo" height="45" width="45" src="assets/img/logosmall.png"><font color="white"><b>LITTLE FLOWER PUBLIC SCHOOL,YAMUNA VIHAR</b></font></div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;<?php
				//Check to see if the user is logged in.
				
				if(isset($_SESSION['fname']))
				{ 
				echo 
				"".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
				}

				?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
					<li>
                        <a href="manage_account.php"><i class="fa fa-users fa-lg"></i>&nbsp;Accounts</a>
                    </li>
					<li class="divider"></li>
                    <li>
                        <a href="session_logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a>
                    </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demon"><i class="fa fa-sitemap fa"></i> Class <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demon" class="collapse">
							<li>
                                <a href="processAdd_room.php" class="glyphicon glyphicon-plus">&nbsp;Add Class</a>
                            </li>
                            <li>
                                <a href="view_room.php" class="glyphicon glyphicon-eye-open">&nbsp;View Class</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-users fa-lg"></i> Student <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
							<li>
                                <a href="register.php" class="glyphicon glyphicon-plus">&nbsp;Add Student</a>
                            </li>
                            <li>
                                <a href="tenant_room.php" class="glyphicon glyphicon-eye-open">&nbsp;View Student</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="rental.php"><i class="glyphicon glyphicon-import"></i>&nbsp; Transport Fee</a>
                    </li>
					<li>
                        <a href="water.php"><i class="glyphicon glyphicon-tint"></i>&nbsp;Admission Fee</a>
                    </li>
					<li>
                        <a href="electric_bill.php"><i class="glyphicon glyphicon-import"></i>&nbsp;Reports</a>
                    </li>
					
					<li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demor"><i class="glyphicon glyphicon-usd"></i> Bill <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demor" class="collapse">
							<li><a href="bill_tenant.php" class="glyphicon glyphicon-eye-open">&nbsp;View</a></li>
                            <li><a href="billed.php" class="glyphicon glyphicon-usd">&nbsp;Billed</a></li>
                        </ul>
                    </li>
					<li><a href="tenant_log.php"><i class="glyphicon glyphicon-sort"></i> Student Logs</a></li>
	                <li><a href="about_us.php"><i class="glyphicon glyphicon-info-sign"></i> About Us</a></li>
                 </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

			</body>
                <!-- Page Heading -->
			<nav>
			<head>
			<div id="page-wrapper">
			<div class="container-fluid">
			<div class="span7" id="">  
            <div class="row-fluid">
                        <!-- block -->						
                        <div id="block_bg" class="block">							
                            <div class="block-content collapse in">
                                <div class="span12">
							
								<form action = "bill_tenant.php" method="post">
								<b>Student ID:</b>&nbsp&nbsp&nbsp&nbsp
								<input type="text" name="regnum"><br>
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								<input type="submit" name="submit">
								<br><br><br><br>
								</form>
								
								
								
								<?php
	$number = "";
	$auth=0;
	$forTenantid=2;
	if(isset($_POST['submit'])){
	$number = $_POST['regnum'];
	mysql_query("UPDATE room SET new ='$number' where room.room_id='$forTenantid'")or die(mysql_error());
	
	}
	$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$number'")or die(mysql_error());
	$row = mysql_fetch_array($user_query);

	$firname = $row['fname'];
	$tenant_id=$row['tenant_id'];
	$roomid=$row['room_id'];

	$query_room = mysql_query("SELECT room_name FROM room WHERE room.room_id = '$roomid'")or die(mysql_error());
	$rooms=mysql_fetch_array($query_room);
	$amountsub=0;
	$forAmount=1;
	if(isset($_POST['submit1'])){
		
		unset($_POST['submit1']);
		$amountsub=$_POST['amountsub'];
		$transactionInfo=$_POST['transactionInfo'];
		$fine=$_POST['fine'];
		$monname = $_POST['monname'];
		$payment_mode = $_POST['payment_mode'];


		mysql_query("UPDATE room SET new ='$amountsub' where room.room_id='$forAmount'")or die(mysql_error());
		$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
		$asdf = mysql_fetch_array($user_q);
		$tenant_id= $asdf['new'];
		
		$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
		$asdf1 = mysql_fetch_array($user_q1);
		$ammpaid= $asdf1['new'];		
		
		$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
		$row = mysql_fetch_array($user_query);
		$varx=$row['room_id'];
		
		$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
		$abcd = mysql_fetch_array($user_query12);
		$rental = $abcd['rental'];
		$rental1= $abcd['rental1'];
		$rental2= $abcd['rental2'];
		$rental3= $abcd['rental3'];
		$rental4= $abcd['rental4'];
		$rental5= $abcd['rental5'];
		$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
		$total =$net;		
		$du=$total-$ammpaid;
		//echo "Number=".$tenant_id."amount paid=".$ammpaid."net=".$total;
		mysql_query("UPDATE months SET month='$tenant_id' where months.mon_id='13'")or die(mysql_error());
		mysql_query("UPDATE months SET month='$ammpaid' where months.mon_id='14'")or die(mysql_error());
		$ax="due";
		//mysql_query("UPDATE tenant SET $ax ='$du' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
		
		$nammon="";
		if($monname==1){
			$nammon="Jan";
		}else if($monname==2){
			$nammon="Feb";
		}else if($monname==3){
			$nammon="Mar";
		}else if($monname==4){
			$nammon="Apr";
		}else if($monname==5){
			$nammon="May";
		}else if($monname==6){
			$nammon="Jun";
		}else if($monname==7){
			$nammon="Jul";
		}else if($monname==8){
			$nammon="Aug";
		}else if($monname==9){
			$nammon="Sep";
		}else if($monname==10){
			$nammon="Oct";
		}else if($monname==11){
			$nammon="Nov";
		}else if($monname==12){
			$nammon="Dece";
		} 
		$us = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
		$qa = mysql_fetch_array($us);
		$az= $qa[$nammon];
		$do= $az+$amountsub;
				$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
//echo  $date->format( 'H:i:s A  /  D, M jS, Y' );
$tim = $date->format( 'Y-m-d H:i:s' );

$mydatetime = $tim;
$datetimearray = explode(" ", $mydatetime);
$date = $datetimearray[0];
$time = $datetimearray[1];
$reformatted_date = date('d-m-Y',strtotime($date));
$reformatted_time = date('H:i:s',strtotime($time));


		$dii=date("d/m/Y");
		//echo $dii;
		mysql_query("UPDATE tenant SET $nammon='$do' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
		mysql_query("UPDATE tenant SET daat='$dii' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
		mysql_query("UPDATE tenant SET timeStamp='$tim' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
		mysql_query("UPDATE tenant SET amtpaid='$amountsub' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
		mysql_query("UPDATE tenant SET trn_id='$transactionInfo' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
		mysql_query("UPDATE tenant SET paym_mode='$payment_mode' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
		
		//-----------------------Anmol----------------------------------
		
		mysql_query("INSERT into payment_record Values('','$tenant_id','$dii','$amountsub','$transactionInfo','$payment_mode','$tim','$nammon','','$fine')") or die(mysql_error());
		//-----------------------Anmol----------------------------------


		$qr1 = "SELECT * FROM bill WHERE bill.bill_id = '$tenant_id'";
		 $prevResult = mysql_query($qr1);
		 $row_cnt = mysql_num_rows($prevResult);
		 
		  if($row_cnt > 0)
		  {
		    mysql_query("UPDATE bill  SET bill_id = '$tenant_id', date_issued = now(), tenant_id = '$tenant_id', room_id = '$varx', 
		    issued_by = 'admin', status = '1',month='$nammon' WHERE bill_id = '$tenant_id'");
		      }
		  else {
		 // echo "error comes here";
		 mysql_query("INSERT INTO bill (bill_id,ttl_electric,ttl_rental,ttl_water,date_issued,tenant_id,room_id,issued_by,status,month) VALUES ('$tenant_id',0,0,0,'$tim','$tenant_id','$varx','admin','1','$nammon')")or die(mysql_error());
		 
		 }
		
		
		
		
		
			
		function alert($msg) {
			echo "<script type='text/javascript'>alert('$msg');</script>";
		}
		alert("Fee Submitted");
		//echo "Fee Submitted";
		//header('Location: bill_tenant.php');
	}
?>
								
								<form method="post">
								<div class="table-responsive">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										<thead>
										  <tr>
												<th><center>Admission Number</center></th>
												<th><center>Full Name</center></th>
												<th><center>Father Name</center></th>
												<th><center>Class</center></th>
												<th><center>Total Fee</center></th>
												<th><center>Payment Mode</center></th>
												<th><center>Transaction info</center></th>
												<th><center>Fine</center></th>
												
												<th><center>Amount</center></th>
												<th><center>Fee Month</center></th>
												<th><center>Pay</th>
												<th>print</th>
										   </tr>
										</thead>
										<tbody>
										<tr>
												<td><center><?php echo $tenant_id;?></center></td>
												<td><center><?php echo $row['fname']." ".$row['lname'];?></center></td>
												<td><center><?php echo $row['nname'];?></center></td>
												<td><center><?php echo $rooms['room_name'];?></center></td>	
												<td><center><?php $varx=$row['room_id'];
												$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
													$abcd = mysql_fetch_array($user_query12);
													$rental = $abcd['rental'];
													$rental1= $abcd['rental1'];
													$rental2= $abcd['rental2'];
													$rental3= $abcd['rental3'];
													$rental4= $abcd['rental4'];
													$rental5= $abcd['rental5'];
													$rent6	= $row['due1'];
													$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
													echo $net;
													?></center></td>
													
														<td> 
												<div class="col-md-10">
													<select id="monname" name="payment_mode" class="form-control" required>
															<option></option>
															<?php 
															$query=mysql_query("select * from paym_info");
															while($row=mysql_fetch_array($query))
															{ ?>
														<option name ="amountsub2" value="<?php echo $row['mode_id'];?>"> <?php echo $row['paym_mode'];?> </option>
														<?php } ?>
													</select>			
												</div>
												</td>
													
										<td><center><input type="text" name="transactionInfo" style=" width: 70px" placeholder="Ref No." required></center></td>
										<td><center><input type="text" name="fine" style="width: 50px" placeholder="INR" required></center></td>												<?php $totdue=$row['due'];?>
											<form action = "bill_tenant.php" method="post">
										<td><center><input type="text" name="amountsub"style="width: 70px" placeholder="INR" required></center></td>
										<td><center> 
											<div class="col-md-10">
												<select id="monname" name="monname" class="form-control" required>
															<?php 
															$query=mysql_query("select * from months");
															while($row=mysql_fetch_array($query)){
																if($row['month']=="Apr-May"||$row['month']=="Jun-July"||$row['month']=="Aug-Sept"||$row['month']=="Oct-Nov"||$row['month']=="Dec-Jan"||$row['month']=="Feb-Mar"){ ?>
														<option value="<?php echo $row['mon_id'];?>"> <?php echo $row['month'];?> </option>
														<?php } }?>
													</select>			
												</div>
												</center></td>
												
												

												<td><center><input type="submit" name="submit1" value="Pay">
												
												
											<?php	
											
											$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id order by date_issued DESC
							")or die(mysql_error());
										
										$rec = mysql_fetch_array($qry);
							// $tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
							// echo "tenant id is ".$tenant_id." bill id is ". $bill_id. " stat is ".$stat." \n";
								{
								echo "
								
								
								<td><a target='_blank' href='print_receipt.php?id=$tenant_id' >
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>

								
								
								";}
								
							
											?>	
												
												
												
												
												<!--<a href='print_receipt.php?id=1'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a>
												
												</center>
												--></td></form>	
										</tr>
										
										<tr>
										<th>Month Name:</th>
										<th>Fee Paid:</th>
										<th>Total Discount:</th>
										<th>Fine:</th>
										<th>Fee Due:</th>
										
										</tr>
										<tr>
										<td>Apr-May</td>
										<td>
											<?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Apr'];
											?>
										</td>
										<td>
											<?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];;
											echo $totaldiscount;
											?>
										</td>
										
										<td>
										<?php 
										//echo $fine;
										?>
										</td>

										
										
								
											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$f=$net-$row['Apr'];
											
											echo $f-$totaldiscount;
											$dd=$f-$totaldiscount;
											
											mysql_query("UPDATE tenant SET due1 = '$dd' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											
											
											if($net-$row['Apr']==0)
											{
													mysql_query("UPDATE tenant SET status_apr = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Apr']<$net && $net-$row['Apr']>0)
											{
													mysql_query("UPDATE tenant SET status_apr ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											?>
											
										</td>
									
										
																				</tr>
										<!--<tr>
										<td>February</td>
										<td><?php /*
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Feb'];
											?></td>
											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $net-$row['Feb'];
											if($net-$row['Feb']==0)
											{
													mysql_query("UPDATE tenant SET status_feb = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Feb']<$net && $net-$row['Feb']>0)
											{
													mysql_query("UPDATE tenant SET status_feb ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											*/?>
											
											
										</td>
										</tr> -->
										<tr>
										<td>Jun-July</td>
										<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Jun'];
											?></td>
											<td>
											<?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];
											echo $totaldiscount;											?>
										</td>
											
										<td><?php //echo $fine;?></td>
											
											
											
											
											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$f=$net-$row['Jun']+$row['due1'];
											
											echo $f-$totaldiscount;
											$dd=$f-$totaldiscount;
											mysql_query("UPDATE tenant SET due1 = '$dd' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											

											if($net-$row['Jun']==0)
											{
													mysql_query("UPDATE tenant SET status_jun = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Jun']<$net && $net-$row['Jun']>0)
											{
													mysql_query("UPDATE tenant SET status_jun ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											?>
											
											
										</td>
										</tr>
										<!--<tr>
										<td>April</td>
										<td><?php /*
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Apr'];
											?></td>
											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $net-$row['Apr'];
											if($net-$row['Apr']==0)
											{
													mysql_query("UPDATE tenant SET status_apr = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Apr']<$net && $net-$row['Apr']>0)
											{
													mysql_query("UPDATE tenant SET status_apr ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											*/?>
											
										</td>
										</tr> -->
										<tr>
										<td>Aug-Sep</td>
										<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Aug'];
											?>
											</td>
											
											<td>
											<?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
$totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];
											echo $totaldiscount;											?>
										</td>
											
											
											<td><?php //echo $fine;?></td>

											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$f=$net-$row['Aug']+$row['due1'];
											
											echo $f-$totaldiscount;
											$dd=$f-$totaldiscount;
											mysql_query("UPDATE tenant SET due1 = '$dd' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											
											
											if($net-$row['Aug']==0)
											{
													mysql_query("UPDATE tenant SET status_aug = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Aug']<$net && $net-$row['Aug']>0)
											{
													mysql_query("UPDATE tenant SET status_aug ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											
											
											?>
										</td>
										</tr>
										<!--<tr>
										<td>June</td>
										<td><?php /*
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Jun'];
											?></td>
											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $net-$row['Jun'];
											if($net-$row['Jun']==0)
											{
													mysql_query("UPDATE tenant SET status_jun = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Jun']<$net && $net-$row['Jun']>0)
											{
													mysql_query("UPDATE tenant SET status_jun ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											*/?>
											
											
										</td>
										</tr>-->
										<tr>
										<td>Oct-Nov</td>
										<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Oct'];
											?></td>
												
											<td>
											<?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];
											echo $totaldiscount;
											?>
										</td>
										<td><?php //echo $fine;?></td>

											
											
											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$f=$net-$row['Oct']+$row['due1'];
											
											echo $f-$totaldiscount;
											$dd=$f-$totaldiscount;
											mysql_query("UPDATE tenant SET due1 = '$dd' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											
											
											if($net-$row['Oct']==0)
											{
													mysql_query("UPDATE tenant SET status_oct = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Oct']<$net && $net-$row['Oct']>0)
											{
													mysql_query("UPDATE tenant SET status_oct ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											?>
										</td>
										</tr>
										<!--<tr>
										<td>August</td>
										<td><?php /*
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Aug'];
											?></td>
											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $net-$row['Aug'];
											
											if($net-$row['Aug']==0)
											{
													mysql_query("UPDATE tenant SET status_aug = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Aug']<$net && $net-$row['Aug']>0)
											{
													mysql_query("UPDATE tenant SET status_aug ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											
											
											*/?>
										</td>
										</tr>-->
										<tr>
										<td>Dec-Jan</td>
										<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Dece'];
											?></td>
											<td>
											<?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];
											echo $totaldiscount;
											?>
										</td>
											
										<td><?php //echo $fine;?></td>

											
											
											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$f=$net-$row['Dece']+$row['due1'];
											
											echo $f-$totaldiscount;
											$dd=$f-$totaldiscount;
											mysql_query("UPDATE tenant SET due1 = '$dd' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											
											
											if($net-$row['Dece']==0)
											{
													mysql_query("UPDATE tenant SET status_dec = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Dece']<$net && $net-$row['Dece']>0)
											{
													mysql_query("UPDATE tenant SET status_dec ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											
											?>
										</td>
										</tr>
										<!--<tr>
										<td>October</td>
										<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Oct'];
											?></td>
											<td><?php /*
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $net-$row['Oct'];
											
											if($net-$row['Oct']==0)
											{
													mysql_query("UPDATE tenant SET status_oct = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Oct']<$net && $net-$row['Oct']>0)
											{
													mysql_query("UPDATE tenant SET status_oct ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											*/?>
										</td>
										</tr>-->
										<tr>
										<td>Feb-Mar</td>
										<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Feb'];
											?></td>
											<td>
											<?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];
											echo $totaldiscount;
											?>
										</td>
										<td><?php //echo $fine;?></td>

											
											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$f=$net-$row['Feb']+$row['due1'];
											
											echo $f-$totaldiscount;
											$dd=$f-$totaldiscount;
											mysql_query("UPDATE tenant SET due1 = '$dd' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											
											if($net-$row['Feb']==0)
											{
													mysql_query("UPDATE tenant SET status_feb = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Feb']<$net && $net-$row['Feb']>0)
											{
													mysql_query("UPDATE tenant SET status_feb ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											?>
											
											
										</td>
										</tr>
										<!--<tr>
										<td>December</td>
										<td><?php /*
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $row['Dece'];
											?></td>
											<td><?php 
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
											$asdf1 = mysql_fetch_array($user_q1);
											$ammpaid= $asdf1['new'];		
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											$varx=$row['room_id'];
											$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
											$abcd = mysql_fetch_array($user_query12);
											$rental = $abcd['rental'];
											$rental1= $abcd['rental1'];
											$rental2= $abcd['rental2'];
											$rental3= $abcd['rental3'];
											$rental4= $abcd['rental4'];
											$rental5= $abcd['rental5'];
											$net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
											$user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$forTenantid'")or die(mysql_error());
											$asdf = mysql_fetch_array($user_q);
											$tenant_id= $asdf['new'];
											$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											$row = mysql_fetch_array($user_query);
											echo $net-$row['Dece'];
											
											if($net-$row['Dece']==0)
											{
													mysql_query("UPDATE tenant SET status_dec = '1' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											if($net-$row['Dece']<$net && $net-$row['Dece']>0)
											{
													mysql_query("UPDATE tenant SET status_dec ='2' WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
											}
											
											
											*/?>
										</td>
										</tr>-->

										<?php 
										$ll = date("Y",strtotime("next year"));
											$nwww = date("Y-m-d",strtotime("Now"));
											$nww = date("Y",strtotime("Now"));
											$jan = date("m-d",strtotime("January 1"));
											$feb = date("m-d",strtotime("February 1"));
											$mar = date("m-d",strtotime("March 1"));
											$apr = date("m-d",strtotime("April 1"));
											$may = date("m-d",strtotime("May 1"));
											$jun = date("m-d",strtotime("June 1"));
											$jul = date("m-d",strtotime("July 1"));
											$aug = date("m-d",strtotime("August 1"));
											$sep = date("m-d",strtotime("September 1"));
											$oct = date("m-d",strtotime("October 1"));
											$nov = date("m-d",strtotime("November 1"));
											$dec = date("m-d",strtotime("December 1"));
											
											
										?>
										<?php
											if(($nwww >= "$nww-$jan") && ($nwww < "$nww-$feb")){
											$janss = "$nww-$jan";
											$febss = "$nww-$feb";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$janss' AND electricity.date_st < '$febss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$janss = "$nww-$jan";
												$febss = "$nww-$feb";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$janss' AND electricity.date_st < '$febss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}
										if(($nwww >= "$nww-$feb") && ($nwww < "$nww-$mar")){
											$febss = "$nww-$feb";
											$marss = "$nww-$mar";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$febss' AND electricity.date_st < '$marss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$febss = "$nww-$feb";
												$marss = "$nww-$mar";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$febss' AND electricity.date_st < '$marss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}					
										if(($nwww >= "$nww-$mar") && ($nwww < "$nww-$apr")){
											$marss = "$nww-$mar";
											$aprss = "$nww-$apr";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$marss' AND electricity.date_st < '$aprss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$marss = "$nww-$mar";
												$aprss = "$nww-$apr";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$marss' AND electricity.date_st < '$aprss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}
										if(($nwww >= "$nww-$apr") && ($nwww < "$nww-$may")){
											$aprss = "$nww-$apr";
											$mayss = "$nww-$may";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$aprss' AND electricity.date_st < '$mayss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$aprss = "$nww-$apr";
												$mayss = "$nww-$may";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$aprss' AND electricity.date_st < '$mayss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}
									if(($nwww >= "$nww-$may") && ($nwww < "$nww-$jun")){
											$mayss = "$nww-$may";
											$junss = "$nww-$jun";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$mayss' AND electricity.date_st < '$junss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$mayss = "$nww-$may";
												$junss = "$nww-$jun";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$mayss' AND electricity.date_st < '$junss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}
										if(($nwww >= "$nww-$jun") && ($nwww < "$nww-$jul")){
											$junss = "$nww-$jun";
											$julss = "$nww-$jul";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$junss' AND electricity.date_st < '$julss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$junss = "$nww-$jun";
												$julss = "$nww-$jul";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$junss' AND electricity.date_st < '$julss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}
										if(($nwww >= "$nww-$jul") && ($nwww < "$nww-$aug")){
											$julss = "$nww-$jul";
											$augss = "$nww-$aug";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$julss' AND electricity.date_st < '$augss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$julss = "$nww-$jul";
												$augss = "$nww-$aug";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$julss' AND electricity.date_st < '$augss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}
										if(($nwww >= "$nww-$aug") && ($nwww < "$nww-$sep")){
											$augss = "$nww-$aug";
											$sepss = "$nww-$sep";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$augss' AND electricity.date_st < '$sepss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$augss = "$nww-$aug";
												$sepss = "$nww-$sep";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$augss' AND electricity.date_st < '$sepss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}
										if(($nwww >= "$nww-$sep") && ($nwww < "$nww-$oct")){
											$sepss = "$nww-$sep";
											$octss = "$nww-$oct";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$sepss' AND electricity.date_st < '$octss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$sepss = "$nww-$sep";
												$octss = "$nww-$oct";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$sepss' AND electricity.date_st < '$octss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}
										if(($nwww >= "$nww-$oct") && ($nwww < "$nww-$nov")){
											$octss = "$nww-$oct";
											$novss = "$nww-$nov";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$octss' AND electricity.date_st < '$novss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$octss = "$nww-$oct";
												$novss = "$nww-$nov";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$octss' AND electricity.date_st < '$novss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}
										if(($nwww >= "$nww-$nov") && ($nwww < "$nww-$dec")){
											$novss = "$nww-$nov";
											$decss = "$nww-$dec";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$novss' AND electricity.date_st < '$decss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$novss = "$nww-$nov";
												$decss = "$nww-$dec";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$novss' AND electricity.date_st < '$decss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php  }}
										if(($nwww >= "$nww-$dec") && ($nwww < "$ll-$jan")){
											$decss = "$nww-$dec";
											$janss = "$ll-$jan";
											$user_query = mysql_query("SELECT * FROM room, tenant, electricity
											WHERE room.room_id = tenant.room_id AND room.room_id = electricity.room_id 
												AND electricity.date_st > '$decss' AND electricity.date_st < '$janss'")or die(mysql_error());
											while($row = mysql_fetch_array($user_query)){
											$id = $row['room_id'];
											$tenant_id=$row['tenant_id'];											
										?>									
												<tr>
												<td><center><?php echo $row['room_name'];?></center></td>
												<td><center><?php echo $row['fname'];?>&nbsp; <?php echo $row['lname'];?></center>
												</td>
												<td>												
												<input type='text' readonly class="form-control input-md" value="<?php
									
												$sql1 = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id AND 
														tenant.tenant_id='$tenant_id'";
												$qry1 = mysql_query($sql1);
												$rec = mysql_fetch_array($qry1);
												$rmnum = "$rec[room_id]";
												$rent = "$rec[rental]";
												
												$sqlls = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryys = mysql_query($sqlls);
												$numrows = mysql_num_rows($qryys);
												
												$rent_div = $rent/$numrows;
												
												echo "$rent_div";
												
											?>">
													
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php
												
												$decss = "$nww-$dec";
												$janss = "$ll-$jan";
												$sql = "SELECT * FROM tenant, room, electricity WHERE tenant.room_id = room.room_id AND 
														room.room_id = electricity.room_id AND tenant.tenant_id='$tenant_id' AND 
														electricity.date_st > '$decss' AND electricity.date_st < '$janss' ";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$rmnum = "$rec[room_id]";
												$elect = "$rec[amount]";
												
												$sqll = "SELECT * FROM tenant, room WHERE tenant.room_id = room.room_id 
												AND room.room_id = '$rmnum'";
												$qryy = mysql_query($sqll);
												$numrows = mysql_num_rows($qryy);
												
												$elec_div = $elect/$numrows;
												
												echo "$elec_div";
											?>">
												</td>
												<td>
												<input type='text' readonly class="form-control input-md" value="<?php 
									
												$sql = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
												$qry = mysql_query($sql);
												$rec = mysql_fetch_array($qry);
												$water = "$rec[water]";
												
												echo "$water";
										  ?>">
												</td>
												
												<td>
												<a button type="button" class="btn btn-success" href="bill.php<?php echo '?id='.$row['tenant_id'];?>">Generate Bill</a></button>
												</td>
												</tr>
												
													<?php 

													 }}				
													
													?>
												<!--THIS IS THE LAST FOR THE IF OF DATES-->
												<td>
												</td>
												<td></td>
											
												<td align="right">
							
								</tbody>
								</table>
								</form>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
	</head>
	</nav>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
       <?php include('script.php'); ?>
</body>
</html>
