<!DOCTYPE html>

<html lang="en">

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>AR CBT</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

       

    </head>

    <body>
            <script src = "js/scripts.js"></script>
                <!-- Page content -->
                <div id="page-content-wrapper">
                    <a href = "student_home.php">HomePage</a>
                    <!-- Keep all page content within the page-content inset div! -->
                    <div class="page-content inset">
            
                    
            
