<?php
require_once "DbConnection.php";

class WhatsOn {
    private $dbWhatIsOn;
    public function __construct() {

        $this->dbWhatIsOn = Database::getInstance();
    }
    public function getWhatIsOn() {
        $conn = $this->dbWhatIsOn->getConnection();

        $upcomingClassesQuery = "SELECT *, DATE_FORMAT(date, '%d-%m-%Y') AS formatted_date, TIME_FORMAT(time_start, '%H:%i') AS formatted_start_time, TIME_FORMAT(time_end, '%H:%i') AS formatted_end_time FROM tbl_classes WHERE date = CURRENT_DATE;";

        $stmt = $conn->prepare($upcomingClassesQuery);

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


    public function getAllSessions() {

        // use getConnection() method from the DbConnection class
        $conn = $this->dbWhatIsOn->getConnection();

        $allClassesQuery = "SELECT *, DATE_FORMAT(date, '%d-%m-%Y') AS formatted_date, TIME_FORMAT(time_start, '%H:%i') AS formatted_start_time, TIME_FORMAT(time_end, '%H:%i') AS formatted_end_time FROM tbl_classes";

        $stmt = $conn->prepare($allClassesQuery);
        $stmt->execute();
        $result = $stmt->get_result();
        $sessions = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $sessions;

    }

}

?>