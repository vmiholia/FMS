
<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());
?>
<?php
	require_once(__DIR__.'/email-script.php');
?>

<?php
require __DIR__ . '/vendor/autoload.php';
use mikehaertl\wkhtmlto\Pdf;
function sendMail($id,$tenantName)
{
	 $sql = "SELECT email FROM tenant WHERE   tenant.tenant_id = '$id' ";
	 $qry = mysql_query($sql);
	 $result=mysql_fetch_array($qry);
	 $sess_id=session_id();
	 // echo $sess_id;
	 $result['email'];
	 $options = array(
	 	'cookie-jar'=>__DIR__.'/my.jar'
	    );
	$pdf = new Pdf;
	$pdf->setOptions($options);
	$url  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
	$url .= $_SERVER['SERVER_NAME'];
	$url .= $_SERVER['REQUEST_URI'];
	$url =dirname($url);
	// echo "url is " .$url."                    \n";
	$pdf->addPage($url."/print_receipt.php?id=".$id);
	$pdfFile=__DIR__.'/temp.pdf';

	// echo "url of pdf file is ".$pdfFile;
	if (!$pdf->saveAs($pdfFile)) {
		// echo " here ";
	    echo $pdf->getError();
	    // echo "then here ";
	}
	else{
		send_mail($result['email'],$pdfFile,$id,$tenantName);
	}
}
 
?>