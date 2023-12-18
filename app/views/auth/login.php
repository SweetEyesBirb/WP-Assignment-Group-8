<?php
// login.php
require_once '../../controllers/UserController.php';

// Check for success message
if (isset($_GET['registered']) && $_GET['registered'] == true) {
    echo '<p style="color: green;">Your account has been created successfully. Please login here.</p>';
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Instantiate the UserController
  $userController = new UserController();

  // Call the loginUser method with the form data
  $userController->loginUser($_POST);
}

?>

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

  <?php include '../../../includes/header.php'; ?>
  <?php include '../../../includes/navbar.php'; ?>

  <main>
  
  <form action="login.php" method="post">
    <h2>Login Form</h2>

    <div id="form-wrapper-main" class="container">
      <div class="form-group">
      <label for="user-email"><b>Email</b></label>
      <input type="text" placeholder="Enter Your Email" name="user-email" required>
      </div>

      <div class="form-group">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Your Password" name="psw" required>
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