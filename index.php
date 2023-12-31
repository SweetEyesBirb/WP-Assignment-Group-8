<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Centre Home</title>

    <meta name= "description" content="Welcome to Group 8 Sports Centre. We offer various classes including Yoga, Swimming and Gym. Book your sports here, have fun and get healthy. Our new facility offers the latest equipment!">
    <meta name="keywords" content="home page, yoga, swimming, gym, swimming pool, sports, book, sports booking, sports booking form, sports centre, group 8 sports centre, sports centre booking">

    <link rel="stylesheet" href="./public/assets/styles/style.css">
</head>
<body>

  <?php include './includes/header.php';
  include './includes/navbar.php';

  include './includes/main-image.php'; ?>

    <section id="welcome-message">
        <h1>Welcome to Sports Centre</h1>
        <p>Your go-to destination for sports and fitness!</p>
    </section>

    <section id="facilities">
      <a href="./app/views/gym/gym.php">
        <div class="facility-box" id="gym-facility-box">
            <h2>Gym</h2>
        </div>
      </a>
      <a href="./app/views/swimming-pool/swimming-pool.php">
        <div class="facility-box" id="pool-facility-box">
            <h2>Swimming Pool</h2>
        </div>
      </a>
      <a href="./app/views/yoga/yoga.php">
        <div class="facility-box" id="yoga-facility-box">
            <h2>Yoga</h2>
        </div>
      </a>
    </section>

    <section id="whats-on-today">
        <h2>What's on Today</h2>
      
      <p>data could be retrieved from a table using SELECT * FROM table_name WHERE date = "today". When clicking on Book Now, the booking information should be sent to the "bookings table" in the database if the user has logged in</p>
      
        <div class="class">
            <h3>Yoga Class</h3>
            <p>Time: 9:00 AM</p>
            <p>Availability: 5 spots left</p> <!-- availability may be hard to implement -->
            <button id="book-now-btn">Book Now</button>
        </div>
        <div class="class">
            <h3>Zumba Class</h3>
            <p>Time: 11:00 AM</p>
            <p>Availability: 3 spots left</p> <!-- availability may be hard to implement -->
            <button id="book-now-btn">Book Now</button>
        </div>
    </section>

  <?php include './includes/footer.php'; ?>
</body>
</html>