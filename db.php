<?php
  $connection = mysqli_connect('localhost', 'root', 'phppass', 'loginApp');
  if(!$connection){
    die('connection failed');
  }
?>