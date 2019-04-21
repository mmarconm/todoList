<?php

require_once 'app/init.php';

// Verifica se o id do objecto existe
if(isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
   
    // Executa a query para deletar o item
    $deleteQuery = $db->prepare("

        DELETE FROM items
        WHERE id = :item_id
        AND user = :user

    ");

    $deleteQuery->execute([
        'item_id' => $item_id,
        'user' => $_SESSION['user_id']
    ]);

}

header('Location: index.php');
