<?php

    /**
     * config.php
     *
     * Computer Science 50
     * Problem Set 7
     *
     * Configures app.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("helpers.php");

    // CS50 Library
    require("../vendor/library50-php-5/CS50/CS50.php");
    CS50::init(__DIR__ . "/../config.json");

    // enable sessions
    session_start();

    // require authentication for all pages except /login.php, /logout.php, and /register.php
    if (!in_array($_SERVER["PHP_SELF"], ["/login.php", "/check_result.php","../views/student_result_view.php", "../views/home.html", "/logout.php", "/register.php","/index.php", "/student_login.php", "/admin_login.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("/index.php");
        }
    }

?>
