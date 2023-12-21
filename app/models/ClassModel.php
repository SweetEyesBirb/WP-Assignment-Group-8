<?php

// models/ClassModel.php

require_once('DbConnection.php');

class ClassModel
{
    private $db;

    public function __construct()
    {
        // Instantiate the Database class for database connection
        $this->db = Database::getInstance();
    }

    public function addClass($className, $classDate, $startTime, $endTime, $price)
    {
        $stmt = $this->db->getConnection()->prepare("INSERT INTO tbl_classes (class_name, date, time_start, time_end, price) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $className, $classDate, $startTime, $endTime, $price);
        $stmt->execute();
        $stmt->close();
    }


    public function deleteSession($sessionId)
    {
        $stmt = $this->db->getConnection()->prepare("DELETE FROM tbl_classes WHERE class_id = ?");
        $stmt->bind_param("i", $sessionId);
        $success = $stmt->execute();
        $stmt->close();

        return $success;
    }

    public function deleteBooking($bookingId) {
        $stmt = $this->db->getConnection()->prepare("DELETE FROM tbl_bookings WHERE booking_id = ?");
        $stmt->bind_param("i", $bookingId);
        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }

}
