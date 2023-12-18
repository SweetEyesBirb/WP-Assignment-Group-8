<?php
// controllers/UserController.php
require_once '../../models/UserModel.php';

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function registerUser($postData)
    {
        // Validate user data
        $validationResult = $this->userModel->validateUserData($postData);

        $errors = $validationResult['errors'];

        if (empty($errors)) {
            // If validation is successful, insert user data into the database
            $userData = $validationResult['data'];
            $this->userModel->insertUserData($userData);

            // Redirect to success page or login page
            header('Location: login.php?registered=true');
            exit();

        } else {
            // If there are validation errors, redirect back to the form with an error message
            $errorQueryString = http_build_query(['errors' => $errors]);
            header("Location: registration.php?$errorQueryString");
            exit();
        }

    }

    public function loginUser($postData) {
        // Validate user login data
        $validationResult = $this->userModel->validateLoginData($postData);

        $errors = $validationResult['errors'];

        if (empty($errors)) {
            // If validation is successful, check login and redirect
            $loginData = $validationResult['data'];
            $this->checkLogin($loginData);
        } else {
            // If there are validation errors, redirect back to the login form with specific error messages
            $errorQueryString = http_build_query(['errors' => $errors]);
            header("Location: login.php?$errorQueryString");
            exit();
        }
    }

    private function checkLogin($loginData) {
        $email = $loginData['email'];
        $password = $loginData['password'];

        // Validate login against the database
        $user = $this->userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            // Login successful

            // Start user session
            session_start();
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            // Redirect based on user role
            if ($_SESSION['role'] == 'admin') {
                header('Location: ../admin/admin.php');
            } else {
                header('Location: ../../../index.php');
            }
            exit();
        } else {
            // Invalid credentials
            header('Location: login.php?errors=Invalid%20credentials');
            exit();
        }
    }

}
