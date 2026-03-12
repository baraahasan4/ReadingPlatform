# 📚 Reading Platform

A backend system for a multi-role digital reading platform built with **Laravel** and **MySQL**. The platform supports book reading, audiobooks, child educational content, and admin management with role-based access control.

---

## ✨ Features

### Role-Based Access Control
- **Admin** — Full platform control including content and user management
- **Adult User** — Read books, listen to audiobooks, set reading goals, and interact with content
- **Child User** — Browse educational and entertaining books, songs, and videos

### Adult User Features
- Browse and search books by category
- Read books (PDF) and listen to audiobooks
- Track reading progress with "Now Reading" list
- Set and track daily reading goals (minutes per day)
- Save favorite books
- Add quotes from books
- Like, comment, and reply on books
- Suggest books to the platform

### Child User Features
- Browse and watch educational songs and videos
- Browse and watch entertaining songs and videos
- Browse educational and entertaining books
- Add books to favorites
- Add books to "Now Reading" list

### Admin Dashboard
- User management (add / delete users)
- Book management (add / update / delete books and audiobooks)
- Most liked and most read books statistics
- Reading goals completion reports (weekly / monthly)
- User engagement and popularity analytics
- App rating overview
- Total counts (users, books, audiobooks)
- Top readers leaderboard

### Security
- JWT-based authentication
- Role middleware for endpoint protection (adult / child / admin)
- Password reset via email OTP verification

---

## Tech Stack

| Layer | Technology |
|---|---|
| Framework | Laravel |
| Database | MySQL |
| Authentication | JWT (tymon/jwt-auth) |
| API | RESTful API |
| Tools | Postman, Git |

---

## Local Setup

```bash
# 1. Clone the repository
git clone <repo-url>
cd <project-folder>

# 2. Install dependencies
composer install

# 3. Configure environment
cp .env.example .env
php artisan key:generate

# 4. Set up JWT
php artisan jwt:secret

# 5. Set up database
# Update DB credentials in .env, then:
php artisan migrate

# 6. Serve the application
php artisan serve
```

---

## Architecture

```
app/
├── Http/
│   ├── Controllers/
│   │   └── API/
│   │       ├── AuthController.php
│   │       ├── BookController.php
│   │       ├── UserController.php
│   │       ├── AdminController.php
│   │       ├── ChildController.php
│   │       ├── FavoriteController.php
│   │       ├── NowReadingController.php
│   │       └── ForgetPasswordController.php
│   └── Middleware/
│       └── CheckUserRole.php
└── Models/
```

---

## API Overview

| Role | Key Endpoints |
|---|---|
| Adult | getAllBooks, getAudioBook, set_goal, storeqoute, addComment, addReply, store_and_deletFavorite |
| Child | getEducationalBooks, getEntertainingVideos, getEducationalSong, favorite |
| Admin | addbook, deletebook, adduser, deleteuser, Most_Liked_Book, completed_goals_week |

---

## 👨‍💻 Author

**Baraa Hasan**
[GitHub](https://github.com/baraahasan4)
