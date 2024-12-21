<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Random Quote Generator</title>
</head>

<body>
    <div class="container">
        <h1>Random Quote Generator</h1>
        <div class="quote-box">
            <?php
            // Array of quotes
            $quotes = [
                "The only limit to our realization of tomorrow is our doubts of today. - Franklin D. Roosevelt",
                "In the middle of difficulty lies opportunity. - Albert Einstein",
                "Do what you can, with what you have, where you are. - Theodore Roosevelt",
                "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
                "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill"
            ];

            // Generate a random quote
            $randomIndex = array_rand($quotes);
            echo "<p>" . $quotes[$randomIndex] . "</p>";
            ?>
        </div>
        <button onclick="location.reload()">Generate New Quote</button>
    </div>
</body>

</html>