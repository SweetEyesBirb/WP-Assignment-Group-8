<?php
require_once('../../models/ClassModel.php');
require_once('../../models/UserModel.php');
require_once ('../../models/Dashboard.php');

$dashboard = new Dashboard();
$userModel = new UserModel();

// Assuming $email is the logged-in user's email
$email = $_SESSION['email']; // Make sure you set the correct session variable

// Get user information
$userInfo = $userModel->getUserByEmail($email);

$allBookings = $dashboard->getBookings();

if (session_status() === PHP_SESSION_NONE) {
    // Check if a session is not already started
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <link rel="stylesheet" href="../../../public/assets/styles/style.css">
    <link rel="stylesheet" href="../../../public/assets/styles/dashboard.css">
</head>
<body>

  <?php include '../../../includes/header.php';
  include '../../../includes/navbar.php';
  ?>

  <main>
    <section id="dashboard">
      <h1>Dashboard</h1>
      <p>Welcome to your dashboard, <!-- user name! --> <?php echo $userInfo['name']; /* isset($_SESSION['email']) ? isset($_SESSION['email']) : 'Guest'; */ ?></p> <br>
      <p>You can view or cancel your bookings here</p>

      <?php if($allBookings): ?>
        <?php foreach($allBookings as $booking):?>
      <div class="class booked-class">
          <h3><!-- Class Name --><?php echo $booking['class_name']; ?></h3>
          <p>Date: <?php echo $booking['formatted_date']; ?></p>
          <p>Time: <?php echo $booking['formatted_time_start'] . " - " . $booking['formatted_time_end']; ?></p>

          <form action="../../controllers/BookingController.php" method="post">
          <input type="hidden" name="booking_id" value="<?php echo $booking['booking_id']; ?>">
          <button name="cancel_booking" id="cancel_booking">Cancel Booking</button>
          </form>

      </div>

      <?php endforeach; ?>
      <?php else: ?>
        <!-- Display message if no bookings -->
        <p>No bookings to display</p>
      <?php endif; ?>
      
    </section>
  </main>
  <?php include '../../../includes/footer.php'; ?>
</body>
  </html>