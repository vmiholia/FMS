<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());

mysql_query("UPDATE `tenant` SET `due`=0,`Jan`=0,`Feb`=0,`Mar`=0,`Apr`=0,`May`=0,`Jun`=0,`Jul`=0,`Aug`=0,`Sep`=0,`Oct`=0,`Nov`=0,`Dece`=0 WHERE 1")or die(mysql_error());
mysql_query("DELETE from payment_record where 1")or die(mysql_error());

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
  }
  alert("Databse has been resetted");
    
header("location:electric_bill.php")
?>