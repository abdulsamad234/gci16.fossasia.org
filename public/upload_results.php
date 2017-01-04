<?php
    require("../includes/config.php");
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            render("upload_results_view.php", ["title" => "Add Results"]);
        }
        else if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["submit"])){
                if(isset($_FILES["file"])){
                    if($_FILES["file"]["error"] > 0){
                        apologize("There was an error upploading the file: ".$_FILES["file"]["error"]);
                    }
                    else{
                        $positions = [];
                        $storage_name = "results.csv";
                        move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$storage_name);
                        $file = fopen("uploads/".$storage_name, "r");
                            while(($line = fgetcsv($file)) !== false){
                                $positions[] = [
                                    "admission_number" => $line[0],
                                    "class" => $line[1],
                                    "arm" => $line[2],
                                    "term" => $line[3],
                                    "year" => $line[4],
                                    "mathematics" => $line[5],
                                    "english" => $line[6],
                                    "agriculture" => $line[7],
                                    "biology" => $line[8],
                                    "chemistry" => $line[9],
                                    "physics" => $line[10],
                                    "geography" => $line[11],
                                    "further_math" => $line[12]
                                ];
                            }
                            foreach ($positions as $position){
                                    $q = CS50::query("INSERT INTO results (admission_number, year, term,class, arm, mathematics, english, agriculture, biology, chemistry,
                                    physics, geography, further_math) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)", $position["admission_number"], $position["year"], $position["term"], $position["class"],
                                    $position["arm"], $position["mathematics"], $position["english"], $position["agriculture"], $position["biology"], $position["chemistry"], $position["physics"], $position["geography"], $position["further_math"]);
                                    if($q == false){
                                       apologize("Result(s) already exists in our database!");
                                    }
                            }
                            
                            render("upload_results_view.php", ["title" => "Add Results", "message" => "Upload Successful!"]);    
                            
                            
                        fclose($file);
                        unlink("uploads/".$storage_name);
                    }
                }
                else{
                    apologize("No file selected!");
                }
            }            
        }
?>

