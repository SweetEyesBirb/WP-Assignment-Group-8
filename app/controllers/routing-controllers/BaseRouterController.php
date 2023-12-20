<?php

// controllers/BaseController.php

class BaseRouterController {
    public function route() {
        $url = isset($_GET['url']) ? $_GET['url'] : 'index';
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        // Construct the method name based on the HTTP method (e.g., get(), post(), etc.)
        $methodName = $method . ucfirst($url);

        // Check if the method exists in the derived class
        if (method_exists($this, $methodName)) {
            $this->$methodName();
        } else {
            $this->index();
        }
    }

    // Default method to handle requests
    public function index() {
        // Default implementation
    }
}
