const themeToggle = document.getElementById('themeToggle');

themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    document.querySelectorAll('.cell').forEach(cell => {
        cell.classList.toggle('dark-mode');
    });
    
    if (document.body.classList.contains('dark-mode')) {
        themeToggle.innerText = 'Switch to Light Theme';
    } else {
        themeToggle.innerText = 'Switch to Dark Theme';
    }
});
