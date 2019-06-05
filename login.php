<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', 'phppass', 'loginApp');

    if($connection){
      echo 'connected';
    } else {
      die('connection failed');
    }

    //insert into database
    //$query = "INSERT INTO users (username, password) VAlUES ('$username', '$password')"; 

    //read from database
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die('query failed' . mysqli_error($connection));
    } 
    
    // if($username && $password){
    // }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="col-sm-6">
      <form action="login.php" method="post">
        <div class="form-group">
          <label for="username">username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">password</label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="selectId">ID</label>
          <select name="" id="">
            <option value=""></option>
          </select>
        </div>
        <input class="btn btn-warning" type="submit" name="submit" value="Submit">
      </form>
      
      <div>
        <?php 
          while($row = mysqli_fetch_assoc($result)){
        ?>
        <pre>
          <?php
            print_r($row);
          ?>
        </pre>
        <?php
          }
        ?>
      </div>
      
    </div>
  </div>
</body>
</html>