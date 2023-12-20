<?php


// controllers/RoutingControllers.php

require_once('BaseRouterController.php');

class RoutingControllers extends BaseRouterController {
    public function index() {
        // Logic for the home page
        include('./index.php');
    }

    public function renderLoginPage() {
        include('views/auth.login.php');
    }
}
