<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Projet Login</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="header">
        <h2>Home Page</h2>
    </div>

    <div class="content">
        <?php if(isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                    ?>
                </h3>
            </div>
    </div>

</form>
</body>
</html>