<nav>
    <ul>
        <li><a href="../../../index.php">Home</a></li>
        <li><a href="./app/views/general/membership.php">Join</a></li>
        <li><a href="./app/views/general/info.php">Info</a></li>

        <?php
        if (session_status() === PHP_SESSION_NONE) {
            // Check if a session is not already started
            session_start();
        }
        // Check if the user is logged in (you may have a session variable or other authentication method)
        $isLoggedIn = isset($_SESSION['user_id']); // Adjust this based on your authentication method

        // If the user is logged in, display the "Dashboard" link
        if ($isLoggedIn) {
            echo '<li><a href="./app/views/dashboard/dashboard.php">Dashboard</a></li>';
        }
        ?>

    </ul>
</nav>