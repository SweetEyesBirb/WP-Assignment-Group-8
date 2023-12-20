<?php

// controllers/ClassController.php

require_once('../../models/ClassModel.php');

class ClassController
{
    private $classModel;

    public function __construct()
    {
        $this->classModel = new ClassModel();
    }

    public function addClass()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $className = $_POST["class_name"];
            $classDate = $_POST["class_date"];
            $startTime = $_POST["start_time"];
            $endTime = $_POST["end_time"];
            $price = $_POST["price"];

            // Add the class using the model
            $this->classModel->addClass($className, $classDate, $startTime, $endTime, $price);

            // Optionally, you can redirect the user after adding the class
            header("Location: admin.php");
            exit();
        }
    }
}
