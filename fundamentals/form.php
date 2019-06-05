<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter username"><br/>
    <input type="password" name="password" placeholder="Enter password"><br/>
    <input type="submit" name="submit">
  </form>
  <div>
    <?php
      if(isset($_POST['submit'])){
        $names = ['Alice', 'Bob', 'Carlos', 'Dave', 'Eason'];
        $min = 3;
        $max = 10;

        if(strlen($_POST['username']) < $min) {
          echo 'Username too short!';
        };
        if(strlen($_POST['username']) > $max) {
          echo 'Username too long!';
        };
        if(!in_array($_POST['username'], $names)){
          echo 'please sign up first!';
        } else {
          echo 'welcome back, ' . $_POST['username'];
        }
      }

    ?>
  </div>
</body>
</html>