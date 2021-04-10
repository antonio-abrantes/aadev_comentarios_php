<?php
    require './Db/Conexao.php';
    header('Content-Type: application/json');

    $pdo = Conexao::getConn();

    $stmt = $pdo->prepare('SELECT * FROM comments');
    $stmt->execute();

    $result = array();

    if ($stmt->rowCount() >= 1) {
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    } else {
        array_push($result, [ 'qtd' => 0, 'result' => 'Nenhum comentário encontrado']);
        echo json_encode($result);
    }