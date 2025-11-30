<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Form Example</title>
</head>
<body>
    <h1>Greeting Form</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
        Enter your name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $name = $_POST['name'];
            
            if (!empty($name))
            {
                echo "<p>Hello, $name! Welcome to our website.</p>";
            }
            else
            {
                echo "<p>Please enter your name.</p>";
            }
        }
    ?>

</body>
</html>