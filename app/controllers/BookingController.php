<?php

// BookingController.php

// Include necessary files and initialize sessions or database connections if required
// ...
require_once('../models/DbConnection.php');
require_once('../models/ClassModel.php');

$classModel = new ClassModel();

$databaseConnection = Database::getInstance();

if (session_status() === PHP_SESSION_NONE) {
    // Check if a session is not already started
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the class ID is provided in the POST request
    if (isset($_POST["class_id"])) {
        // Get the user ID from the session
        $userId = $_SESSION["user_id"];

        // Get the class ID from the POST request
        $classId = $_POST["class_id"];

        // Insert the booking information into the "tbl_bookings" table
        // Note: You need to adjust this based on your actual database structure
        $stmt = $databaseConnection->getConnection()->prepare("INSERT INTO tbl_bookings (user_id, class_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $userId, $classId);

        if ($stmt->execute()) {
            // Booking successful
            echo "Booking successful!";
        } else {
            // Booking failed
            echo "Booking failed!";
        }

        $stmt->close();

    } else if (isset($_POST["cancel_booking"])) {
        // Handle cancel booking logic
        // Get the booking ID from $_POST["booking_id"] and call deleteBooking method
        if (isset($_POST["booking_id"])) {
            $bookingId = $_POST["booking_id"];
            $success = $classModel->deleteBooking($bookingId);

            // Check the success and perform further actions if needed
            if ($success) {
                // Booking deleted successfully
                // You may want to redirect the user or show a success message
                header("Location: ../views/dashboard/dashboard.php");
                exit();
            } else {
                // Error in deleting booking
                // You may want to redirect the user or show an error message
            }
        } else {
            // Booking ID is missing
            echo "Booking ID is missing!";
        }
    } else {
        // Invalid request, neither class_id nor cancel_booking is set
        echo "Invalid request!";
    }
} else {
    // Handle invalid request method (not POST)
    echo "Invalid request method!";
}
