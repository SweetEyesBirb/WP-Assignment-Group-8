<?php
if (session_status() === PHP_SESSION_NONE) {
    // Check if a session is not already started
    session_start();
}
?>

<header>
    <div id="logo">
        <img src="logo.png" alt="Sports Centre Logo">
    </div>
    <div id="search-bar">
        <input type="text" placeholder="Search..." aria-label="Search Bar">
    </div>
    <div id="login-box">
        <!-- <a href="./app/views/auth/login.php">Log In</a> -->
        <?php
        // Check if the user is logged in (you may have a session variable or other authentication method)
        $isLoggedIn = isset($_SESSION['user_id']); // Adjust this based on your authentication method

        // If the user is logged in, display the "Log Out" link; otherwise, display the "Log In" link
        if ($isLoggedIn) {
            echo '<a href="./app/views/auth/logout.php">Log Out</a>';
        } else {
            echo '<a href="./app/views/auth/login.php">Log In</a>';
        }
        ?>
    </div>
</header>