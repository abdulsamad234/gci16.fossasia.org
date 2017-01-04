<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        require("check_result_form.php");
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
        // query database
        $rows = CS50::query("SELECT * FROM results WHERE admission_number = ? AND year = ? AND term = ? AND class = ? AND arm = ?", $_POST["admission_number"], $_POST["year"], $_POST["term"], $_POST["class"], $_POST["arm"]);
        $pins = CS50::query("SELECT * FROM pins WHERE pin = ? AND serial = ?", $_POST["pin"], $_POST["serial"]);
        if($rows == true){
            $position = [];
            
            foreach($rows as $row){
                if(($pins == true || ($_POST["pin"] == $row["pin"] && $_POST["serial"] == $row["serial"])) && $_POST["pin"] != 0){
                    foreach($pins as $pin){
                        CS50::query("UPDATE results SET pin = ?, serial = ? WHERE id = ?", $pin["pin"], $pin["serial"], $row["id"]);
                        CS50::query("DELETE FROM pins WHERE id = ?", $pin["id"]);
                    }
                        
                        $title = "Result for ".$_POST["admission_number"];
                        $term = $row["term"]."nd Term";
                        $position[] = [
                            "mathematics" => $row["mathematics"],
                            "english" => $row["english"],
                            "physics" => $row["physics"],
                            "chemistry" => $row["chemistry"],
                            "biology" => $row["biology"],
                            "agriculture" => $row["agriculture"],
                            "further_math" => $row["further_math"],
                            "geography" => $row["geography"]
                            ];
                        
                        student_render("student_result_view.php", ["title" => $title, "positions" => $position,"admission_number" => $_POST["admission_number"],"year" => $row["year"],
                        "term" => $term, "class" => $row["class"].$row["arm"]]);
                    
                }
                else{
                    apologize("pin is incorrect");
                }
                
            }
            
        }
        else{
            apologize("correct all the information");
        }
        
    }
    /**/

?>