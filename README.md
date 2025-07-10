# 🛍️ Product Management System

> **ระบบจัดการสินค้าและบันทึกประวัติการแก้ไข**  
> A Laravel-based product management system with comprehensive edit history tracking

[![Laravel Version](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=flat-square&logo=php)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)
[![Last Updated](https://img.shields.io/badge/Updated-2025--07--10-blue?style=flat-square)](https://github.com/WinzXIII/product-management-system)

---

## 📋 **Table of Contents**

- [🎯 Project Overview](#-project-overview)
- [✨ Features](#-features)
- [🏗️ System Architecture](#️-system-architecture)
- [⚙️ Installation](#️-installation)
- [🗄️ Database Structure](#️-database-structure)
- [👥 Default Users](#-default-users)
- [🖥️ Screenshots](#️-screenshots)
- [🧪 Testing](#-testing)
- [🤝 Contributing](#-contributing)
- [📄 License](#-license)

---

## 🎯 **Project Overview**

ระบบจัดการสินค้าที่มีความสามารถในการติดตามและบันทึกประวัติการแก้ไขชื่อสินค้า โดยสามารถเก็บข้อมูลว่า **ใครเป็นคนแก้ไข**, **ชื่อเดิมคืออะไร**, และ **แก้ไขเมื่อไหร่**

### **Core Requirements**
- ✅ ระบบมีสินค้า **5 รายการ** (เฉพาะชื่อสินค้าเท่านั้น)
- ✅ ระบบมีพนักงาน **3 คน** (ไม่ต้องมีหน้าเพิ่มพนักงาน)
- ✅ บันทึกประวัติการแก้ไขแบบครบถ้วน
- ✅ ใช้ระบบล็อกอินของ Laravel

---

## ✨ **Features**

### 🔐 **Authentication System**
- Laravel Breeze authentication
- Secure login/logout functionality
- User session management

### 🛍️ **Product Management**
- **Product List Page**: แสดงรายการสินค้าพร้อมรหัสและปุ่มแก้ไข
- **Product Edit Page**: ฟอร์มสำหรับเปลี่ยนชื่อสินค้า
- **Real-time Updates**: อัพเดตข้อมูลทันที

### 📊 **Edit History Tracking**
- บันทึกผู้แก้ไข (User ID)
- บันทึกชื่อเดิมและชื่อใหม่
- บันทึกเวลาที่แก้ไขแบบแม่นยำ
- ความสัมพันธ์ระหว่างตาราง (Foreign Key Relations)

### 🎨 **Modern UI/UX**
- Responsive design ที่ใช้งานได้ทุกอุปกรณ์
- Dark mode support
- Smooth animations และ transitions
- Tailwind CSS framework

---

## 🏗️ **System Architecture**

```
┌─────────────────────────────────────────────────────────────┐
│                    Frontend (Blade + Tailwind)              │
├─────────────────────────────────────────────────────────────┤
│                    Backend (Laravel 10.x)                   │
├─────────────────────────────────────────────────────────────┤
│                    Database (MySQL)                         │
│  ┌─────────────┐  ┌─────────────┐  ┌──────────────────────┐ │
│  │   users     │  │  products   │  │  product_edit_logs   │ │
│  └─────────────┘  └─────────────┘  └──────────────────────┘ │
└─────────────────────────────────────────────────────────────┘
```

---

## ⚙️ **Installation**

### **Prerequisites**
- PHP 8.1 or higher
- Composer
- MySQL 8.0 or higher
- Node.js & NPM

### **Step 1: Clone Repository**
```bash
git clone https://github.com/WinzXIII/product-management-system.git
cd product-management-system
```

### **Step 2: Install Dependencies**
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install && npm run build
```

### **Step 3: Environment Setup**
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### **Step 4: Database Configuration**
```bash
# Edit .env file
nano .env
```

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=khunmee_test
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### **Step 5: Database Setup**
```bash
# Create database
mysql -u root -p -e "CREATE DATABASE khunmee_test;"

# Run migrations with seeders
php artisan migrate:fresh --seed
```

### **Step 6: Start Development Server**
```bash
php artisan serve
```

🎉 **Application is now running at** `http://localhost:8000`

---

## 🗄️ **Database Structure**

### **📋 Tables Overview**

| Table | Purpose | Records |
|-------|---------|---------|
| `users` | ผู้ใช้งานระบบ | 3 users |
| `products` | ข้อมูลสินค้า | 5 products |
| `product_edit_logs` | ประวัติการแก้ไข | Dynamic |

### **🔗 Entity Relationship**

```sql
users (1) ────────── (∞) product_edit_logs
                            │
products (1) ────────── (∞) product_edit_logs
```

### **📊 Database Schema**

#### **Users Table**
```sql
CREATE TABLE users (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

#### **Products Table**
```sql
CREATE TABLE products (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

#### **Product Edit Logs Table**
```sql
CREATE TABLE product_edit_logs (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    product_id BIGINT NOT NULL,
    user_id BIGINT NOT NULL,
    old_name VARCHAR(255) NOT NULL,
    new_name VARCHAR(255) NOT NULL,
    edited_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

---

## 👥 **Default Users**

| ID | Name | Email | Password |
|----|------|-------|----------|
| 1 | test1 | test1@email.com | `123456` |
| 2 | test2 | test2@email.com | `123456` |
| 3 | test3 | test3@email.com | `123456` |

### **🛍️ Default Products**

| ID | Name |
|----|------|
| 1 | Product A |
| 2 | Product B |
| 3 | Product C |
| 4 | Product D |
| 5 | Product E |

---

## 🖥️ **Screenshots**

### **🏠 Welcome Page**
![Welcome Page](screenshots/welcome.png)

### **🛍️ Products List**
![Products List](screenshots/products-list.png)

### **✏️ Edit Product**
![Edit Product](screenshots/edit-product.png)

### **🔐 Login Page**
![Login Page](screenshots/login.png)

---

## 🧪 **Testing**

### **Run Tests**
```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature

# Run with coverage
php artisan test --coverage
```

### **Test Database**
```bash
# Create test database
mysql -u root -p -e "CREATE DATABASE product_management_test;"

# Run tests with fresh database
php artisan test --env=testing
```

---

## 🚀 **Deployment**

### **Production Setup**
```bash
# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### **Environment Variables**
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Database
DB_CONNECTION=mysql
DB_HOST=your_host
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_secure_password
```

---

## 🤝 **Contributing**

We welcome contributions! Please follow these steps:

1. **Fork the repository**
2. **Create a feature branch**
   ```bash
   git checkout -b feature/amazing-feature
   ```
3. **Commit your changes**
   ```bash
   git commit -m 'Add some amazing feature'
   ```
4. **Push to the branch**
   ```bash
   git push origin feature/amazing-feature
   ```
5. **Open a Pull Request**

### **Code Style**
- Follow [PSR-12](https://www.php-fig.org/psr/psr-12/) coding standards
- Use meaningful variable and function names
- Add comments for complex logic
- Write tests for new features

---

## 📄 **License**

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 🙏 **Acknowledgments**

- [Laravel Framework](https://laravel.com) - The web artisans framework
- [Tailwind CSS](https://tailwindcss.com) - A utility-first CSS framework
- [Laravel Breeze](https://github.com/laravel/breeze) - Minimal authentication scaffolding

---

## 📞 **Support**

If you have any questions or issues:

- 📧 Email: support@example.com
- 🐛 Issues: [GitHub Issues](https://github.com/WinzXIII/product-management-system/issues)
- 💬 Discussions: [GitHub Discussions](https://github.com/WinzXIII/product-management-system/discussions)

---

<div align="center">

**Made with ❤️ by [WinzXIII](https://github.com/WinzXIII)**

*Last Updated: 2025-07-10 17:59:16 UTC*

</div>
