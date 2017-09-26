<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());
?>

<?php
require __DIR__.'/../session1.php';
require __DIR__.'/../email/autoEmail.php';
require __DIR__.'/../helper.php';

?>

<?php
class payment_data {
  /* Member variables */
  private $admissonNo;
  private $modeOfPayment;
  private $referenceNo;
  private $month;
  private $transaction;
  private $fine;
  private $amount;
  private $filename;
  /* Member functions */

  public function getAdmissonNo()
  {
    return $this->admissonNo;
  }

  public function setAdmissonNo($admissonNo)
  {
    $this->admissonNo = $admissonNo;
    return $this;
  }
  public function getModeOfPayment()
  {
    return $this->modeOfPayment;
  }

  public function setModeOfPayment($modeOfPayment)
  {
    $this->modeOfPayment = $modeOfPayment;
    return $this;
  }
  public function getReferenceNo()
  {
    return $this->referenceNo;
  }

  public function setReferenceNo($referenceNo)
  {
    $this->referenceNo = $referenceNo;
    return $this;
  }
  public function getMonth()
  {
    return $this->month;
  }

  public function setMonth($month)
  {
    $this->month = $month;
    return $this;
  }
  public function getAmount()
  {
    return $this->amount;
  }

  public function setAmount($amount)
  {
    $this->amount = $amount;
    return $this;
  }
  public function getFine()
  {
    return $this->fine;
  }
  
  public function setFine($fine)
  {
    $this->fine = $fine;
    return $this;
  }
  public function getTransaction_id()
  {
    return $this->transaction;
  }
  
  public function setTransaction_id($transaction)
  {
    $this->transaction = $transaction;
    return $this;
  }
  public function getFilename($filename)
  {
    return $this->filename;
  }
  public function setFilename($filename)
  {
    $this->filename = $filename;
    return $this;
  }
  public function updateDb()
  {
    $amountsub=$this->amount;
    $transactionInfo=$this->referenceNo;
    $tenant_id= $this->admissonNo;
    $ammpaid= $amountsub;    
    
    $user_query = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
    $row = mysql_fetch_array($user_query);
    $varx=$row['room_id'];
    
    $user_query12 = mysql_query("SELECT * FROM room WHERE room.room_id = '$varx'")or die(mysql_error());
    $abcd = mysql_fetch_array($user_query12);
    $rental = $abcd['rental'];
    $rental1= $abcd['rental1'];
    $rental2= $abcd['rental2'];
    $rental3= $abcd['rental3'];
    $rental4= $abcd['rental4'];
    $rental5= $abcd['rental5'];
    $net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5;
    $total =$net;   
    $du=$total-$ammpaid;
    $monname = $this;
    $payment_mode = $this->modeOfPayment;
    if($payment_mode=='Cash')
    {
      $payment_mode=1;
    }
    elseif($payment_mode=='Cheque'){
      $payment_mode=2;
    }
    elseif($payment_mode=='Demand Draft'){
      $payment_mode=3;
    }
    elseif($payment_mode=='Credit/Debit Card'){
      $payment_mode=4;
    }
    elseif($payment_mode=='Paytm'){
      $payment_mode=5;
    }
    elseif($payment_mode=='NEFT'){
      $payment_mode=6;
    }
    elseif($payment_mode=='Online'){
      $payment_mode=7;
    }
    $filename = $this->filename;
    $nammon=$this->month;
    $fine=$this->fine;
    //$us = mysql_query("SELECT * FROM tenant WHERE tenant.tenant_id = '$tenant_id'")or die(mysql_error());
    //$qa = mysql_fetch_array($us);
    $az= $row[$nammon];
    $tenantName=$row['fname'];
    $do= $az+$amountsub;
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
    mysql_query("UPDATE tenant SET $nammon='$do',daat='$dii',timeStamp='$tim',amtpaid='$amountsub',trn_id='$transactionInfo',paym_mode='$payment_mode'  where tenant.tenant_id='$tenant_id'")or die(mysql_error());
    $transportation=$row['transportation_fees'];
    $varx=$row['room_id'];
    $annual=$row['annual_fees'];
    $totaldiscount=$row['dis_id']+$row['dis_id2']+$row['dis_id3'];;

    if($nammon=='Apr'){
      $net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5+$annual+$transportation;
    }else
    $net=$rental+$rental1+$rental2+$rental3+$rental4+$rental5+$transportation;

    $f=$net-$row[$nammon];

    $dd=$f-$totaldiscount-$amountsub;
    $filename=$this->filename;

    mysql_query("INSERT into payment_record Values('','$tenant_id','$dii','$amountsub','$transactionInfo','$payment_mode','$tim','$nammon','$dd','$fine','$filename')") or die(mysql_error());
    
  //  mysql_query("UPDATE payment_record SET due = '$dd' WHERE payment_record.tenant_id = '$tenant_id' and `timestamp`='$tim'")or die(mysql_error());

    //-----------------------Anmol----------------------------------

    
              // echo "here mofo";
  }
  public function DeleteDb()
  {
    $filename=$this->filename;
    $tenant_id=$this->admissonNo;
    $qry=mysql_query("SELECT * FROM  payment_record where payment_record.filename='$filename' and payment_record.tenant_id='$tenant_id'")or die(mysql_error());
    $r=mysql_fetch_array($qry);
    if(sizeof($r)!=0){
      $month=$r['month'];
      $tran_amount=$r['Amount'];

      $qry1=mysql_query("SELECT * FROM  tenant where tenant.tenant_id='$tenant_id'")or die(mysql_error());
      $r1=mysql_fetch_array($qry1);
      $amount=$r1[$month];

      $net=$amount-$tran_amount;

      $qr2=mysql_query("INSERT into archive SELECT * FROM payment_record WHERE payment_record.tenant_id = '$tenant_id' and payment_record.filename='$filename'")or die(mysql_error());
      $qr3=mysql_query("DELETE FROM payment_record WHERE payment_record.tenant_id = '$tenant_id' and payment_record.filename='$filename'")or die(mysql_error());
      $qq="UPDATE tenant SET $month='$net' where tenant.tenant_id='$tenant_id'";
      mysql_query($qq)or die(mysql_error());
    }
  }
}