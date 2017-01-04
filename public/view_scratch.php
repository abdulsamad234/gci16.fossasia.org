<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $all_keys = [];
        $keys = CS50::query("SELECT * FROM pins");
        if(!$keys){
            apologize("There are no pins");
        }
        else{
            foreach($keys as $key){
                $all_keys[] = [
                    "key" => $key["pin"],
                    "serial_number" => $key["serial"]
                ];
            }
            render1("print_template.php", ["keys" => $all_keys]);
        }
    }
?>
