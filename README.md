# PHP User Authentication System

This is a simple user authentication system built using PHP and MySQL. It includes user signup, login, session handling, and a basic dashboard page after login.

## 🔧 How It Works

- Users can sign up with a username, email, and password.
- Passwords are hashed before storing in the database.
- After logging in, users are redirected to a dashboard page.
- All forms include basic validation and error handling.

## 💡 Tech Stack

- PHP (Plain, no framework)
- MySQL (phpMyAdmin for DB setup)
- HTML + CSS (with clean responsive design)

## 🗂️ Setup Instructions

1. Import the `user_auth.sql` file into your MySQL using phpMyAdmin to create the `users` table.
2. Update the `config/db.php` file with your local database credentials.
3. Run the project in XAMPP or any local PHP server.
4. Navigate to: `http://localhost/Sign_Up_Login/signup.php`

## ✅ Pages Included

- `signup.php` – User registration form
- `login.php` – User login form
- `dashboard.php` – Protected dashboard for logged-in users
- `logout.php` – (optional) Logs out and destroys the session

---

This project was created as a beginner-friendly PHP authentication task, with clear structure and external CSS for maintainability.
