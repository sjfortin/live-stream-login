<?php
  session_start();

  if(isset($_SESSION['username'])){
    header("location:index.php");
  }
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php include("includes/head.php"); ?>


    <style>
        .logout {
            display: none;
        }
    </style>

    <body>

        <?php include("includes/nav.php"); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                    <?php include("includes/logo.php"); ?>

                    <form name="form1" method="post" action="checklogin.php">

                        <h2>Livestream Login</h2>
                        <p>Please enter your email address and password below to watch the livestream.</p>
                        <div class="form-group">
                            <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Email Address" autofocus>
                        </div>
                        <div class="form-group">
                            <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
                        </div>

                        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

                    </form>
                    <div id="message"></div>
                    <div class="questions">
                        <p>
                            Submit your questions to <a href="mailto:questions@client.com" target="_blank">questions@client.com</a>.</div>
                    </p>
                </div>
            </div>
        </div>

        <?php include("includes/scripts.php"); ?>

    </body>

    </html>
