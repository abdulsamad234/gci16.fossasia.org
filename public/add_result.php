<?php
    require("../includes/config.php");
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            render("add_result_view.php", ["title" => "Add Results"]);
        }
        else if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $insert = CS50::query("INSERT IGNORE INTO results (admission_number, year, term,class, arm, mathematics, english, agriculture, biology, chemistry,
            physics, geography, further_math) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)", $_POST["admission_number"], $_POST["year"], $_POST["term"], $_POST["class"], $_POST["arm"],
            $_POST["mathematics"], $_POST["english"], $_POST["agriculture"], $_POST["biology"], $_POST["chemistry"], $_POST["physics"], $_POST["geography"], $_POST["further_math"]);
            if($insert == true){
                render("add_result_view.php", ["title" => "Add Results", "message" => "Addition Successful"]);
            }
            else{
                apologize("That result already exists");
            }
            
            
        }
?>

