document.addEventListener('DOMContentLoaded', () => {
    const cells = document.querySelectorAll('.cell');
    const statusDisplay = document.querySelector('.status');
    let gameActive = true;
    let currentPlayer = "X";
    let gameState = ["", "", "", "", "", "", "", "", ""];

    function handleCellClick(clickedCell, clickedCellIndex) {
        if (gameState[clickedCellIndex] !== "" || !gameActive) {
            return;
        }
        gameState[clickedCellIndex] = currentPlayer;
        clickedCell.textContent = currentPlayer;
        checkResult();
    }

    function checkResult() {
        const winningConditions = [
            [0, 1, 2], [3, 4, 5], [6, 7, 8],
            [0, 3, 6], [1, 4, 7], [2, 5, 8],
            [0, 4, 8], [2, 4, 6]
        ];

        let roundWon = false;
        for (let i = 0; i < winningConditions.length; i++) {
            const [a, b, c] = winningConditions[i];
            if (gameState[a] === "" || gameState[b] === "" || gameState[c] === "") {
                continue;
            }
            if (gameState[a] === gameState[b] && gameState[a] === gameState[c]) {
                roundWon = true;
                break;
            }
        }

        if (roundWon) {
            statusDisplay.textContent = `Player ${currentPlayer} has won!`;
            gameActive = false;
            const result = currentPlayer;
            setTimeout(() => {
                window.location.href = `dashboard.php?result=${result}`;
            }, 1000); // Redirect after 1 second
            return;
        }

        if (!gameState.includes("")) {
            statusDisplay.textContent = "It's a draw!";
            gameActive = false;
        }

        currentPlayer = currentPlayer === "X" ? "O" : "X";
    }

    cells.forEach((cell, index) => {
        cell.addEventListener('click', () => handleCellClick(cell, index));
    });
});
