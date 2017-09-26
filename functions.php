 <html>
  <head></head>
  <script>
  function redirecting(msg) {
  		if(confirm(msg)) document.location = 'display_csv_fees.php';
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
$requiredHeaders = array('AdmissionNo','ModeofPayment','TransactionID','month','Amount','fine'); //headers we expect

 if(isset($_POST["Import"])){
		$filename=$_FILES["file"]["tmp_name"];		
		$count=0;
		$file = fopen($filename, "r");
		$firstLine = fgets($file);
		$filename2=$_FILES["file"]["name"];		
		$timezone = new DateTimeZone("Asia/Kolkata" );
   		$date = new DateTime();
    	$date->setTimezone($timezone );
        //echo  $date->format( 'H:i:s A  /  D, M jS, Y' );
    	$tim = $date->format( 'Y-m-d H:i:s' );
		mysql_query("UPDATE `filenames` SET `status`=0 WHERE 1");
		mysql_query("INSERT into filenames Values('','$filename2','$tim','1')") or die(mysql_error());
		while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	         	$count=$count+1;
	         }

		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
		  	$firstLine = fgets($file);
		  	$foundHeaders = str_getcsv(trim($firstLine), ',', '"'); //parse to array
			if ($foundHeaders !== $requiredHeaders) {
   				echo 'Headers do not match: '.implode(', ', $foundHeaders);
	   			echo "<script type='text/javascript'>redirecting('failed!')</script>";
   				die();
			}
			echo '<div id="myProgress"><div id="myBar"></div></div><br>Uploading...';
			$cc=0;
			$filename2=$_FILES["file"]["name"];		

	        while (($getData = fgetcsv($file,",")) !== FALSE)
	        {

	         	$data=new payment_data();
	         	$emp_id=$getData[0];
	         	$data->setAdmissonNo($emp_id);

	         	$mode_of_payment=$getData[1];
	         	$data->setModeOfPayment($mode_of_payment);
	         	
	         	$ref_no=$getData[2];
	         	$data->setReferenceNo($ref_no);
	         	$month=$getData[3];
	         	$data->setMonth($month);
	         	$amount=$getData[4];
	         	$data->setAmount($amount);
	         	$fine=$getData[5];
	         	$data->setFine($fine);
	         	$data->setFilename($filename2);	
	         	// echo $emp_id." ".$mode_of_payment." ".$ref_no." ".$month."\n";
	         	$err=$data->updateDb();
				$cc=$cc+1;
				$percent=$cc/$count;
				echo "<script type='text/javascript'>move(".$percent.")</script>";
	         }
	         fclose($file);	
		 }
		 $posted=true;
	}
 ?>
<body>

<?php
    if( $posted ) {
    	$_SESSION['filename']=$_FILES['file']['name'];
        echo "<script type='text/javascript'>redirecting('Imported successfully')</script>";
    }
    else{
        echo "<script type='text/javascript'>redirecting('failed!')</script>";
    }
?>
</body>
</html>