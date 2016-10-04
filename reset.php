<!DOCTYPE html>
<html lang="en">
 <?php include("includes/head.php"); ?>

  <style>.logout {display:none;}</style>
  
  <body>
  
  <?php include("includes/analytics.php"); ?>
  
  <?php include("includes/nav.php"); ?>
 
 <div class="container">
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
    <p align="center"><img src="images/DR_Logo.jpg" alt="Logo"></p>
<form action="reset-exec.php" method="post">
    <h1>Reset Login Status</h1>

    <div class="form-group">
        <input type="text" name="myusername" id="myusername" class="form-control" placeholder="Email Address" autofocus>
    </div>

    <button value="Reset Status" class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
</form>
</div>
    </div>
    </div>
<?php include("includes/scripts.php"); ?>
    
  </body>
</html>