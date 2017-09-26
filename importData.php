
<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());
?>


<?php
require_once('session1.php');
?>

<?php
//load the database configuration file


if(isset($_POST['importSubmit'])){
    
    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
             
            //skip first line
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
			
            while(($line = fgetcsv($csvFile)) !== FALSE){
				
				
				$prevQuery = "SELECT tenant_id FROM tenant WHERE tenant_id = '".$line[0]."' AND fname='".$line[3]."'";
                $prevResult = mysql_query($prevQuery);
				$row_cnt = mysql_num_rows($prevResult);
                if($row_cnt > 0){
                    //update member data
                     mysql_query("UPDATE tenant SET tenant_id='".$line[0]."', room_id = '".$line[1]."', gender = '".$line[2]."', fname = '".$line[3]."', mname = '".$line[4]."', lname = '".$line[5]."', nname = '".$line[6]."', age = '".$line[7]."', bdate = '".$line[8]."', address = '".$line[9]."',  contact = '".$line[10]."',  dis_id = '".$line[11]."', dis_id2 = '".$line[12]."', dis_id3 = '".$line[13]."',transportation_fees = '".$line[14]."', annual_fees = '".$line[15]."', room_name = '".$line[16]."' WHERE tenant_id = '".$line[0]."'");
                }else{
                    //insert member data into database
					//mysql_query("insert into bill (tenant_id,room_id,bill_id,date_issued,issued_by,status) values('$tid','$id','$tid','$monv','$isby','$zero')")or die(mysql_error());
                  mysql_query("insert into tenant (tenant_id,room_id,gender,fname,mname,lname,nname,age,bdate,address,contact,dis_id,dis_id2,dis_id3,transportation_fees,annual_fees,room_name) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."','".$line[8]."','".$line[9]."','".$line[10]."','".$line[11]."','".$line[12]."','".$line[13]."','".$line[14]."','".$line[15]."','".$line[16]."')") or die(mysql_error());
                
				
            }
			
						
				
				
                
                    
            }
			
			
            
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

//redirect to the listing page
header("Location: register2.php".$qstring);