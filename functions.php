<?php
  include 'db.php';

  function showAllData(){
    global $connection;
    //read from database
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
  
    if(!$result){
      die('query failed' . mysqli_error($connection));
    } 
  
    while($rows = mysqli_fetch_assoc($result)){
      $id = $rows['id'];
      echo "<option value='$id'>$id</option>";
    }
  }
  

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //insert into database
    //$query = "INSERT INTO users (username, password) VAlUES ('$username', '$password')"; 
  }
?>