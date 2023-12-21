<?php

require_once('DbConnection.php');

if (session_status() === PHP_SESSION_NONE) {
    // Check if a session is not already started
    session_start();
}

class Dashboard {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getBookings() {

        $userId = $_SESSION["user_id"];


        $conn = $this->db->getConnection();

        $bookingsQuery = "SELECT
        b.booking_id,
        u.user_id,
        u.name,
        cl.class_name,
        DATE_FORMAT(cl.date, '%d-%m-%Y') AS formatted_date,
        TIME_FORMAT(cl.time_start, '%H:%i') AS formatted_time_start,
        TIME_FORMAT(cl.time_end, '%H:%i') AS formatted_time_end
        FROM tbl_bookings b
        JOIN tbl_users u ON b.user_id = u.user_id
        JOIN tbl_classes cl ON b.class_id = cl.class_id
        WHERE b.user_id = $userId;";

        $stmt = $conn->prepare( $bookingsQuery );

        $stmt->execute();
        $result = $stmt->get_result();
        $bookings = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();

        return $bookings;
    }
}