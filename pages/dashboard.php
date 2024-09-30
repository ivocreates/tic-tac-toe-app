<?php
include '../includes/session.php';
include '../includes/functions.php'; // Ensure this line is present

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

// Initialize player names and scores
$player1_name = "";
$player2_name = "";
$player1_score = 0;
$player2_score = 0;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player1_name = $_POST['player1_name'];
    $player2_name = $_POST['player2_name'];

    // Initialize scores to zero
    $player1_score = 0;
    $player2_score = 0;
}

// Check for game results
if (isset($_GET['result'])) {
    if ($_GET['result'] === 'X') {
        $player1_score++;
    } elseif ($_GET['result'] === 'O') {
        $player2_score++;
    }
    
    // Record the scores
    recordScore($player1_name, $player2_name, $player1_score, $player2_score);
}

$scores = getScores(); // Call to getScores()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Tic Tac Toe Dashboard</h2>

        <form method="POST" class="mb-3">
            <div class="mb-3">
                <label for="player1_name" class="form-label">Player 1 Name</label>
                <input type="text" class="form-control" id="player1_name" name="player1_name" required>
            </div>
            <div class="mb-3">
                <label for="player2_name" class="form-label">Player 2 Name</label>
                <input type="text" class="form-control" id="player2_name" name="player2_name" required>
            </div>
            <button type="submit" class="btn btn-primary">Start Game</button>
        </form>

        <div id="game" class="text-center">
            <div class="status"></div>
            <div class="grid">
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
                <div class="cell"></div>
            </div>
        </div>
        <button class="btn btn-danger mt-3" onclick="location.reload();">Restart</button>
        <a href="dashboard.php?logout=true" class="btn btn-secondary mt-3">Logout</a> <!-- Logout Button -->

        <h3 class="mt-5">Scores</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Player 1</th>
                    <th>Player 2</th>
                    <th>Player 1 Score</th>
                    <th>Player 2 Score</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($scores as $score): ?>
                <tr>
                    <td><?php echo htmlspecialchars($score['player1_name']); ?></td>
                    <td><?php echo htmlspecialchars($score['player2_name']); ?></td>
                    <td><?php echo htmlspecialchars($score['player1_score']); ?></td>
                    <td><?php echo htmlspecialchars($score['player2_score']); ?></td>
                    <td><?php echo htmlspecialchars($score['created_at']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/game.js"></script>
</body>
</html>
