<?php
  require 'functions.php';
  
  $conn = connect($config);
  if ($conn) {
    $connectMsg = 'We connected!';
  } else {
    $connectMsg = 'Doh! No connect';
  }
?>

<!doctype html>
<html>
  <head>
    
  </head>
  <body>
    <h1>This Here is a Test Page</h1>
    <h3>MSG: <?php echo $msg ?></h3>
    <h3>connectMsg: <?php echo $connectMsg ?></h3>
  </body>
</html>