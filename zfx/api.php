<?php
$date=date("Y-m-d");
  $file = './'.$date.'.txt';
  $filee = './max.txt';
  if (is_file($file)) {
    $old = file_get_contents($file);
    $new = $old + 1;
    file_put_contents($file,$new);
  } else {
    file_put_contents($file,1);
  } 
  if (is_file($filee)) {
    $old = file_get_contents($filee);
    $new = $old + 1;
    file_put_contents($filee,$new);
  } else {
    file_put_contents($filee,1);
    $new= 1;
  } 
?>