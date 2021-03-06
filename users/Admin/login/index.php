

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ADMIN Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form" action="login.php">
                <h2> Admin Login</h2>
                <?php
                 if (isset($_GET['error'])) { ?>
     		    <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>

                ?>
                <div class="form-group-1">
                    
                    <input type="text" name="username" id="username" placeholder="username" required />
                    
                    <input type="password" name="password" id="password" placeholder="password" required />
                    </div>
                        <div class="form-submit">
                            <input type="submit" name="login" id="login" class="submit" value="Login" />
                        </div>
                     </div>
                    
                
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>