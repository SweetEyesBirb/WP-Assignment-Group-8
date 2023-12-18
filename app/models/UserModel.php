<?php

// models/UserModel.php
require_once('DbConnection.php');


class UserModel
{
    private $db;

    public function __construct()
    {
        // Instantiate the Database class for database connection
        /* $this->db = new Database(); */
        $this->db = Database::getInstance();

    }

    public function validateLoginData($data) {
        $errors = [];

        $loginEmail = $this->validateLoginEmail($data['user-email']);
        if (!$loginEmail) {
            $errors['user-email'] = 'Invalid email format.';
        }

        $loginPassword = $this->validateLoginPassword($data['psw']);
        if (!$loginPassword) {
            $errors['psw'] = 'Invalid password.';
        }

        return [
            'errors' => $errors,
            'data' => [
                'email' => $loginEmail,
                'password' => $loginPassword,
            ],
        ];
    }

    public function getUserByEmail($email) {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = ?");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            $stmt->close();

            return $user;
        } else {
            // Handle the database error accordingly
            return null;
        }
    }

    private function validateLoginPassword($password) {
        return $password ?? false;
    }

    private function validateLoginEmail($email) {
        return $email ?? false;
    }

/*
    private function validateLoginPassword($password) {
        return filter_var($password, FILTER_VALIDATE_EMAIL);
    } */


    public function validateUserData($data)
    {
        $errors = [];
        $validatedData = [];

        // Validate name and surname (no special characters allowed)
        $name = $this->validateName($data['name']);
        $surname = $this->validateName($data['surname']);

        if (!$name) {
            $errors['name'] = 'Invalid name. Only letters and spaces are allowed.';
        }

        if (!$surname) {
            $errors['surname'] = 'Invalid surname. Only letters and spaces are allowed.';
        }

        // Validate date of birth
        $dob = $this->validateDateOfBirth($data['dob']);

        if (!$dob) {
            $errors['dob'] = 'Invalid date of birth';
        }

        /*        // Validate email
               $email = $this->validateEmail($data['email']);

               if (!$email) {
                   $errors['email'] = 'Invalid email address';
               } */

        // Validate email and emailAgain
        $emails = $this->validateEmail($data['email'], $data['email-again']);
        if (isset($emails['error'])) {
            $errors[$emails['field']] = $emails['error'];
        } else {
            $validatedData['email'] = $emails['email'];
        }

        // Validate password
        $password = $this->validatePassword($data['password'], $data['password-again']);

        if (!$password) {
            $errors['password'] = 'Invalid password';
        }

        // Check if email already exists in the database
        $email = $validatedData['email'] ?? null;  // Ensure $email is defined
        if ($email && $this->emailExists($email)) {
            $errors['email'] = 'Email already exists';
        }

        return [
            'errors' => $errors,
            'data' => [
                'name' => $name,
                'surname' => $surname,
                'dob' => $dob,
                /* 'email' => $email, */
                'email' => $validatedData['email'],
                'password' => $password,
            ],
        ];
    }

    private function validateName($name)
    {
        // Allow only letters and spaces
        return preg_match('/^[a-zA-Z ]+$/', $name) ? $name : false;
    }

    private function validateDateOfBirth($dob)
    {
        // Validate date format (YYYY-MM-DD)
        $dateObj = DateTime::createFromFormat('Y-m-d', $dob);
        return ($dateObj && $dateObj->format('Y-m-d') === $dob) ? $dob : false;
    }

    private function validateEmail($email, $emailAgain)
    {
        $validatedEmails = [];

        // Validate email
        $filteredEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ($filteredEmail === false) {
            return ['error' => 'Invalid email format.', 'field' => 'email'];
        }
        $validatedEmails['email'] = $filteredEmail;

        // Validate emailAgain
        $filteredEmailAgain = filter_var($emailAgain, FILTER_VALIDATE_EMAIL);
        if ($filteredEmailAgain === false) {
            return ['error' => 'Invalid email format.', 'field' => 'emailAgain'];
        }
        $validatedEmails['emailAgain'] = $filteredEmailAgain;

        // Check if emails match
        if ($validatedEmails['email'] !== $validatedEmails['emailAgain']) {
            return ['error' => 'Emails do not match.', 'field' => 'emailAgain'];
        }

        return $validatedEmails;
    }


    private function validatePassword($password, $passwordAgain)
    {
        if (strlen($password) < 8) {
            return false;
        }

        // Check if password matches the confirmation
        if ($password !== $passwordAgain) {
            return false;
        }

        // Password must be at least 8 characters
        return password_hash($password, PASSWORD_BCRYPT);
    }

/*     private function emailExists($email)
    {
        // Check if the email already exists in the database
        $stmt = $this->db->getConnection()->prepare("SELECT COUNT(*) FROM tbl_users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        return isset($count) && $count > 0;
    } */

    private function emailExists($email)
{
    // Check if the email already exists in the database
    $stmt = $this->db->getConnection()->prepare("SELECT COUNT(*) FROM tbl_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();  // Get the result set
    $count = $result->fetch_assoc()['COUNT(*)'];  // Fetch the count value

    $stmt->close();

    return isset($count) && $count > 0;
}


    public function insertUserData($data)
    {
        $stmt = $this->db->getConnection()->prepare("INSERT INTO tbl_users (name, surname, dob, email, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $data['name'], $data['surname'], $data['dob'], $data['email'], $data['password']);
        $stmt->execute();
        $stmt->close();
    }
}

?>