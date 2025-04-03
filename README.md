# User Management API (Laravel)  

## 📌 Project Overview  
This project is a User Management API built with Laravel. It provides user authentication, role-based access, and CRUD operations for user management.  

## Code Structure
### Controllers
AuthController.php - Handles authentication (Login, Register, Logout).

UserController.php - Handles CRUD operations for users.

### Services
UserService.php - Business logic for managing users.

### Repositories
UserRepository.php - Database interactions for users.

### Middleware
auth:sanctum - Protects routes with authentication.

## 🚀 Installation  
To set up the project:  
1. Clone the repository:  
   ```sh
   git clone https://github.com/AINS11/user-management.git
   cd your-repo
   ```
2. Install dependencies:  
   ```sh
   composer install
   ```
3. Copy the `.env.example` file to `.env` and update the environment variables:  
   ```sh
   cp .env.example .env
   ```
4. Generate application key:  
   ```sh
   php artisan key:generate
   ```
5. Set up the database in `.env` file and run migrations:  
   ```sh
   php artisan migrate
   ```
6. Seed the database (if applicable):  
   ```sh
   php artisan db:seed
   ```
7. Start the development server:  
   ```sh
   php artisan serve
   ```
   
## 📜 API Endpoints  

### 🔐 Authentication Routes  
- **POST /register** - Register a new user  
- **POST /login** - Log in and receive an access token  
- **POST /logout** - Logout and revoke access token  

### 👥 User Management Routes (Requires Authentication)  
- **GET /users** - Retrieve all users  
- **GET /users/{id}** - Retrieve a specific user by ID  
- **POST /users** - Create a new user  
- **PUT /users/{id}** - Update an existing user  
- **DELETE /users/{id}** - Delete a user  

## 🛠️ Running Migrations & Seeders  
Run database migrations:  
```sh
php artisan migrate
```
Run seeders:  
```sh
php artisan db:seed
```

## 🔑 Authentication  
This project uses Laravel Sanctum for authentication. Each request to protected routes must include a **Bearer Token** in the `Authorization` header.  

Example:  
```sh
Authorization: Bearer {your_token}
```

## ⚙️ Environment Configuration  
Set the necessary environment variables in the `.env` file:  
```sh
APP_NAME="User Management API"
APP_URL="http://localhost:8000"
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=user_management
DB_USERNAME=root
DB_PASSWORD=
```

## 📜 Git Workflow  
1. Clone repository  
2. Create a feature branch:  
   ```sh
   git checkout -b feature-branch
   ```
3. Commit changes:  
   ```sh
   git commit -m "Your commit message"
   ```
4. Push branch to repository:  
   ```sh
   git push origin feature-branch
   ```
5. Create a Pull Request on GitHub  


