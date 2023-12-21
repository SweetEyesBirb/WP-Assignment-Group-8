<?php
require_once '../../models/Gym.php';

// Create a gym object
$gymModel = new Gym();

// Get upcoming gym sessions
$upcomingSessions = $gymModel->getUpcomingGymSessions();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Sports Centre Gym Sessions</title>

  <meta name="description" content="Book your gym classes here, have fun and get healthy,meet ">
  <meta name="keywords" content="gym, gym classes, gym booking, gym bookings, gym">
  <meta name="author" content="Sports Centre gym Classes">


  <link rel="stylesheet" href="../../../public/assets/styles/style.css">
  <link rel="stylesheet" href="../../../public/assets/styles/gym.css">
</head>

<body>

  <?php include '../../../includes/header.php';
        include '../../../includes/navbar.php';
  ?>

  <main>

    <div id="gym-main-image">
    </div>

    <section id="gym-sessions">
      <h1>Gym Sessions </h1>
      <p> Welcome, here you are able to look at available times for you you make use of our state of the art gym
        depending on the type of session youd like to have. </p>

      <?php if ($upcomingSessions): ?>
        <!-- Display upcoming sessions if found -->
        <?php foreach ($upcomingSessions as $session): ?>
          <div class="class">
            <h3>Date:
              <?php echo $session['formatted_date']; ?>
            </h3>
            <p>Time:
              <?php echo $session['formatted_start_time'] . " - " . $session['formatted_end_time']; ?>
            </p>
            <p>Price:
              <?php echo $session['price']; ?> £
            </p>
            <button id="book-now-btn">Book Now</button>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <!-- Display message if no upcoming sessions -->
        <p>Sorry, we have no upcoming gym sessions</p>
      <?php endif; ?>


    </section>

  </main>

  <?php include '../../../includes/footer.php'; ?>
</body>

</html>