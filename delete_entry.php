<?php
$qry=mysql_query("SELECT *FROM  payment_record where payment_record.tenant_id='$tenant_id' and payment_record.timestamp='$ts'")or die(mysql_error());
$r=mysql_fetch_array($qry);
if(sizeof($r)!=0){
$month=$r['month'];
$tran_amount=$r['Amount'];

$qry1=mysql_query("SELECT *FROM  tenant where tenant.tenant_id='$tenant_id'")or die(mysql_error());
$r1=mysql_fetch_array($qry1);
$amount=$r1[$month];

$net=$amount-$tran_amount;

$qr2=mysql_query("INSERT into archive SELECT * FROM payment_record WHERE payment_record.tenant_id = '$tenant_id' and payment_record.timestamp='$ts'")or die(mysql_error());
$qr3=mysql_query("DELETE FROM payment_record WHERE payment_record.tenant_id = '$tenant_id' and payment_record.timestamp='$ts'")or die(mysql_error());
$qq="UPDATE tenant SET $month='$net' where tenant.tenant_id='$tenant_id'";
mysql_query($qq)or die(mysql_error());

  function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
  }
  alert("Entry Deleted");
    //echo "Fee Submitted";
    //header('Location: bill_tenant.php');
}
else {
	function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
  }
  alert("No Entry Found");
}
?>
?>