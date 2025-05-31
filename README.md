# Tic Tac Toe Web Application

## Overview

This is a modern web-based Tic Tac Toe game built using **HTML**, **CSS**, **JavaScript**, **PHP**, and **MySQL**. It allows users to register, log in, play Tic Tac Toe, track scores, and switch between light and dark themes. Admins can access special features like managing users and viewing overall scores.

## Features

- **User Authentication**: Players can sign up and log in using their credentials.
- **Admin Access**: Admins can log in and manage users and scores.
- **Player Names & Score Tracking**: Players can enter their names before starting a game, and their scores are tracked.
- **Dark/Light Theme Toggle**: Switch between dark and light themes for a personalized experience.
- **Responsive Design**: The app is mobile-friendly and fully responsive using Bootstrap.

## Project Structure

```
/tic-tac-toe-app
│
├── assets
│   ├── css
│   │   └── styles.css            # Custom CSS for the project
│   ├── js
│   │   └── game.js               # Game logic and interactivity
│   └── img
│       └── logo.png              # Project logo
│
├── includes
│   ├── dbconnect.php             # Database connection
│   ├── session.php               # Session handling
│   └── functions.php             # Helper functions (login, signup, scores)
│
├── pages
│   ├── login.php                 # User login page
│   ├── signup.php                # User signup page
│   ├── dashboard.php             # Main game dashboard
│   ├── admin.php                 # Admin dashboard (user management, scores)
│
├── config
│   ├── config.php                # Global config (DB credentials)
│   └── auth.php                  # User authentication
│
├── uploads
│   └──                          # Placeholder for future uploads (images, etc.)
│
├── index.php                     # Landing page for the game
├── README.md                     # Project documentation
├── schema.sql                    # Database schema for user and score tables
└── .gitignore                    # Git ignore file for sensitive data
```

## Setup

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/tic-tac-toe-app.git
   ```

2. **Database Configuration**:
   - Create a MySQL database and import the `schema.sql` file into your database.
   - Update the database connection settings in `includes/dbconnect.php` with your own database credentials.

   **Database Schema**:
   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(50) NOT NULL UNIQUE,
       password VARCHAR(255) NOT NULL,
       email VARCHAR(100) NOT NULL UNIQUE,
       role ENUM('user', 'admin') DEFAULT 'user',
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   CREATE TABLE scores (
       id INT AUTO_INCREMENT PRIMARY KEY,
       player1 VARCHAR(50),
       player2 VARCHAR(50),
       player1_score INT DEFAULT 0,
       player2_score INT DEFAULT 0,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

3. **Install XAMPP/WAMP/MAMP** (for local development):
   - Install [XAMPP](https://www.apachefriends.org/index.html) (or any other LAMP/WAMP stack).
   - Place the project folder in the `htdocs` directory (`C:/xampp/htdocs/tic-tac-toe-app`).
   - Start Apache and MySQL from XAMPP Control Panel.

4. **Run the Project**:
   Open your browser and navigate to:
   ```
   http://localhost/tic-tac-toe-app
   ```

5. **Admin Access**:
   - The first user registered can be manually given admin access by updating their `role` in the database:
     ```sql
     UPDATE users SET role = 'admin' WHERE id = 1;
     ```

## Usage

1. **Sign Up**: New users can register using their username, password, and email.
2. **Log In**: Existing users can log in to access the game.
3. **Game Play**: Players enter their names and start the game. Scores are recorded and displayed in the dashboard.
4. **Admin Features**: Admins can view all scores and manage users via the admin panel.

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
- **Backend**: PHP, MySQL
- **Database**: MySQL
- **Session Management**: PHP Sessions
- **Authentication**: PHP with hashed passwords using `password_hash()`

## Screenshots
![](https://github.com/user-attachments/assets/69ce8555-35d2-4834-80b6-e2f827072d0f)
![](https://github.com/user-attachments/assets/7b0fdf5c-1312-4c50-b244-76f8140173bf)


## Future Enhancements

- Add more game modes (e.g., AI vs. Player).
- Add leaderboard functionality for top players.
- Include game replays and analytics.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Feel free to adjust the content and add screenshots as needed for your project!

Author: https://ivocreates.site
