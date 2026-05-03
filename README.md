
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
