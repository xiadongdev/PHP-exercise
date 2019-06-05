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

  function updateData(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    //insert into database
    //$query = "INSERT INTO users (username, password) VAlUES ('$username', '$password')"; 

    //update database
    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if(!$result){
      die('query failed' . mysqli_error($connection));
    
    }
  }
  

  
?>