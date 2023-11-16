<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Centre Admin</title>

    <link rel="stylesheet" href="../../../public/assets/styles/style.css">
    <link rel="stylesheet" href="../../../public/assets/styles/registration.css">
</head>

<body>
  <? include '../../../includes/header.php'; ?>

  <main>

    <h1>Add Classes</h1>

    <form action="your_server_script.php" method="post">
      <h2>Add Yoga Class</h2>
      
      <div id="form-wrapper-main">

        <div class="form-group">
        <label for="class_name">Class Name:</label>
        <select id="class_name" name="class_name" required>
            <option value="Yoga">Yoga</option>
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
        <input type="number" id="price" name="price" step="0.01" required>
        </div>

        <button type="submit">Add Class</button>
        </div>
        
    </form>

  </main>

  <?php include '../../../includes/footer.php'; ?>

</body>
</html>