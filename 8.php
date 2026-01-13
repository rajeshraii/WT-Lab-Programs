<?php
$counterFile = "counter.txt";

// If file does not exist, create with default value 0
if(!file_exists($counterFile)){
    file_put_contents($counterFile, "0");
}

// Read current count
$currentCount = file_get_contents($counterFile);

// Increase count
$newCount = $currentCount + 1;

// Update file
file_put_contents($counterFile, $newCount);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Visitor Counter</title>

<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #14fff9;
        color: #333;
    }

    .container {
        background: #fff;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        border-radius: 8px;
        width: 60%;
    }

    h1 {
        font-size: 2.5em;
        margin: 0;
    }

    p {
        font-size: 1.2em;
        color: #555;
    }
</style>
</head>

<body>
    <div class="container">
        <h1>Welcome to our Website!</h1>
        <p>You are visitor number: <strong><?php echo $newCount; ?></strong></p>
    </div>
</body>
</html>