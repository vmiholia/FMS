
<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());
?>

<?php

?>
<?php
$editData = $_POST['data'];
 
// Add your validation and save data to database
 $query="ALTER TABLE `room` CHANGE `TransRoute` `$editData` VARCHAR(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;";
$query1="UPDATE room SET Misc='" .$editData. "' WHERE room_id='8'";


mysql_query($query1);
echo $editData;
?>