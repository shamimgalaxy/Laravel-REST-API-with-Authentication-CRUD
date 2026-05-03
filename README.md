<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# 🚀 Laravel REST API with Authentication & CRUD

A RESTful API built with **Laravel 12** and **Laravel Sanctum**, featuring user authentication (Register, Login, Logout) and full Product CRUD — all protected with Bearer Token.

---

## ✨ Features

- ✅ User Registration with validation
- ✅ User Login with Bearer Token
- ✅ User Logout (Token revocation)
- ✅ Product Create, Read, Update, Delete (CRUD)
- ✅ Protected routes with Laravel Sanctum
- ✅ JSON responses for all endpoints
- ✅ Proper error handling & validation messages

---

## 🛠️ Tech Stack

| Technology | Usage |
|------------|-------|
| PHP 8.2 | Server-side language |
| Laravel 12 | Backend framework |
| Laravel Sanctum | API Token Authentication |
| MySQL | Database |
| Eloquent ORM | Database interactions |
| Postman | API Testing |

---

## 📋 API Endpoints

### 🔓 Public Routes (No token required)

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST | `/api/register` | Register a new user |
| POST | `/api/login` | Login and get token |

### 🔒 Protected Routes (Bearer Token required)

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST | `/api/logout` | Logout and revoke token |
| GET | `/api/products` | Get all products |
| POST | `/api/products` | Create a new product |
| GET | `/api/products/{id}` | Get a single product |
| PUT | `/api/products/{id}` | Update a product |
| DELETE | `/api/products/{id}` | Delete a product |

---

## 📦 Installation & Setup

```bash
# 1. Clone the repository
git clone https://github.com/shamimgalaxy/Laravel-REST-API-with-Authentication-CRUD.git
cd Laravel-REST-API-with-Authentication-CRUD

# 2. Install dependencies
composer install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Configure database in .env
DB_DATABASE=your_db_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

# 5. Run migrations
php artisan migrate

# 6. Install Sanctum
php artisan install:api

# 7. Start the server
php artisan serve
```

---

## 🧪 API Usage Examples

### Register
```http
POST /api/register
Content-Type: application/json

{
    "name": "Shamim Ahmed",
    "email": "shamim@gmail.com",
    "password": "123456"
}
```

**Response:**
```json
{
    "message": "Registration successful",
    "user": { "id": 1, "name": "Shamim Ahmed", "email": "shamim@gmail.com" },
    "token": "1|abc123..."
}
```

---

### Login
```http
POST /api/login
Content-Type: application/json

{
    "email": "shamim@gmail.com",
    "password": "123456"
}
```

**Response:**
```json
{
    "message": "Login successful",
    "user": { ... },
    "token": "2|xyz456..."
}
```

---

### Create Product (Protected)
```http
POST /api/products
Authorization: Bearer {your_token}
Content-Type: application/json

{
    "name": "iPhone 15 Pro",
    "description": "Latest Apple phone",
    "price": 1199.99,
    "stock": 30
}
```

**Response:**
```json
{
    "message": "Product created successfully",
    "product": {
        "id": 1,
        "name": "iPhone 15 Pro",
        "price": 1199.99,
        "stock": 30
    }
}
```

---

## 📁 Project Structure

```
laravel-rest-api/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── api/
│   │       │   └── AuthController.php    # Register, Login, Logout
│   │       └── ProductController.php     # Product CRUD
│   └── Models/
│       ├── User.php                      # User model with Sanctum
│       └── Product.php                  # Product model
├── database/
│   └── migrations/                      # DB schema
└── routes/
    └── api.php                          # All API routes
```

---

## 🎯 What I Learned

- Building RESTful APIs with Laravel
- Token-based authentication using Laravel Sanctum
- Protecting routes with `auth:sanctum` middleware
- CRUD operations with Eloquent ORM
- Request validation and error handling
- Testing APIs with Postman

---

## 👨‍💻 Author

**Shamim Ahmed**
- GitHub: [@shamimgalaxy](https://github.com/shamimgalaxy)
- LinkedIn: [shamimgalaxy](https://www.linkedin.com/in/shamimgalaxy/)
- Email: shamimgalaxy@gmail.com
>>>>>>> 65c6535d640e9980ddf7dedd2085aac9d8764cc0
