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
}
