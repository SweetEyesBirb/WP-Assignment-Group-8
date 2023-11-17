<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Centre Admin</title>

    <link rel="stylesheet" href="../../../public/assets/styles/style.css">
    <link rel="stylesheet" href="../../../public/assets/styles/registration.css">
    <link rel="stylesheet" href="../../../public/assets/styles/admin.css">
  
</head>

<body>
  <?php include '../../../includes/header.php'; ?>

  <main>

    <h1>Add Classes</h1>

    
    <form action="" method="post">
<!--  POST values INTO tbl_classes (
      class_id INT PRIMARY KEY AUTO_INCREMENT,
      class_name VARCHAR(50),
      class_date DATE,
      start_time TIME,
      end_time TIME,
      price DECIMAL(10, 2)
      ); -->
      
      <!-- <h2>Add Yoga Class</h2> -->
      
      <div id="form-wrapper-main">

        <div class="form-group">
        <label for="class_name">Class Name:</label>
        <select id="class_name" name="class_name" required>
            <option value="Yoga">Yoga</option>
            <option value="Swimming">Swimming</option>
        </select>
        </div>

        <div class="form-group">
        <label for="class_date">Date:</label>
        <input type="date" id="class_date" name="class_date" required>
        </div>

        <div class="form-group">
        <label for="start_time">Start Time:</label>
        <input type="time" id="start_time" name="start_time" required>
        </div>

        <div class="form-group">
        <label for="end_time">End Time:</label>
        <input type="time" id="end_time" name="end_time" required>
        </div>

        <div class="form-group">
        <label for="price">Price:</label>
        <!-- <input type="number" id="price" name="price" step="0.01" required> -->
          <select id="price" name="price" required>
          <option value="8.50">8.50 £</option>
          <option value="10.50">10.50 £</option>
        </div>

        <button type="submit">Add Class</button>
        </div>
        
    </form>

  </main>

  <?php include '../../../includes/footer.php'; ?>

</body>
</html>