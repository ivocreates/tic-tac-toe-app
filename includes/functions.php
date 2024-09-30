<?php
include 'dbconnect.php';

function registerUser($username, $password) {
    global $pdo;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    return $stmt->execute([$username, $hashedPassword]);
}

function loginUser($username, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        return true;
    }
    return false;
}

function recordScore($player1_name, $player2_name, $player1_score, $player2_score) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO scores (player1_name, player2_name, player1_score, player2_score) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$player1_name, $player2_name, $player1_score, $player2_score]);
}

function getScores() {
    global $pdo; // Ensure $pdo is available
    $stmt = $pdo->prepare("SELECT * FROM scores ORDER BY created_at DESC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
