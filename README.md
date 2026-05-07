# 🧠 SocialSphere API

A powerful RESTful API for a social media platform built with Laravel.  
It supports authentication, posts, comments, likes, follow system, and notifications.

---

## 🚀 Features

- 🔐 Authentication (Register / Login / Logout)
- 📝 Posts (CRUD)
- 💬 Comments system
- ❤️ Like / Unlike posts
- 👤 Follow / Unfollow users
- 🔔 Notifications system (like, comment, follow)
- 🖼️ Profile management (avatar upload)

---

## 🛠️ Tech Stack

- PHP (Laravel)
- MySQL
- Laravel Sanctum (Authentication)
- RESTful API

---

## 📂 API Documentation

👉 Full Postman Documentation:  
https://documenter.getpostman.com/view/46890560/2sBXqMJKUd

---

## ⚙️ Installation

```bash
git clone https://github.com/youssefmarey/socialsphere-api.git
cd socialsphere-api
composer install
cp .env.example .env
php artisan key:generate
````

---

## 🗄️ Database Setup 🗄️

```bash
php artisan migrate
```

---

## 🔑 Run Server 🔑

```bash
php artisan serve
```

---

## 🔐 Authentication 🔐

Use Bearer Token in headers:

```bash
Authorization: Bearer YOUR_TOKEN
```

---

## 📡 Example Endpoints

### 🔹 Auth

```http
POST /api/register
POST /api/login
POST /api/logout
```

### 🔹 Posts

```http
GET    /api/posts
POST   /api/posts
PUT    /api/posts/{id}
DELETE /api/posts/{id}
```

### 🔹 Profile

```http
GET  /api/profile
POST /api/profile/avatar
PUT  /api/profile
DELETE /api/profile/avatar
```

### 🔹 Comments

```http
POST   /api/comments
PUT    /api/comments/{id}
DELETE /api/comments/{id}
```

### 🔹 Likes

```http
POST /api/likes/{postId}
```

### 🔹 Follow

```http
POST /api/follow/{userId}
```

### 🔹 Notifications

```http
GET  /api/notifications
POST /api/notifications/read
```

---

## 🧪 Testing

Use Postman Collection or the published documentation above.

---

## 📬 Postman Collection
Import it from: docs/postman_collection.json

---

## 💡 Future Improvements

* 🔴 Real-time notifications (WebSockets)
* 📱 Mobile app integration
* 🧠 Smart feed (following users only)
* 💬 Replies to comments

---

## 👨‍💻 Author

Developed by **Youssef Marey** 💪🔥
