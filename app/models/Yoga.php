<?php

require_once "DbConnection.php";
class Yoga
{
    private $db;

    // Constructor to initialize the database connection
    public function __construct()
    {
        $this->db = Database::getInstance();
    }


    // Method to retrieve Yoga classes data (from current date onwards)
    public function getUpcomingYogaSessions()
    {

        // Get the database connection
        $conn = $this->db->getConnection();

        // SQL query
        $upcomingYogaClassesQuery = "SELECT *, DATE_FORMAT(date, '%d-%m-%Y') AS formatted_date, TIME_FORMAT(time_start, '%H:%i') AS formatted_start_time, TIME_FORMAT(time_end, '%H:%i') AS formatted_end_time FROM tbl_classes WHERE date >= CURRENT_DATE AND class_name = 'Yoga';";

        // Prepare the query
        $stmt = $conn->prepare($upcomingYogaClassesQuery);

        // Execute the query
        $stmt->execute();

        // Fetch the result
        $result = $stmt->get_result();

        // Fetch all rows as an associative array
        $sessions = $result->fetch_all(MYSQLI_ASSOC);

        // Close the statement
        $stmt->close();

        return $sessions;
    }
}

?>