<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-32">
    <meta name="viewport" content="width=device-width">
    <title>Portfolio_Guillaume_Levergeois</title>
    <link rel="stylesheet" href="../css/newsletter.scss">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>


<body style="font-family: Inter;">

<main>
    <?php require_once 'header.php' ?>
    <ul>
        <div class="item" style="text-decoration: none">
            <div class="item_content">
                <h2>Newsletter</h2>
            </div>
            <div class="rectangle_item">
            <p>Receive a monthly newsletter about the evolution of my site.<br> Receive a mail each time I post a new thing.</p>
            </div>
            <div class="rectangle_item_2">
            <label for="mail">Your mail:</label>
            <input type="text" name="mail" action="" placeholder="name@example.com"></input>
            <button type="button" name="button" action="POST">Send</button>
            <p>Promise you will never be bothered with too much mails !</p>
            </div>
        </div>
        <div class="item"> 
            <img class="image_item" src="../images/2.jpg">
        </div>
    </ul>
    </main>
</body>