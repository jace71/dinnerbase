<?php
//   require 'functions.php';
  
//   $conn = connect($config);
//   if ($conn) {
//     $connectMsg = 'We connected!';
//   } else {
//     $connectMsg = 'Doh! No connect';
//   }

  //$recipes = get('recipes', $conn);
?>

<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid">
      
      <div class="row">
        
        <div class="col-md-2">
          
          <h3>DinnerRanger!</h3>
          
        </div><!--end col-md-2-->
        
        <div class="col-md-6">
          
          <h1>This Here is a Test Page</h1>
          <h3>MSG: <?php echo $msg ?></h3>
          <h3>connectMsg: <?php echo $connectMsg ?></h3>
          
          <h4>Recipe Table  Below:</h4>
          
          <h2>Your Recipies</h2>
          
          <?php
            
            //$sql = "SELECT * FROM recipes";
            //$recipes = $conn->query($sql);
            
          ?>

          <table class="table-striped table-hover">

          <?php //foreach $recipes as $recipe : ?>

            <tr>
              <td><?= //$recipe['name']; ?></td>
              <td><?= //$recipe['instructions']; ?></td>
            </tr>

          <?php //endforeach ?>

          </table>          
          
        </div><!--end col-md-8-->
        
        <div class="col-md-4">
          
          <div>Right side row</div>
          
        </div><!--end col-md-4-->
        
      </div><!--end row-->
      
      
      
    </div><!--end container-fluid-->
  </body>
</html>