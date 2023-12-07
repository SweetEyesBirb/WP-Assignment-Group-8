<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Centre Gym Sessions</title>

  <meta name= "description" content="Book your gym classes here, have fun and get healthy,meet ">
  <meta name="keywords" content= "gym, gym classes, gym booking, gym bookings, gym">
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
        <p> Welcome, here you are able to look at available times for you you make use of our state of the art gym depending on the type of session youd like to have. </p>

        <div class="class open-session">        
            <h3>Date: </h3>
            <p>Time: 11:00 - 4:00</p>
            <p>Price:£4.50 </p>
            <button id="book-now-btn">Book Now</button>
        </div>

        <div class="class Private session">        
            <h3>Date: </h3>
            <p>Time: 14:00 - 16:00</p>
            <p>Price: £9.50 </p>
            <button id="book-now-btn">Book Now</button>
        </div> 
        
        <div class="class Guided session">        
                  <h3>Date: </h3>
                  <p>Time: 16:00 - 18:00</p>
                  <p>Price: £12.50 </p>
                  <button id="book-now-btn">Book Now</button>
              </div>

            </section>

          </main>  

          <?php include '../../../includes/footer.php'; ?>
        </body>
        </html>