<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Centre Home</title>
    <!-- SEO meta tags here -->

    <link rel="stylesheet" href="../public/assets/styles/style.css">
</head>
<body>
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
            <li><a href="../app/views/membership.php">Join</a></li>  <!-- link button               (join to registraton page ) --> 
            <li><a href="#">Info</a></li> 
            <!-- Add more navigation items as needed -->
        </ul>
    </nav>

    <div id="main-image"> <!-- From Unsplash.com accessed on 20/10/2023 -->
        <!-- carousel markup here -->
        <div id="join-button">
            <a href="../app/views/membership.php">Join Now</a>
        </div>
    </div>

    <section id="welcome-message">
        <h1>Welcome to Sports Centre</h1>
        <p>Your go-to destination for sports and fitness!</p>
    </section>

    <section id="facilities">
        <div class="facility-box" id="gym-facility-box">
            <h2>Gym</h2>
        </div>
        <div class="facility-box" id="pool-facility-box">
            <h2>Swimming Pool</h2>
        </div>
        <div class="facility-box" id="yoga-facility-box">
            <h2>Yoga</h2>
        </div>
        <!-- Add more facility boxes as needed -->
    </section>

    <section id="whats-on-today">
        <h2>What's on Today</h2>
        <div class="class">
            <h3>Yoga Class</h3>
            <p>Time: 9:00 AM</p>
            <p>Availability: 5 spots left</p>
            <button id="book-now-btn">Book Now</button>
        </div>
        <div class="class">
            <h3>Zumba Class</h3>
            <p>Time: 11:00 AM</p>
            <p>Availability: 3 spots left</p>
            <button id="book-now-btn">Book Now</button>
        </div>
        <!-- Add more classes as needed -->
    </section>

    <footer>
        <p>&copy; 2023 Sports Centre. All rights reserved.</p>
    </footer>
</body>
</html>
<!-- // Consider this snippet from ./app/controllers/index_controller.php: -->