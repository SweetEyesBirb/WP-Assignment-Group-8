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
  // define variables and set to empty values
  $nameErr = $emailErr = $emailAgainErr = $passwordErr = $passwordAgainErr = $emailMatchErr = $passwordMatchErr = "";
  $name = $surname = $email = $emailAgain = $password = $passwordAgain = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }
    
    if (empty($_POST["surname"])) {
      $surnameErr = "Surname is required";
    } else {
      $surname = test_input($_POST["surname"]);
      // check if surname only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$surname)) {
        $surnameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["emailAgain"])) {
      $emailAgainErr = "Email is required";
    } else {
      $emailAgain = test_input($_POST["emailAgain"]);
      // check if e-mail address is well-formed
      if (!filter_var($emailAgain, FILTER_VALIDATE_EMAIL)) {
        $emailAgainErr = "Invalid email format";
      }
    }
    
    if (empty($_POST["password"])) {
      $passwordErr = "Password is required";    
    } else {
      $password = test_input($_POST["password"]);
      // check if password is well-formed
      if (!preg_match("/^[a-zA-Z0-9]*$/",$password)) {
        $passwordErr = "Only letters and numbers allowed";
      }
    }

    if (empty($_POST["passwordAgain"])) {
      $passwordAgainErr = "Password is required";    
    } else {
      $passwordAgain = test_input($_POST["passwordAgain"]);
      // check if password is well-formed
      if (!preg_match("/^[a-zA-Z0-9]*$/",$passwordAgain)) {
        $passwordAgainErr = "Only letters and numbers allowed";
      }
    }

    if ($email !== $emailAgain) {
      $emailMatchErr = "Emails do not match";
    }

    if ($password !== $passwordAgain) {
      $passwordMatchErr = "Passwords do not match";
    }

    if ($nameErr == "" && $surnameErr == "" && $emailErr == "" && $emailAgainErr == "" && $passwordErr == "" && $passwordAgainErr == "" && $emailMatchErr == "" && $passwordMatchErr == "") {
      echo "<h2>You have successfully registered!</h2>";
      echo "<p>Your name is " . $name . " " . $surname . "</p>";
      echo "<p>Your email address is " . $email . "</p>";
      echo "<p>Your password is " . $password . "</p>";
    
    } else {
      echo "<h2>Please correct the following errors:</h2>";
      if ($nameErr != "") {
        echo "<p>" . $nameErr . "</p>";
      }
      if ($surnameErr != "") {
        echo "<p>" . $surnameErr . "</p>";
      }
      if ($emailErr != "") {
        echo "<p>" . $emailErr . "</p>";
      }
      if ($emailAgainErr != "") {
        echo "<p>" . $emailAgainErr . "</p>";
      }
      if ($passwordErr != "") {
        echo "<p>" . $passwordErr . "</p>";
      }
      if ($passwordAgainErr != "") {
        echo "<p>" . $passwordAgainErr . "</p>";
      }
    }

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

    <main>

    <? include '../../../includes/header.php'; ?>
    <? include '../../../includes/navbar.php'; ?>

        <form id="signup-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h1>Sign Up</h1>
            <div id="form-wrapper-main">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="<?php echo $name;?>" required>
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" id="surname" value="<?php echo $surname;?>" required>
                </div>

              <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
              </div>

              <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
              
              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" name="email" id="email" value="<?php echo $email;?>" required>
              </div>
              <div class="form-group">
                  <label for="email-again">Email Again:</label>
                  <input type="email" name="email-again" id="email-again" value="<?php echo $emailAgain;?>" required>
              </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" value="<?php echo $password; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password-again">Password Again:</label>
                    <input type="password" name="password-again" id="password-again" value="<?php echo $passwordAgain; ?>" required>
                </div>
              
                <button type="submit">Register</button>
            </div>
            <footer>Already a member? <a href="login.php">Login here</a></footer>
        </form>

    </main>

  <?php include '../../../includes/footer.php'; ?>

</body>
</html>