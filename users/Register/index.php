<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form" action="submit1.php">
                <h2>REGISTRATION DETAILS</h2>
                <div class="form-group-1">
                    <input type="text" name="name" id="name" placeholder="Name" required />
                    <?php
                 if (isset($_GET['emailerror'])) { ?>
     		    <p class="error"><?php echo $_GET['emailerror']; ?></p>
     	        <?php } ?>
                    
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <?php
                        if (isset($_GET['iderror'])) { ?>
                        <p class="error">id already exists</p>
                        <?php } ?>
                    <input type="number" name="id" id="id" placeholder="Id number" required pattern="[0-9]{8}" title="write your id correctly (8 digits)" maxlength="8" />
                    
                    <input type="tel" name="phone_number" id="phone_number" placeholder="Phone number" pattern="[254][1 || 7][0-9]{8}" title="format:07xxxxxxxx/ 01xxxxxxxx"  />
                    
                    <div class="select-list">
                        <select name="ward" id="ward" required>
                            <option selected disabled value="">Ward</option>
                            <option value="society">Londiani ward</option>
                            <option value="language">Chepseon ward</option>
                            <option value="chepseon">Kedowa/kimugul ward</option>
                            <option value="chepseon">Tendeno/sorget ward</option>
                        </select>
                    </div>
                </div>
                <div class="form-group-2">
                    <h3>Skill</h3>
                    <input type="text" name="skill" id="skill" placeholder="enter your skill" required />
                        
                    </div>

                    <h3>Educational level</h3>
                    <div class="select-list">

                        <select name="class" id="class_level" required>
                            <option selected disabled value="primary"> School level</option>
                            <option value="secondary">Primary level</option>
                            <option value="secondary">Secondary level</option>
                            <option value="VTC">Vocational Training Centre</option>
                            <option value="TTC">Colleges</option>
                            <option value="University">University</option>
                        </select>
                        </div>

                        <h3>Honours attained</h3>
                        <div class="select-list">
    
                            <select name="honours" id="honours" required>
                                <option selected disabled value="">choose one</option>
                                <option value="certificate">none</option>
                                <option value="certificate">certificate</option>
                                <option value="diploma">Diploma</option>
                                <option value="degree">Degree</option>
                                
                            </select>
                           <!----
                            </br>
                            </br>
                            <input type="password" name="password" id="pwd" placeholder="Password" required />
                            <input type="password" name="password_confirm" id="pwd_confirm" placeholder="Repeat your password" required />  
                            </div>
                        -->
                        <div class="form-submit">
                            <input type="submit" name="submit" id="submit" class="submit" value="Submit" />
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