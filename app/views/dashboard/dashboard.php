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
      <p>Welcome to your dashboard, user name!</p> <br>
      <p>You can view or cancel your bookings here</p>

      <div class="booked-class">
          <h3>Class Name</h3>
          <p>Date: 02-12-2023</p>
          <p>Time: 11:00 - 12:00</p>
          <button id="cancel-booking">Cancel Booking</button>
      </div>
      
    </section>
  </main>
  <?php include '../../../includes/footer.php'; ?>
</body>
  </html>