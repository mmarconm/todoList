<?php

require_once 'app/init.php';

$itemsQuery = $db->prepare("
    SELECT id, name, done
    FROM items
    WHERE user = :user
");

$itemsQuery->execute([
    'user' => $_SESSION['user_id']
]);


$items = $itemsQuery->rowCount() ? $itemsQuery : [];

// foreach($items as $item) {
//     echo $item['name'], '<br />';
// }

?>

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

    <?php if(!empty($items)): ?>
    
    <ul class="items">

        <?php foreach($items as $item): ?>
            <li>
                <span class="item <?php echo $item['done'] ? ' done' : '' ?>"><?    php echo $item['name']; ?></span>

                <?php if(!$item['done']): ?>
                    <a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button">Mark as Done!</a>

                <?php elseif($item['done']): ?>
                    <a href="mark.php?as=notdone&item=<?php echo $item['id']; ?>" class="done-button">Undone!</a>
                
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php else: ?>
        <p>You haven added items yet !</p>
    <?php endif; ?>

    <form action="add.php" class="item-add" method="POST">
        <input class="input" type="text" name="name" placeholder="Type a new List" autocomplete="off" required />
        <input type="submit" class="submit" value="submit">
    </form>
</div>
</body>
</html>