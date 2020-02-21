<?php
$password = $_GET['password'];
if($password == 'boolean'){
  $class = 'green';
  $message = 'puoi entrare';
}else{
  $message = 'non puoi entrare';
  $class = 'red';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <h1 class= <?php echo $class ?>><?php echo $message ?></h1>

</body>
</html>
