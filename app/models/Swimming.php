<?php

require_once "DbConnection.php";

class Swimming
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getUpcomingSwimmingSessions()
    {
        $conn = $this->db->getConnection();

        $upcomingSwimmingClassesQuery = "SELECT *, DATE_FORMAT(date, '%d-%m-%Y') AS formatted_date, TIME_FORMAT(time_start, '%H:%i') AS formatted_start_time, TIME_FORMAT(time_end, '%H:%i') AS formatted_end_time FROM tbl_classes WHERE date >= CURRENT_DATE AND class_name = 'Swimming';";

        // Prepare the query
        $stmt = $conn->prepare($upcomingSwimmingClassesQuery);

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