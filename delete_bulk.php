 <html>
  <head></head>
  <script>
  function redirecting(msg) {
  		if(confirm(msg)) document.location = 'delete_payment.php';
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
<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());

require_once('session1.php');
require_once('data/dataHolder.php');
$requiredHeaders = array('AdmissionNo','transaction_id'); //headers we expect

 if(isset($_POST["DELETE_FILE"])){
		$filename=$_SESSION['filename'];		
		
echo '<div id="myProgress">
  <div id="myBar"></div>
</div><br>Deleting...';
$cc=0;
	        $qry = mysql_query("SELECT * FROM payment_record WHERE filename = '".$filename."'")or die(mysql_error());
	        $count=mysql_num_rows($qry);
	        if($count>0){
             while($rec = mysql_fetch_array($qry))
             {

	         	$data=new payment_data();
	         	$emp_id=$rec['tenant_id'];
	         	$data->setAdmissonNo($emp_id);
	         	$data->setFilename($filename);
	   			
	         	// echo $emp_id." ".$mode_of_payment." ".$ref_no." ".$month."\n";
	         	$err=$data->DeleteDb();
				$cc=$cc+1;
				$percent=$cc/$count;
				echo "<script type='text/javascript'>move(".$percent.")</script>";
	         }
	     }
	     else {
	     	        echo "<script type='text/javascript'>redirecting('No Result Found !')</script>";

	     }
			
		 }
		 $posted=true;
	


 ?>

  <body>

  <?php
    if( $posted ) {
        echo "<script type='text/javascript'>redirecting('Deleted successfully')</script>";


    }
    else{
        echo "<script type='text/javascript'>redirecting('failed!')</script>";

    }

  ?>
  </body>
</html>