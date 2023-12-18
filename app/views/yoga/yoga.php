<?php
require_once '../../models/Yoga.php';

// Create a Yoga object
$yogaModel = new Yoga();

// Get upcoming yoga sessions
$upcomingSessions = $yogaModel->getUpcomingYogaSessions();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Sports Centre Yoga Classes</title>

  <meta name="description" content="Book your yoga classes here, have fun and get healthy">
  <meta name="keywords" content="yoga, yoga classes, yoga booking, yoga booking form, yo">
  <meta name="author" content="Sports Centre Yoga Classes">

  <link rel="stylesheet" href="../../../public/assets/styles/style.css">
  <link rel="stylesheet" href="../../../public/assets/styles/yoga.css">
</head>

<body>

  <?php include '../../../includes/header.php';
  include '../../../includes/navbar.php';
  ?>

  <main>

    <div id="yoga-main-image">
    </div>

    <section id="yoga-classes">
      <h1>Yoga Classes</h1>

      <p>For each container, get tuple from database and display tuple info. When clicking on Book Now, the booking
        information should be sent to the "bookings table" in the database</p>
      <?php if ($upcomingSessions): ?>
        <!-- Display upcoming sessions if found -->
        <?php foreach ($upcomingSessions as $session): ?>
          <div class="class">
            <h3>Date:
              <?php echo $session['formatted_date']; ?>
            </h3>
            <p>Time:
              <?php echo $session['formatted_start_time'] . "-" . $session['formatted_end_time']; ?>
            </p>
            <p>Price:
              <?php echo $session['price']; ?> £
            </p>
            <button id="book-now-btn">Book Now</button>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <!-- Display message if no upcoming sessions -->
        <p>No upcoming yoga sessions</p>
      <?php endif; ?>

    </section>

  </main>

  <?php include '../../../includes/footer.php'; ?>
</body>

</html>