<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>

<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());

if(isset($_GET['month']))
{
	$month=$_GET['month'];
	if($month=='Feb')
	{
		echo '<div class="pull-right">
				<form method="post" action="emon2.php">
					<input type="submit" name="export" class="btn btn-warning" value="Download CSV" />
				</form>
			</div>';
		$mm="Feb-Mar";
	}
	elseif($month=='Apr')
	{
		echo '<div class="pull-right">
				<form method="post" action="emon4.php">
					<input type="submit" name="export" class="btn btn-warning" value="Download CSV" />
				</form>
			</div>';
		$mm="Apr-May";
	}
	
	elseif($month=='Jun')
	{
		echo '<div class="pull-right">
				<form method="post" action="emon6.php">
					<input type="submit" name="export" class="btn btn-warning" value="Download CSV" />
				</form>
			</div>';
		$mm="Jun-Jul";
	}
	elseif($month=='Aug')
	{
		echo '<div class="pull-right">
				<form method="post" action="emon8.php">
					<input type="submit" name="export" class="btn btn-warning" value="Download CSV" />
				</form>
			</div>';
		$mm="Aug-Sep";
	}
	elseif($month=='Oct')
	{
		echo '<div class="pull-right">
				<form method="post" action="emon10.php">
					<input type="submit" name="export" class="btn btn-warning" value="Download CSV" />
				</form>
			</div>';
		$mm="Oct-Nov";
	}
	elseif($month=='Dece')
	{
		echo '<div class="pull-right">
				<form method="post" action="emon12.php">
					<input type="submit" name="export" class="btn btn-warning" value="Download CSV" />
				</form>
			</div>';
		$mm="Dec-Jan";
	}
}
echo "<h3>$mm</h3>";
?>
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
			<?php if($month=="Apr"){echo '<th>Annual Fees</th>';} ?>
			<th>Tution Fee</th>
			<th>Developemnt fee</th>
			<th>Smart Lab</th>
			<th>Transportation</th>
			<th>Net Fees</th>
			<th>Fine Paid</th>
			<th>Total Paid</th>
			<th>Total Due</th></tr>
		<tr class="warning no-result">
			<td colspan="4"><i class="fa fa-warning"></i> No result</td>
		</tr>
		</thead>
		<tbody>
			<?php 
			$dat=date("d/m/Y");
			$count=0;
			$query = "select * from tenant
			LEFT JOIN room ON tenant.room_id = room.room_id;";
			$result = mysql_query($query);

			if(mysql_num_rows($result) > 0)
			{
				while($row = mysql_fetch_array($result))
				{
					$Transportation=$row['transportation_fees'];
					$annual=$row['annual_fees'];
					$totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];
					$total=$row["rental"]+$row["rental1"]+$row["rental2"]+$Transportation-$totaldiscount;

					$total1=0;
					$due=0;
					$months=array('Apr','Jun','Aug','Oct','Dece','Feb');
					foreach ($months as $value) {
						$due +=$total-$row[$value];
						if($value==$month){
							break;
						}
					} 
					$n1=0;
					$count++;
					$room_name=(string)$row['room_name'];
					$user_query1 = mysql_query("SELECT sum(fine) as summ FROM payment_record WHERE payment_record.tenant_id = '".$row['tenant_id']."' and month='$month' group by month")or die(mysql_error());
       				$row2 = mysql_fetch_array($user_query1);
					
					if(mysql_num_rows($user_query1)>0)
					{
						$fine=$row2['summ'];
					}
					else $fine=0;

					echo "<tr>
					<td scope='row'>$count</td>
					<td>".$row['tenant_id']."</td>
					<td>".$row['fname']." ".$row['lname']."</td>
					<td>".$row['room_name']."</td>";
					if($month=="Apr"){echo '<td>'.$annual.'</td>';}
					echo "<td>".$row['rental']."</td>
					<td>".$row['rental1']."</td>
					<td>".$row['rental2']."</td>
					<td>$Transportation</td>";
					if($month=="Apr"){echo '<td>'.($total+$annual).'</td>';}
					else echo "<td>$total</td>";

					echo "<td>".$fine."</td>
					<td>".($row[$month]+$fine)."</td>
					<td>".($due+$annual)."</td>
					</tr>";
				}

			}

			?>