<?php
require_once '../includes/session.php';
redirectIfNotLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe Game</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="../assets/js/game.js" defer></script>
</head>
<body>
<div class="container text-center">
    <h2 class="mt-5">Tic Tac Toe</h2>
    <div class="status mt-4"></div>
    <div class="grid">
        <div class="cell" data-cell-index="0"></div>
        <div class="cell" data-cell-index="1"></div>
        <div class="cell" data-cell-index="2"></div>
        <div class="cell" data-cell-index="3"></div>
        <div class="cell" data-cell-index="4"></div>
        <div class="cell" data-cell-index="5"></div>
        <div class="cell" data-cell-index="6"></div>
        <div class="cell" data-cell-index="7"></div>
        <div class="cell" data-cell-index="8"></div>
    </div>
    <button class="restart btn btn-success mt-3">Restart Game</button>
    <button id="themeToggle" class="btn btn-secondary mt-3">Toggle Dark/Light Theme</button>
</div>
<script src="../assets/js/theme.js"></script>
</body>
</html>
