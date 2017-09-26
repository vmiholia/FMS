<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<div class="pull-right">
	<form method="post" action="export2.php">
		<input type="submit" name="export" class="btn btn-warning" value="Download CSV" />
	</form>
</div>
<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());
echo "<h3>Till Today</h3>";?>
<div class="form-group pull-right">
	<input type="text" class="search form-control" onkeyup="showHint(this.value)" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results" id="searchtable">
	<thead><tr>
		<th>S.no</th>
		<th>Adm.No</th>
		<th>Name</th>
		<th>Class</th>
		<th>Apr-May</th>
		<th>Jun-Jul</th>
		<th>Aug-Sep</th>
		<th>Oct-Nov</th>
		<th>Dec-Jan</th>
		<th>Feb-Mar</th>
		<th>Total Due</th>
		<th>Total Paid</th></tr>
		<tr class="warning no-result">
			<td colspan="4"><i class="fa fa-warning"></i> No result</td>
		</tr>
	</thead>
	<tbody>
	<?php 
$dat=date("d/m/Y");
$count=0;
 $query = "select * from tenant LEFT JOIN room ON tenant.room_id = room.room_id";
 $result = mysql_query($query);
  while($row = mysql_fetch_array($result))
  {  
  	$tenant_id=$row['tenant_id'];
	$user_query1 = mysql_query("SELECT sum(fine) as summ FROM payment_record WHERE payment_record.tenant_id = '".$row['tenant_id']."' group by tenant_id")or die(mysql_error());
       	$row2 = mysql_fetch_array($user_query1);
		if(mysql_num_rows($user_query1)>0)
		{
			$fine=$row2['summ'];
		}
		else $fine=0;
	$n3=0;
	$count++;
	$transporation=$row['transportation_fees'];
	$totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];
	$total=$row["rental"]+$row["rental1"]+$row["rental2"]+$row["rental3"];
	$jan2=$total-$row['Feb']-$totaldiscount+$transporation;
	$jan4=$row['annual_fees']+$total-$row['Apr']-$totaldiscount+$transporation;
	$jan6=$total-$row['Jun']-$totaldiscount+$transporation;
	$jan8=$total-$row['Aug']-$totaldiscount+$transporation;
	$jan10=$total-$row['Oct']-$totaldiscount+$transporation;
	$jan12=$total-$row['Dece']-$totaldiscount+$transporation;
	$total1=$row['Feb']+$row['Apr']+$row['Jun']+$row['Aug']+$row['Oct']+$row['Dece']+$fine;
	$totaldue=$jan12+$jan2+$jan4+$jan6+$jan8+$jan10;
  echo "
			<tr><td scope='row'>$count</td>
			<td>".$row['tenant_id']."</td>
			<td>".$row['fname']." ".$row['lname']."</td>
			<td>".$row['room_name']."</td>
			<td>$jan4</td>
			<td>$jan6</td>
			<td>$jan8</td>
			<td>$jan10</td>
			<td>$jan12</td>
			<td>$jan2</td>
			<td>$totaldue</td>
			<td>$total1</td></tr>
			";


}
?>