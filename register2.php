<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());
?>

<?php
require_once('session1.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>


<style>
n1{
width=20% !important;
}
</style>

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
    <title>Register Student</title>

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
                        <a href="manage_account.php"><i class="fa fa-users fa-lg"></i>&nbsp;View User</a>
                    </li>
					<li>
                        <a href="register_form.php"><i class="fa fa-users fa-lg"></i>&nbsp;Add New User</a>
                    </li>
                    <li>
                    	<a  href="reset_data.php" onClick="return confirm('Are You Sure you want To Reset the Database... This Cannot be undone')"><i class="glyphicon glyphicon-backward"></i>&nbsp;Reset</a>
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
                                <a href="electric_bill.php" class="glyphicon glyphicon-flash">&nbsp;Reports</a>
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
                        <a href="about_us.php"><i class="glyphicon glyphicon-info-sign"></i> About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper ">
		
            
<?php
//load the database configuration file


if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Students data has been inserted successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
<div class="container">
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Students list
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Import Students</a>
        </div>
        <div class="panel-body">
            <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
			<button><a href="tenant.csv" download="demo.csv">Download Demo CSV </a></button>
			<!--<button><a href = "https://github.com/marshal1234/marshal/archive/master.zip" download>Click to Download demo file!</a></button>-->
			<a href="https://github.com/marshal1234/marshal/archive/master.zip"></a>
			<br>
			</br>
       <!--     <table class="table table-bordered  n1"  >
                <thead>
                    <tr>
                     <th>class</th>	
                      <th>Gender</th>
                      <th>FirstName</th>
                      <th>MiddleName</th>
                      <th>LastName</th>
					   <th>FatherName</th>
					    <th>Age</th>
						 <th>BirthDate</th>
						  <th>Adress</th>
						   <th>Contact</th>
						   <th>Discount_A</th>
						  <th>Discount_B</th>
						   <th>BusRoute</th>
						    <th width="1%" !important >AdmissionFee</th>
							 <th>DOR(yyyy/mm/dd)</th>
							 <th>discount</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                   /* //get records from database
                    $query=mysql_query("SELECT * FROM tenant ORDER BY tenant_id DESC ")or die(mysql_error());
					$row_cnt = mysql_num_rows($query);
                    if($row_cnt > 0){ 
                        while( $row = mysql_fetch_array($query)){ ?>
                    <tr>
                      <td><?php echo $row['room_id']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['fname']; ?></td>
                      <td><?php echo $row['mname']; ?></td>
					  <td><?php echo $row['lname']; ?></td>
					  <td><?php echo $row['nname']; ?></td>
					  <td><?php echo $row['age']; ?></td>
					  <td><?php echo $row['bdate']; ?></td>
					  <td><?php echo $row['address']; ?></td>
					  <td><?php echo $row['contact']; ?></td>
					  <td><?php echo $row['dis_id2']; ?></td>
					  <td><?php echo $row['dis_id3']; ?></td>
					  <td><?php echo $row['busroute']; ?></td>
					  <td><?php echo $row['water']; ?></td>
					<td><?php echo $row['date_registered']; ?></td>
					<td><?php echo $row['dis_id']; ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No member(s) found.....</td></tr>
                    <?php } */?>
                </tbody>
            </table>
        </div>
    </div>
</div>
            </div>
            <!-- /.container-fluid --> 

        </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
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
