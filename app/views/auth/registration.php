<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Centre Home</title>
    <!-- SEO meta tags here -->

    <link rel="stylesheet" href="../../../public/assets/styles/style.css">
    <link rel="stylesheet" href="../../../public/assets/styles/registration.css">
</head>

<body>
    <main>
        <header>
            <div id="logo">
                <img src="logo.png" alt="Sports Centre Logo">
            </div>
            <div id="search-bar">
                <input type="text" placeholder="Search..." aria-label="Search Bar">
            </div>
            <div id="login-box">
                <!-- login form here -->
                <p>Log In</p>
            </div>
        </header>

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Join</a></li>
                <li><a href="#">Info</a></li>
                <!-- Add more navigation items as needed -->
            </ul>
        </nav>

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

    <footer>
        <p>&copy; 2023 Sports Centre. All rights reserved.</p>
    </footer>

</body>