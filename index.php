<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CDN Css-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto|Shadows+Into+Light+Two" rel="stylesheet" />
    <!-- Local Css-->
    <link rel="stylesheet" href="./css/main.css" />
    <title>Todo Php</title>
</head>
<body>
<div class="list">
    <h1 class="header">
        To Do.
    </h1>

    <a href="#" >Form Me on Github!</a>

    <ul class="items">
        <li>
            <span class="item done">Learn Php</span>
            <a href="#" class="done-button">Mark as Done!</a>
        </li>
        <li>
            <span class="item">Learn Python</span>
        </li>
    </ul>

    <form action="add.php" class="item-add" method="POST">
        <input class="input" type="text" name="name" placeholder="Type a new List" autocomplete="off" required />
        <input type="submit" class="submit" value="submit">
    </form>
</div>
</body>
</html>