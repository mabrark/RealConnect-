<?php
    session_start();    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RealConnect CRM - Error</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
    </head>
    <body>
        <?php include("header.php"); ?>

        <main>
            <h2>Error</h2>
            <p>
                <?php echo $_SESSION["add_error"]; ?> 
            </p>

            <p><a href="index.php">View Property</a></p>
        </main>

        <?php include("footer.php"); ?>
    </body>
</html>