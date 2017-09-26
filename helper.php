<?php
mysql_select_db('billdb',mysql_connect('localhost','root','root'))or die(mysql_error());
?>
<?php
  function getMonth($value='Aug')
  {
    if($value=='Apr'){
        return 'April-May';
    }

    if($value=='Jun'){
        return 'June-July';
      
    }

    if($value=='Aug'){
        return 'August-September';
      
    }

    if($value=='Feb'){
        return 'February-March';
      
    }

    if($value=='Oct'){
        return 'October-November';
      
    }

    if($value=='Dece'){
        return 'December-January';
      
    }
  }
  function getModeOfPayment($value='1')
  {
      $sql="select paym_mode from paym_info where mode_id='$value'";
      $result=mysql_query($sql)or die(mysql_error());
      $modes=mysql_fetch_array($result);
      return $modes['paym_mode'];
  }
  function getIdofPayment($value='1')
  {
      $sql="select mode_id from paym_info where paym_mode='$value'";
      $result=mysql_query($sql)or die(mysql_error());
      $modes=mysql_fetch_array($result);
      return $modes['mode_id'];
  }
?>