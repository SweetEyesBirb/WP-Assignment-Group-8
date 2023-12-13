<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Centre Login</title>

    <link rel="stylesheet" href="../../../public/assets/styles/style.css">
    <link rel="stylesheet" href="../../../public/assets/styles/registration.css">
  <link rel="stylesheet" href="../../../public/assets/styles/login.css">
</head>

<body>

  <? include '../../../includes/header.php'; ?>
  <? include '../../../includes/navbar.php'; ?>

  <main>
  
  <form action="/action_page.php" method="post">
    <h2>Login Form</h2>

    <div id="form-wrapper-main" class="container">
      <div class="form-group">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      </div>

      <div class="form-group">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      </div>
        
      <button type="submit">Login</button>
    </div>

    <div id="login-bottom-container">
      <p>Forgot password?<a href="#"><strong> Click Here</strong></a></p>
      <footer id="login-footer">
      <p>Not a member?<a href="registration.php"><strong> Register Here</strong></a></p>
        </footer>
    </div>
    
  </form>

  </main>

  <?php include '../../../includes/footer.php'; ?>

</body>
</html>