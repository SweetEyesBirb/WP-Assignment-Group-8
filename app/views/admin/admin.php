<?php

// admin.php

require_once('../../controllers/ClassController.php');
require_once ('../../models/WhatsOn.php');
require_once ('../../controllers/AdminController.php');

$classController = new ClassController();
$adminController = new AdminController();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addClass':
            $classController->addClass();
            break;
        // Add more cases for other actions if needed
        case 'deleteSession':
          $adminController->deleteSession();
          break;
    }
}

// instantiate a new WhatOn object
$allClassesModel = new WhatsOn();

// run the getAllSessions() method
$allSessions = $allClassesModel->getAllSessions();


?>


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
  <?php include '../../../includes/navbar.php'; ?>

  <main>

    <h1>Add Classes</h1>

    
    <form action="admin.php?action=addClass" method="post">
      
      <div id="form-wrapper-main">

        <div class="form-group">
        <label for="class_name">Class Name:</label>
        <select id="class_name" name="class_name" required>
            <option value="Yoga">Yoga</option>
            <option value="Swimming">Swimming</option>
            <option value="Gym">Gym</option>
        </select>
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
          <select id="price" name="price" required>
          <option value="6.50">6.50 £</option>
          <option value="8.50">8.50 £</option>
          <option value="10.50">10.50 £</option>
          </select>
        </div>

        <button type="submit">Add Class</button>
        </div>
        
    </form>

    <table>
      <thead>
        <tr>
          <th>Class Name</th>
          <th>Date</th>
          <th>Start Time</th>
          <th>End Time</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php if ($allSessions): ?>
        <!-- Display upcoming sessions if found -->
        <?php foreach ($allSessions as $session): ?>
        <tr>
          <td><?php echo $session['class_name']; ?></td>
          <td><?php echo $session['formatted_date']; ?></td>
          <td><?php echo $session['formatted_start_time']; ?></td>
          <td><?php echo $session['formatted_end_time']; ?></td>
          <td><?php echo $session['price']; ?> £</td>
          <!-- <td><button>Delete</button></td> -->
          <td>
          <form action="admin.php?action=deleteSession" method="post">
        <input type="hidden" name="session_id" value="<?php echo $session['class_id']; ?>">
        <button type="submit" name="delete">Delete</button>
      </form>
          </td>
        </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <!-- Display message if no sessions -->
        <p>No sessions to display</p>
      <?php endif; ?>
      </tbody>
    </table>

  </main>

  <?php include '../../../includes/footer.php'; ?>

</body>
</html>