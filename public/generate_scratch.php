<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("generate_scratch_view.php", ["title" => "Generate Scratch Cards"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $all_keys = [];
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length = strlen($characters);
        for ($c = 0; $c < $_POST["amount"]; $c++){
            $key = rand(1000000, 1000000000);
            $serial_number = '';
            for ($i = 0; $i < 10; $i++) {
                $serial_number = $serial_number.$characters[rand(0, $length - 1)];
            }
        
            $check = CS50::query("SELECT * FROM results WHERE pin = ? AND serial = ?", $key, $serial_number);
            $check_1 = CS50::query("SELECT * FROM pins WHERE pin = ? AND serial = ?", $key, $serial_number);
            while ($check == true || $check_1 == true){
                $key = rand(1000000, 1000000000);
                for ($i = 0; $i < 10; $i++) {
                    $serial_number .= $characters[rand(0, strlen($characters))];
                }
                $check = CS50::query("SELECT * FROMresultts WHERE pin = ? AND serial = ?", $key, $serial_number);
                $check_1 = CS50::query("SELECT * FROM pins WHERE pin = ? AND serial = ?", $key, $serial_number);
            }
            CS50::query("INSERT INTO pins (pin, serial) VALUES (?, ?)", $key, $serial_number);
            $all_keys[] = [
                "key" => $key,  
                "serial_number" => $serial_number
            ];
        }
        render1("print_template.php", ["keys" => $all_keys]);
    }

?>
