<html>
<head>
    <title>Add Users</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body class="container-body" color="#2eea8c">

<div class="login-form-container" id="login-form">
    <div class="login-form-header">
            
            <h3>Spothofy</h3>
    </div>
    <div class="login-form-content">
 
    <form action="add.php" method="post" name="form1" class="login-form">
   
              <div class="input-container">
                <i class="fa fa-envelope"></i>
                <input type="email" class="input" name="email" placeholder=" Email"/>
            </div>
             <div class="input-container">
                <i class="fa fa-fullname"></i>
                <input type="text" class="input" name="name" placeholder=" Fullname"/>
            </div>
            <div class="input-container">
                <i class="fa fa-username"></i>
                <input type="text" class="input" name="username" placeholder=" Username"/>
            </div>
            <div class="input-container">
                <i class="fa fa-lock"></i>
                <input type="password"  id="login-password" class="input" name="password" placeholder=" Password"/>
            </div>
          
            <input type="submit" name="Submit" value="Sign Up">
<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,username,password) VALUES('$name','$email','$username','$password')");
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
    </div>
</div>
</form>
</div>
</div>
    
    
</body>
</html>