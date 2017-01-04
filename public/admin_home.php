<?php

    // configuration
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            require("../includes/config.php"); 
            render("admin_home_view.php", ["title" => "Admin Home"]);
        }
        
?>

