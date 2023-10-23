<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Centre Registration Page</title>
    <!-- SEO meta tags here -->

    <link rel="stylesheet" href="../../../public/assets/styles/style.css">
    <link rel="stylesheet" href="../../../public/assets/styles/registration.css">
</head>

<body>
    <main>

    <? include '../../../includes/header.php'; ?>
    <? include '../../../includes/navbar.php'; ?>

        <form id="signup-form" action="" method="post">
            <h1>Sign Up</h1>
            <div id="form-wrapper-main">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" id="surname">
                </div>
                <div class="form-group">
                    <label for="country">(Optional) Country:</label>
                    <input type="text" name="country" id="country">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="password2">Password Again:</label>
                    <input type="password" name="password2" id="password2">
                </div>
                <div class="form-group">
                    <label for="agree">
                        <input type="checkbox" name="agree" id="agree" value="yes" /> I agree
                        with the
                        <a href="#" title="term of services">term of services</a>
                    </label>
                </div>
                <button type="submit">Register</button>
            </div>
            <footer>Already a member? <a href="login.php">Login here</a></footer>
        </form>

    </main>

  <?php include '../../../includes/footer.php'; ?>

</body>