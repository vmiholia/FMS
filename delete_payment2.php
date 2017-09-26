
<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());
?>
<?php	
				if(isset($_GET['id'])&&isset($_GET['ts']))
                {
                    $tenant_id=$_GET['id'];
                    $ts=$_GET['ts'];
                    include 'delete_entry.php';
				}
				?>

<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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
    <title>Billed</title>

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

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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
    <title>Billed</title>

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
                                <a href="register2.php" class="glyphicon glyphicon-plus">&nbsp;Add Multiple Student</a>
                            </li>
							<li>
                                <a href="register.php" class="glyphicon glyphicon-plus">&nbsp;Add Single Student</a>
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
                                <a href="electric_bill.php" class="glyphicon glyphicon-flash">&nbsp;Reports</a>
                            </li>
					<li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demor"><i class="glyphicon glyphicon-usd"></i> Bill <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demor" class="collapse">
                            <li>
                                <a href="bill_tenant.php" class="glyphicon glyphicon-usd">&nbsp;Pay</a>
                            </li>
                            <li>
                                <a href="billed.php" class="glyphicon glyphicon-eye-open">&nbsp;view</a>
                            </li>
                            <li>
                                <a href="delete_payment.php" class="glyphicon glyphicon-remove">&nbsp;Delete</a>
                            </li>
                            <li>
                                <a href="fees_import.php" class="glyphicon glyphicon-import">&nbsp;Import</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="tenant_log.php"><i class="glyphicon glyphicon-sort"></i> Student Logs</a>
                    </li>
                    <li>
                        <a href="about_us.php"><i class="glyphicon glyphicon-info-sign"></i> About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
		<div id="page-wrapper">
            <div class="container-fluid">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<div class="container-fluid">
<div class="row-fluid"> 
<div id="header">
</div>
</div>
</div>
</head>
</div>
<body>
                <!-- Page Heading -->
				<nav>
				<div class="col-md-5">
				
				<form action="delete_payment.php" method="POST">

				<b>Student ID:</b>&nbsp&nbsp&nbsp&nbsp
								<input type="text" name="id" id="id"><br>
								<select id="mahina" name="mahina" class="form-control" required>
				<?php 
				$count=0;
					$query=mysql_query("select * from months");
	while($row=mysql_fetch_array($query)){
		if($row['month']=="Apr-May"||$row['month']=="Jun-July"||$row['month']=="Aug-Sept"||$row['month']=="Oct-Nov"||$row['month']=="Dec-Jan"||$row['month']=="Feb-Mar"){ 
			if(isset($_POST['inmon']))
			{
			?><option <?php if ($mahina == $row['mon_id']) { ?>selected="true" <?php }; ?> value="<?php echo $row['mon_id'];?>"> <?php echo $row['month'];?> </option>
			<?php
		    }
			else {
			?><option value="<?php echo $row['mon_id'];?>"> <?php echo $row['month'];?> </option>
			<?php }} } ?>
				</select>	
				

				<div style="text-align:center">  	
				 <input type="submit" style="margin: 0 auto;" name="inmon" value="Submit">
				</div>
				</div>

				
				</form>
				<form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
 
                        <!-- Form Name -->
                        <legend align="right">Payment Transactions</legend>
 
                        <!-- File Button -->
                        
 					
                    </fieldset>

                </form>
				
				
				
				<?php
				$monthh = strtotime('now');
				$mon = date('F',$monthh);
				?>
				<center></center>
				<br>
				
					<div id="block_bg" class="block">	
                            <div class="navbar navbar-inner block-header">
                            <div class="block-content collapse in">
                                <div class="span12">
								
									<div class="table-responsive">
									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<br>
									<br>
							 
									<thead>
										  <tr>
												<th><strong>Student Name</strong></th>
												<th><strong>Father Name </strong></th>
												<th><strong>Class</strong></th>
												<th><strong>Date</strong></th>
												<th><strong>Amount</strong></th>
												<th><strong>Month</strong></th>
												<th><strong>ADM NO.</strong></th>
												<th><strong>Transaction details</strong></th>
												<th><strong></strong></th>
												<th><strong>Delete</strong></th>
												<th><strong>Print</strong></th>
												
										   </tr>
									</thead>
									<tbody>
							 
						<?php 
						if(isset($_POST['inmon'])){
							if($mahina==1){
							$month_name=['Jan'];
						}
						elseif($mahina==2)
						{
							$month_name='Feb';
							$mm="Feb-Mar";
						}
						elseif($mahina==3)
						{
							$month_name='Mar';
						}
						elseif($mahina==4)
						{
							$month_name='Apr';
							$mm="Apr-May";
						}
						elseif($mahina==5)
						{
							$month_name='May';
						}
						elseif($mahina==6)
						{
							$month_name='Jun';
							$mm="Jun-Jul";
						}
						elseif($mahina==7)
						{
							$month_name='Jul';
						}

						elseif($mahina==8)
						{
							$month_name='Aug';
							$mm="Aug-Sep";
						}
						elseif($mahina==9)
						{
							$month_name='Sep';

						}
						elseif($mahina==10)
						{
							$month_name='Oct';
							$mm="Oct-Nov";
						}
						elseif($mahina==11)
						{
							$month_name='Nov';
						}						
						elseif($mahina==12)
						{
							$month_name='Dece';
							$mm="Dec-Jan";
						}
						$tenant_id=0;
						if(isset($_POST['id']))
						$tenant_id=$_POST['id'];
						$qry2 = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id=$tenant_id")or die(mysql_error());
  						while($rec2 = mysql_fetch_array($qry2)){
  							$fathersname=$rec2['nname'];
  							$class=$rec2['room_name'];
  							$name=$rec2['fname']." ".$rec2['lname'];
  						}

  																$qry = mysql_query("SELECT * FROM payment_record WHERE payment_record.tenant_id=$tenant_id and month = '".$month_name."'")or die(mysql_error());
  																while($rec = mysql_fetch_array($qry)){
  																	$tenant_id = "$rec[tenant_id]";
  																	$ts=$rec['timestamp'];
							//$bill_id = "$rec[bill_id]";
							//$stat = "$rec[status]";
  																	echo "
  																	<tr>
  																	<td>".$name."</td>
  																	<td>".$fathersname."</td>
  																	<td>".$class."</td>
								<td>$rec[Date] &nbsp;</td>
								<td>$rec[Amount]</td>
								<td>$mm</td>
								<td>$rec[tenant_id]</td>
								<td>$rec[tnr_id]</td>
								<td></td>";
                                $message="Delete This account?";
                                echo'
                                <td><a  href="delete_payment2.php?id='.$tenant_id.'&ts='.$ts.'"';?>onClick="return confirm('Delete This Transaction')">
                                <?php  
                                echo" <button class='btn btn-danger' type='button'><i class='glyphicon glyphicon-remove'></i></button></a></td>
								<td><a href='print_receipt2.php?id=$tenant_id&ts=$ts'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								</tr>";
							}
						}
						?> 
						</tbody>
						</table>
						</form>
						</div>
						</div>
						</div>
				<center><h5></h5></center>
							</div>
							</div>
						  </div>
						</div>
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
