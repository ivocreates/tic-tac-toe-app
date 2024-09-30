<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/game.js"></script>
</head>
<body>
    <div class="container text-center" id="themeContainer">
        <img src="assets/img/logo.png" alt="Tic Tac Toe Logo" class="my-4">
        <h1 class="mb-4">Tic Tac Toe</h1>
        <a href="pages/login.php" class="btn btn-primary btn-lg mb-2">Login</a>
        <a href="pages/signup.php" class="btn btn-secondary btn-lg">Sign Up</a>
        <button id="themeToggle" class="btn btn-outline-dark mt-3">Toggle Dark/Light Theme</button>
    </div>
    <script>
        // Theme toggler
        const themeToggleButton = document.getElementById('themeToggle');
        themeToggleButton.addEventListener('click', () => {
            document.body.classList.toggle('dark-theme');
        });
    </script>
</body>
</html>
