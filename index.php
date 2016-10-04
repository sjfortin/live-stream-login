<?php
  session_start();

  if(!isset($_SESSION['username'])){
    header("location:main_login.php");
  }

?>
    <!DOCTYPE html>
    <html lang="en">
    <?php include("includes/head.php"); ?>

    <body>

        <?php include("includes/nav.php"); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <?php include("includes/logo.php"); ?>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://livestream.com/accounts/xxxxxxx/events/xxxxxxx/player" scrolling="no"> </iframe>
                        <script type="text/javascript" data-embed_id="ls_embed_1470140227" src="//livestream.com/assets/plugins/referrer_tracking.js"></script>
                    </div>

                    <div class="questions">
                        <p>
                            Submit your questions to <a href="mailto:questions@client.com" target="_blank">questions@client.com</a>.</p>
                    </div>

                </div>
            </div>
        </div>


        <?php include("includes/footer.php"); ?>
        <?php include("includes/scripts.php"); ?>

    </body>

    </html>
