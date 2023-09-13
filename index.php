
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Page</title>
    <style>
        body{
            font-family:Arial,sans-serif;
            background-color:#f0f0f0;
            margin:0;
            padding:20px;
        }
        .container{
            max-width:600px;
            margin:0 auto;
            background-color:#fff;
            padding:20px;
            border-radius:5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        echo "<h1>Hello,World!</h1>";
        $var1 = "Hello, PHP!";
        $x = 12;
        echo "<p>Value of \$var1: $var1</p>";
        echo "<p>Value of \$x: $x</p>";
        ?>
    </div>
</body>
</html>
