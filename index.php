<?php

include 'koneksi.php';
error_reporting(0);

if(isset($_POST['login'])){
    
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = ($_POST['password']);

   $select = " SELECT * FROM t_user WHERE username = '$username' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $_SESSION['username'] = $username;
      header('location:view.php');
   }else{
      $error[] = "<script>alert('Username atau Password Salah')</script>";
   }

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet">
    <title>Login</title>
</head>
<body>
   <div class="container">
   <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
   ?>
    <form action="" method="POST" class="registrasi" >
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p> 
        <div class="input-group">
            <input type="text" placeholder="username" name ="username" value="<?php echo $username; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="password" name ="password" value="<?php echo $_POST['password']; ?>" required>
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p class="login-register-text">Don't have an account? <a href="register_form.php">Register Here</a>.</p>
    </form>
    </div>
</body>
</html>