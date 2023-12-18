<?php
// registration.php

// Include necessary files
require_once '../../controllers/UserController.php';
require_once '../../models/DbConnection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Instantiate the UserController with the database connection
    $userController = new UserController();

    // Call the registerUser method with the form data
    $userController->registerUser($_POST);
}

// Display the registration form
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Centre Registration Page</title>

    <link rel="stylesheet" href="../../../public/assets/styles/style.css">
    <link rel="stylesheet" href="../../../public/assets/styles/registration.css">
</head>

<body>

<?php
// Display specific validation errors, if any
if (isset($_GET['errors']) && is_array($_GET['errors'])) {
    foreach ($_GET['errors'] as $fieldName => $errorMessage) {
        echo "<p style='color: red;'>$errorMessage</p>";
    }
}
?>

    <main>

    <?php include '../../../includes/header.php'; ?>
    <?php include '../../../includes/navbar.php'; ?>

        <form id="signup-form" action="registration.php" method="post">
            <h1>Sign Up</h1>
            <div id="form-wrapper-main">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="" required>
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" id="surname" value="" required>
                </div>

              <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
              </div>
              
              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" name="email" id="email" value="" required>
              </div>
              <div class="form-group">
                  <label for="email-again">Email Again:</label>
                  <input type="email" name="email-again" id="email-again" value="" required>
              </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" value="" required>
                </div>
                <div class="form-group">
                    <label for="password-again">Password Again:</label>
                    <input type="password" name="password-again" id="password-again" value="" required>
                </div>
              
                <button type="submit">Register</button>
            </div>
            <footer>Already a member? <a href="login.php">Login here</a></footer>
        </form>

    </main>

  <?php include '../../../includes/footer.php'; ?>

</body>
</html>