<!DOCTYPE html>
<html>
<table>
    <head>
        <title>Print Pins</title>
        <link href = "../css/print_template.css" rel = "stylesheet" type = "text/css">
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        
    </head>
    <body>
        <div id = "wrapper">
            <?php foreach($keys as $key):?>
            <div class = "card" width = "500px" height = "300px" style = "margin: 5px;border:1px solid #000; display: inline-block; border-radius: 5%">
                <p class = "text-primary"><strong>PIN -</strong><?=$key["key"]?></p>
                <p class = "text-primary"><strong>SERIAL NUMBER -</strong><?=$key["serial_number"]?></p>
            </div>
            <?php endforeach;?>
        </div>
    </body>
</html>