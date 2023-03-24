<?php
  $fst = $_POST['ip']."";
  $scnd = $_POST['city']."";
  $thrd = $_POST['region']."";
  $frth = $_POST['country']."";
  $ffth = $_POST['loc']."";
  $sxth = $_POST['org']."";
  $svnth = $_POST['time']."";
  $eghth = $_POST['platform']."";
  $ninth = $_POST['ram']."";
  $tnth = $_POST['browser']."";
  $elevnth = $_POST['fulluser']."";
  $twelth = $_POST['size']."";


  $file=fopen("file.txt", "a");
  fwrite($file, $fst);
  fwrite($file, "\r\n");

  fwrite($file, $scnd);
  fwrite($file, "\r\n");

  fwrite($file, $thrd);
  fwrite($file, "\r\n");

  fwrite($file, $frth);
  fwrite($file, "\r\n");

  fwrite($file, $ffth);
  fwrite($file, "\r\n");

  fwrite($file, $sxth);
  fwrite($file, "\r\n");

  fwrite($file, $svnth);
  fwrite($file, "\r\n");

  fwrite($file, $eghth);
  fwrite($file, "\r\n");

  fwrite($file, $ninth);
  fwrite($file, "\r\n");

  fwrite($file, $tnth);
  fwrite($file, "\r\n");

  fwrite($file, $elevnth);
  fwrite($file, "\r\n");

  fwrite($file, $twelth);
  fwrite($file, "\r\n\n");
  fclose($file);
?>