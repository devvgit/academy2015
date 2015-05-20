<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Built in server test</title>
</head>
<body>
    <div class="container">
        <h1>Today is: <?php echo (new DateTime())->format('Y-m-d'); ?></h1>
        <footer>Powered By <?php echo $_SERVER['SERVER_SOFTWARE']; ?></footer>
    </div>
</body>
</html>