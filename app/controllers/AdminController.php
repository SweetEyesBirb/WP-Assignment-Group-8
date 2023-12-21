<?php

// AdminController.php
require_once '../../models/ClassModel.php';

class AdminController
{

    private $classModel;

    public function __construct()
    {
        // Instantiate the ClassModel
        $this->classModel = new ClassModel();
    }
    // Other methods...

    public function deleteSession()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
            $sessionId = $_POST['session_id'];

            // Validate and sanitize $sessionId if necessary

            // Perform the deletion in the database
            $success = $this->classModel->deleteSession($sessionId);

            if ($success) {
                header("Location: admin.php");
            exit();
            } else {
                header("Location: admin.php");
            exit();
            }
        }
    }
}
