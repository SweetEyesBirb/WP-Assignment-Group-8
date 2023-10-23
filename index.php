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

  <?php include './includes/header.php'; ?>

  <?php include './includes/navbar.php'; ?>

  <?php include './includes/main-image.php'; ?>

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

  <?php include './includes/footer.php'; ?>
</body>
</html>
<!-- // Consider this snippet from ./app/controllers/index_controller.php: -->