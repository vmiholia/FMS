<?php 
if(isset($_SESSION['tenant_id'])) {
  $tenant_id=$_SESSION['tenant_id'];
}
else
  $tenant_id="";
$forTenantid=2;

if(isset($_POST['submit'])){ 
  $tenant_id=$_POST['tenant_id'];
  $_SESSION['tenant_id']=$tenant_id;
  mysql_query("UPDATE room SET new ='$tenant_id' where room.room_id='$forTenantid'")or die(mysql_error());

}
$user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
$row = mysql_fetch_array($user_query);
$totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];
$name = $row['fname'].' '.$row['lname'];
$fname=$row['nname'];
$tenant_id=$row['tenant_id'];
$class=$row['room_name'];
$room_id=$row['room_id'];
$user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$room_id'")or die(mysql_error());
$abcd = mysql_fetch_array($user_query12);
$totalfee = $abcd['rental']+$abcd['rental1']+$abcd['rental2']+$abcd['rental3']+$abcd['rental4']+$abcd['rental5'];
?>
<div class="table-responsive">
  <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
   <thead>
    <tr>
     <th>Adm.No.</th>
     <th>Full Name</th>
     <th>Father Name</th>
     <th>Class</th>
     <th>Total Fee</th>
     <th>Payment Mode</th>
     <th>Transaction info</th>
     <th>Fine</th>
     <th>Amount</th>
     <th>Month</th>
     <th>Pay</th>
     <th>print</th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <td><?php echo $tenant_id;?></td>
     <td><?php echo $name;?></td>
     <td><?php echo $fname;?></td>
     <td><?php echo $class;?></td>	
     <td><?php echo $totalfee;?></td>         
     <td>
      <div>
        <form acion="bill_tenant.php" method="post">
          <select id="mode" name="payment_mode" class="form-control" required>
            <option>Select</option>
            <?php 
            $query=mysql_query("select * from paym_info");
            while($row=mysql_fetch_array($query))
              { ?>
            <option name ="mode_payment" value="<?php echo $row['mode_id'];?>"> <?php echo $row['paym_mode'];?> </option>
            <?php } ?>
          </select>     
        </div>
      </td>
      <td><input type="text" name="transactionInfo" style=" width: 70px" placeholder="Ref No." required></td>
      <td><input type="text" name="fine" style="width: 50px" placeholder="INR" required></td>
      <input type="hidden" name="tenant_id" value="<?php echo $tenant_id;?>" style="width: 50px" placeholder="INR" required>
      <td><input type="text" name="amount" style="width: 50px" placeholder="INR" required></td>
      <td><div>
        <select id="month" name="month" class="form-control" required>
          <option>Select</option>
          <?php   
          $query=mysql_query("select * from months");
          while($row=mysql_fetch_array($query)){
            if($row['month']=="Apr-May"||$row['month']=="Jun-July"||$row['month']=="Aug-Sept"||$row['month']=="Oct-Nov"||$row['month']=="Dec-Jan"||$row['month']=="Feb-Mar"){ ?>
            <option value="<?php echo $row['mon_id'];?>"> <?php echo $row['month'];?> </option>
            <?php } }?>
          </select>     
        </div>
      </td>
      <td><center><input type="submit" name="pay" value="Pay">
        <?php 
        echo "


        <td><a target='_blank' href='print_receipt.php?id=$tenant_id' >
        <button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
        </a></button>";
        ?>
        
      </tr></tbody>
    </table>
  </form>


</div>

<?php 

