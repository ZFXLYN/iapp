<?php
header("Content-type:text/html;charset=utf-8");
$date=date("Y-m-d");
  $file = './'.$date.'.txt';
  $filee = './max.txt';
  $old = file_get_contents($file);
  $oldd = file_get_contents($filee);
  $arr = array('tongji'=>$oldd,'jinri'=>$old);
  echo json_encode($arr,JSON_UNESCAPED_UNICODE);
?>