<?php
    require("../includes/config.php");
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $positions = [];
            $results = CS50::query("SELECT * FROM results");
            foreach($results as $result){
                $positions[] = [
                    "id" => $result["id"],
                    "admission_number" => $result["admission_number"],
                    "class" => $result["class"], 
                    "arm" => $result["arm"],
                    "term" => $result["term"],
                    "year" => $result["year"],
                    "mathematics" => $result["mathematics"],
                    "english" => $result["english"],
                    "agriculture" => $result["agriculture"],
                    "biology" => $result["biology"],
                    "chemistry" => $result["chemistry"],
                    "physics" => $result["physics"],
                    "geography" => $result["geography"],
                    "further_math" => $result["further_math"]
                ];
            }
            render("edit_results_view.php", ["title" => "Edit Results", "positions" => $positions]);
        }
        else if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["submit"])){
                $results = CS50::query("SELECT id FROM results");
                foreach($results as $result){
                    $admission_number = "admission_number".$result["id"];
                    $class = "class".$result["id"];
                    $arm = "arm".$result["id"];
                    $term = "term".$result["id"];
                    $year = "year".$result["id"];
                    $mathematics = "mathematics".$result["id"];
                    $english = "english".$result["id"];
                    $agriculture = "agriculture".$result["id"];
                    $biology = "biology".$result["id"];
                    $chemistry = "chemistry".$result["id"];
                    $physics = "physics".$result["id"];
                    $geography = "geography".$result["id"];
                    $further_math = "further_math".$result["id"];
                    CS50::query("UPDATE results SET admission_number = ?, class = ?, arm = ?, term = ?, year = ?, mathematics = ?, english = ?,
                    agriculture = ?, biology = ?, chemistry = ?, physics = ?, geography = ?, further_math = ? WHERE id = ?", $_POST[$admission_number], $_POST[$class],
                    $_POST[$arm], $_POST[$term], $_POST[$year], $_POST[$mathematics], $_POST[$english], $_POST[$agriculture], $_POST[$biology], $_POST[$chemistry], $_POST[$physics],
                    $_POST[$geography], $_POST[$further_math], $result["id"]);
                }
                $positions = [];
                $results = CS50::query("SELECT * FROM results");
                foreach($results as $result){
                    $positions[] = [
                        "id" => $result["id"],
                        "admission_number" => $result["admission_number"],
                        "class" => $result["class"], 
                        "arm" => $result["arm"],
                        "term" => $result["term"],
                        "year" => $result["year"],
                        "mathematics" => $result["mathematics"],
                        "english" => $result["english"],
                        "agriculture" => $result["agriculture"],
                        "biology" => $result["biology"],
                        "chemistry" => $result["chemistry"],
                        "physics" => $result["physics"],
                        "geography" => $result["geography"],
                        "further_math" => $result["further_math"]
                    ];
                }
                render("edit_results_view.php", ["title" => "Edit Results", "positions" => $positions, "message" => "Saved Successfully!"]);
            }
        }
?>