if(isset($_POST['pay']) and isset($_SESSION['tenant_id'])){
  unset($_POST['pay']);
  unset($_SESSION['tenant_id']);


  $tenant_id=$_POST['tenant_id'];

  $month=$_POST['month'];
  $transactionInfo=$_POST['transactionInfo'];
  $amount=$_POST['amount'];
  $payment_mode=$_POST['payment_mode'];
  $fine=$_POST['fine'];

  $forAmount=1; 
  mysql_query("UPDATE room SET new ='$amount' where room.room_id='$forAmount'")or die(mysql_error());
  $user_q = mysql_query("SELECT * FROM room WHERE room.room_id = '$tenant_id'")or die(mysql_error());
  $asdf = mysql_fetch_array($user_q);

  $user_q1 = mysql_query("SELECT * FROM room WHERE room.room_id = '$forAmount'")or die(mysql_error());
  $asdf1 = mysql_fetch_array($user_q1);
  $ammpaid= $asdf1['new'];    

  $user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
  $row = mysql_fetch_array($user_query);
  $room_id=$row['room_id'];

  $user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$room_id'")or die(mysql_error());
  $abcd = mysql_fetch_array($user_query12);

  $totalfee = $abcd['rental']+$abcd['rental1']+$abcd['rental2']+$abcd['rental3']+$abcd['rental4']+$abcd['rental5'];

   // mysql_query("UPDATE months SET month='$tenant_id' where months.mon_id='13'")or die(mysql_error());
   // mysql_query("UPDATE months SET month='$ammpaid' where months.mon_id='14'")or die(mysql_error());

  $month_name="";
  if($month==1){
    $month_name="Jan";
  }else if($month==2){
    $month_name="Feb";
  }else if($month==3){
    $month_name="Mar";
  }else if($month==4){
    $month_name="Apr";
  }else if($month==5){
    $month_name="May";
  }else if($month==6){
    $month_name="Jun";
  }else if($month==7){
    $month_name="Jul";
  }else if($month==8){
    $month_name="Aug";
  }else if($month==9){
    $month_name="Sep";
  }else if($month==10){
    $month_name="Oct";
  }else if($month==11){
    $month_name="Nov";
  }else if($month==12){
    $month_name="Dece";
  } 
  $us = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
  $qa = mysql_fetch_array($us);
  $az= $qa[$month_name];
  $do= $az+$amount;
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
  mysql_query("UPDATE tenant SET $month_name='$do' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
  mysql_query("UPDATE tenant SET daat='$dii' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
  mysql_query("UPDATE tenant SET timeStamp='$tim' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
  mysql_query("UPDATE tenant SET amtpaid='$amount' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
  mysql_query("UPDATE tenant SET trn_id='$transactionInfo' where tenant.tenant_id='$tenant_id'")or die(mysql_error());
  mysql_query("UPDATE tenant SET paym_mode='$payment_mode' where tenant.tenant_id='$tenant_id'")or die(mysql_error());

    //-----------------------Anmol----------------------------------
  mysql_query("INSERT into payment_record Values('','$tenant_id','$dii','$amount','$transactionInfo','$payment_mode','$tim','$month_name','','$fine','manually')") or die(mysql_error());

  $months=array('Apr','Jun','Aug','Oct','Dece','Feb');
  $paid=0;$net_due=0;
  foreach ($months as $value) {
    $user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
    $row = mysql_fetch_array($user_query);
    $varx=$row['room_id'];
    $annual=$row['annual_fees'];
            $Transportation=$row['transportation_fees'];

    $user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
    $abcd = mysql_fetch_array($user_query12);
    $rental = $abcd['rental'];
    $rental1= $abcd['rental1'];
    $rental2= $abcd['rental2'];
    $rental3= $abcd['rental3'];
    $rental4= $abcd['rental4'];
    $rental5= $abcd['rental5'];

    if($value=='Apr'){
        $net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5+$annual+$Transportation;
        $net_due=$net_due+$net-$totaldiscount;
      }
      else{
        $net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5+$Transportation;
        $net_due=$net_due+$net-$totaldiscount;
      }
      $user_query2 = mysql_query("SELECT * FROM payment_record WHERE payment_record.tenant_id = '$tenant_id'")or die(mysql_error());
      $row2 = mysql_fetch_array($user_query2);

      $user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
      $row = mysql_fetch_array($user_query);
      $paid=$paid+$row[$value];
      $f=$net_due-$paid;
      $dd=$f;
      if($value==$month_name)
        mysql_query("UPDATE payment_record SET due = '$dd' WHERE payment_record.tenant_id = '$tenant_id' and `timestamp`='$tim'")or die(mysql_error());
  }
    //-----------------------Anmol----------------------------------

  function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
  }
  alert("Fee Submitted");
    //echo "Fee Submitted";
    //header('Location: bill_tenant.php');
}

?>
<div class="table-responsive"> 
  <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
    <thead>
      <tr>
        <th>Month</th>
        <th>Total Fees</th>
        <th>Transportation Charges</th>
        <th>Total Amount Paid</th>
        <th>Total Discount</th>
        <th>Fine Paid</th>
        <th>Fee Due</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $net_due=0;
      $paid=0;
      $months=array('Apr','Jun','Aug','Oct','Dece','Feb');
      foreach ($months as $value) {
        echo '<tr><td>'.$value.'</td><td>';


        $user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
        $row = mysql_fetch_array($user_query);
        $varx=$row['room_id'];
        $Transportation=$row['transportation_fees'];
        $annual=$row['annual_fees'];
        $user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
        $abcd = mysql_fetch_array($user_query12);
        $rental = $abcd['rental'];
        $rental1= $abcd['rental1'];
        $rental2= $abcd['rental2'];
        $rental3= $abcd['rental3'];
        $rental4= $abcd['rental4'];
        $rental5= $abcd['rental5'];
        if($value=='Apr')
          $net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5+$annual+$Transportation;
        else{
          $net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5+$Transportation;

        }
        echo $net;
        ?>
      </td>
      <td><?php 
        $user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
        $row = mysql_fetch_array($user_query);
        $Transportation=$row['transportation_fees'];
        echo $Transportation;
      ?></td>
      <td>
        <?php 
        $forTenantid=2;
        $forAmount=0;

        $user_query1 = mysql_query("SELECT sum(fine) as summ FROM payment_record WHERE payment_record.tenant_id = '$tenant_id' and month='$value' group by month")or die(mysql_error());
        $row2 = mysql_fetch_array($user_query1);

        $user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
        $row = mysql_fetch_array($user_query);
        echo ($row[$value]+$row2['summ']);
        ?>
      </td>
      <td>
        <?php 
        $user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
        $row = mysql_fetch_array($user_query);
        $totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];;
        echo $totaldiscount;
        ?>
      </td>

      <td>
        <?php 
        $user_query = mysql_query("SELECT sum(fine) as summ FROM payment_record WHERE payment_record.tenant_id = '$tenant_id' and month='$value' group by month")or die(mysql_error());
        $row = mysql_fetch_array($user_query);
        echo $row['summ'];
        ?>
      </td>


      <?php

      echo '<td>'; 

      $user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
      $row = mysql_fetch_array($user_query);
      $varx=$row['room_id'];
      $annual=$row['annual_fees'];
      $Transportation=$row['transportation_fees'];
      $user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
      $abcd = mysql_fetch_array($user_query12);
      $rental = $abcd['rental'];
      $rental1= $abcd['rental1'];
      $rental2= $abcd['rental2'];
      $rental3= $abcd['rental3'];
      $rental4= $abcd['rental4'];
      $rental5= $abcd['rental5'];
      if($value=='Apr'){
        $net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5+$annual+$Transportation;
        $net_due=$net_due+$net-$totaldiscount;
      }
      else{
        $net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5+$Transportation;
        $net_due=$net_due+$net-$totaldiscount;
      }
      $user_query2 = mysql_query("SELECT * FROM payment_record WHERE payment_record.tenant_id = '$tenant_id'")or die(mysql_error());
      $row2 = mysql_fetch_array($user_query2);

      $user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
      $row = mysql_fetch_array($user_query);
      $paid=$paid+$row[$value];
      $f=$net_due-$paid;
      echo ($f);
      $dd=$f;



    }   
    ?>

  </td>


</tr>
</tbody>
</table> 
</div>