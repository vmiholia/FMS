<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());

require_once('session1.php');
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

      <script>
      function redirecting(msg) {
       if(confirm(msg)) document.location = 'billed.php';
     }
     function move(percent) {
       var elem = document.getElementById("myBar");   
       elem.style.width = (percent*100) + '%'; 
       elem.innerHTML = percent * 100  + '%';
     }
     </script>
     <style>
     #myProgress {
       width: 100%;
       background-color: #ddd;
     }

     #myBar {
       height: 30px;
       background-color: #4CAF50;
       text-align: center;
       line-height: 30px;
       color: white;
     }
     </style>
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
  <br>
  <h4>CSV Uploaded....</h4>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
  <link href="main.css" rel="stylesheet">
  <form class="form-horizontal" action="delete_bulk.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        
                        <!-- Form Name -->
                        <legend align="right">Delete All entries in file</legend>
                        <div class="form-group pull-right">
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="DELETE_FILE" class="btn btn-danger button-loading" data-loading-text="Loading...">DELETE</button>
                            </div>
                        </div>
          
                    </fieldset>

                </form>
  <div id="block_bg" class="block">	
    <div class="navbar navbar-inner block-header">
     <div class="block-content collapse in">
      <div class="span12">  									
       <br>
       <div class="form-group pull-right"><h4>Search</h4>
        <input type="text" class="search form-control" onkeyup="showHint(this.value)" placeholder="What you looking for?">
      </div>
      <span class="counter pull-right"></span>
      <table class="table table-hover table-bordered results" id="searchtable">
        <thead>
          <tr>
           <th><strong>Admission No</strong></th>
           <th><strong>Date</strong></th>
           <th><strong>Mode of Payment</strong></th>
           <th><strong>Reference No</strong></th>
           <th><strong>Month</strong></th>
           <th><strong>Amount Paid</strong></th>
           <th><strong>fine</strong></th>
         </tr>
         <tr class="warning no-result">
           <td colspan="4"><i class="fa fa-warning"></i> No result</td>
         </tr>
       </thead>
       <tbody>
         <?php
        /*	$sql="LOAD DATA INFILE '$filename' INTO TABLE payment_record FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' IGNORE 1 LINES (tenant_id,Date,payment_mode,tnr_id,month,Amount,fine)";
            mysql_query($sql) or die(mysql_error());
        */
            if(isset($_SESSION["filename"])){
             $filename=$_SESSION["filename"];		
             $qry = mysql_query("SELECT * FROM payment_record WHERE filename = '".$filename."'")or die(mysql_error());
             while($rec = mysql_fetch_array($qry))
             {
              $timestamp = strtotime($rec['timestamp']);
              $date = date('d-m-Y', $timestamp);
               echo "
               <tr>
               <td scope='row'>$rec[tenant_id]</td>
               <td>$date</td>
               <td>$rec[payment_mode]</td>
               <td>$rec[tnr_id]</td>
               <td>$rec[month]</td>
               <td>$rec[Amount]</td>
               <td>$rec[fine]</td>
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
</div>
</div>
</div>
</div>
</nav>
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
