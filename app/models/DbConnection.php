<?php
// Class for managing database connections
class Database {
    // Database connection details
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "@s5520688";
    private $conn;

    private static $instance;

    // Constructor to establish the database connection
    public function __construct() {
        // Create a new MySQLi connection
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        // Check if the connection was successful
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    // Method to get the database connection
    public function getConnection() {
        return $this->conn;
    }
}
?>
