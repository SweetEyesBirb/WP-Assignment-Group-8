<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Centre Swimming Sessions</title>
<meta name= "description" content="Book your swimming here, have fun and get healthy">
<meta name="keywords" content="swimming, pool, book, swimming pool, swimming pool booking"
<meta name="author" content="Sports Centre">
<link rel="stylesheet" href="../../../public/assets/styles/style.css">
<link rel="stylesheet" href="../../../public/assets/styles/swimming.css">
</head>
<body>

  <?php include '../../../includes/header.php';
  include '../../../includes/navbar.php';
  ?>

  <main>

    <div id="swimming-main-image">
      </div>

    <section id="swimming-classes">
      <h1>Swimming Classes</h1>

        <p>For each container, get tuple from database and display tuple info. When clicking on Book Now, the booking information should be sent to the "bookings table" in the database</p>

      <div class="class">        
          <h3>Date: </h3>
          <p>Time: 11:00 - 12:00</p>
          <p>Price: 8,5 £</p>
          <button id="book-now-btn">Book Now</button>
      </div>

      <div class="class">        
          <h3>Date: </h3>
          <p>Time: 14:00 - 15:00</p>
          <p>Price: 8,5 £</p>
          <button id="book-now-btn">Book Now</button>
      </div>

      <div class="class">        
          <h3>Date: </h3>
          <p>Time: 16:00 - 18:00</p>
          <p>Price: 8,5 £</p>
          <button id="book-now-btn">Book Now</button>
      </div>

    </section>
    
  </main>

  <?php include '../../../includes/footer.php'; ?>
</body>

</html>
