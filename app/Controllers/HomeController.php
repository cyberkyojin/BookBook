<?php

class HomeController {
    public function index() {
        require_once "../app/Views/home.php";
    }
    
    public function register() {
        require_once "../app/Views/register.php";
    }
}