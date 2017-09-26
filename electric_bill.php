<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());
?>

<?php
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/alert.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/calculator.png">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="main.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <title>Add Class</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>     
    <link rel="shortcut icon" href="assets/img/calculator.png">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <title>Student Bill</title>
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

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
            <li class="active">
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
                <a href="register.php" class="glyphicon glyphicon-plus">&nbsp;Add Single Student</a>
            </li>
            <li>
                <a href="register2.php" class="glyphicon glyphicon-plus">&nbsp;Add Multiple Student</a>
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


<!--//////////////////////////////// Add Dialog ///////////////////////////////////////////-->

<br>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="fa fa-sitemap fa"></i>&nbsp;Reports</div>
        <div class="panel-body" style="min-height: -webkit-fill-available;">
            <button class="btn btn-success" id="DailyTransanction" onclick="DailyTransaction()">Daily Transaction</button>
            <button class="btn btn-success" id="TillToday" onclick="TillToday()">Till Today</button>
            <button class="btn btn-success" id="AprMay" onclick="AprMay()">Apr-May</button>
            <button class="btn btn-success" id="JunJul" onclick="JunJul()">Jun-July</button>
            <button class="btn btn-success" id="AugSep" onclick="AugSep()">Aug-Sep</button>
            <button class="btn btn-success" id="OctNov" onclick="OctNov()">Oct-Nov</button>
            <button class="btn btn-success" id="DecJan" onclick="DecJan()">Dec-Jan</button>
            <button class="btn btn-success" id="FebMar" onclick="FebMar()">Feb-Mar</button>

            <br><br>
            <div id="report_view">

            </div>



        </div>                          
    </div>                     
</div>                   
</div>


</body>
</html>