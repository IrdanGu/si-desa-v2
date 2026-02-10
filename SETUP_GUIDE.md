# 🏘️ KPSIDESA - Village Information System Setup Guide

## 📋 Project Overview

This is a **Laravel 11** application for village administration management (Sistem Informasi Desa) with the following features:

### 🚀 Main Features:

-   **User Management** with role-based access (Admin, User, Karangtaruna)
-   **Resident Management** (Penduduk) - Population database
-   **Document Generation** (Surat-surat):
    -   Surat Keterangan Tidak Mampu (SKTM)
    -   Surat Keterangan Usaha
    -   Surat Keterangan Domisili
-   **News Management** (Berita)
-   **Village Structure Management** (Aparatur Desa)
-   **Events/Agenda Management**
-   **Gallery Management**
-   **Village Potential Management** (Potensi Desa)

### 🎭 User Roles:

-   **Admin**: Full access to all features
-   **Karangtaruna**: Youth organization management
-   **User**: Regular villagers who can request documents

## 🔧 Setup Instructions

### 1. Prerequisites

-   PHP 8.2 or higher
-   Composer
-   Node.js & NPM
-   MySQL Database
-   XAMPP/WAMP (optional)

### 2. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Generate application key
php artisan key:generate

# Create storage symlink
php artisan storage:link
```

### 3. Database Configuration

Update your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_sidesa
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Migration & Seeding

Since you already imported the database, migrations should be complete. Check status:

```bash
php artisan migrate:status
```

### 5. Start Development Server

```bash
php artisan serve
```

Access the application at: http://127.0.0.1:8000

## 🎯 Available Login Credentials

Based on the existing database, you can login with:

**Admin Users:**

-   admin@gmail.com
-   agung@gmail.com
-   admin@sidesa.com
-   irza@gmail.com

**Karangtaruna:**

-   rizko123@gmail.com
-   karangtaruna@sidesa.com

**Regular Users:**

-   user@sidesa.com
-   rizki123@gmail.com

## 🗂️ Project Structure

### Models & Database Tables:

-   **Users** (`users`) - System users with levels
-   **Penduduk** (`penduduk`) - Village residents
-   **Surat** (`surat`) - General letters/documents
-   **Surat_KeteranganUsaha** (`surat__keteranganusaha`) - Business certificates
-   **Surat_KeteranganDomisili** (`surat_domisili`) - Residence certificates
-   **Berita** (`berita`) - News articles
-   **Agenda** (`agenda`) - Village events
-   **Agenda_Karangtaruna** (`agenda_karangtaruna`) - Youth organization events
-   **AparaturDesa** (`aparatur_desas`) - Village officials
-   **Galery** (`galery`) - Photo gallery
-   **PotensiDesa** (`potensi_desa`) - Village potential/resources

### Key Controllers:

-   **DashboardController** - Main dashboard
-   **PendudukController** - Resident management
-   **SuratController** - Document management
-   **BeritaController** - News management
-   **UserController** - User management

## 🐛 Common Issues & Fixes

### Issue 1: PSR-4 Autoloading

Some files don't follow naming conventions. Fixed:

-   `sendEmailNotification.php` → `NotificationController.php`

### Issue 2: Inconsistent Table Names

The application has some inconsistent naming:

-   Table: `surat__keteranganusaha`
-   Model: `Surat_KeteranganUsaha`

### Issue 3: Migration Issues

If you encounter migration issues:

```bash
# Reset migrations (DANGER: Will delete data)
php artisan migrate:fresh --seed

# Or run specific migrations
php artisan migrate --path=/database/migrations/filename.php
```

## 📊 Main Application Routes

### Public Routes:

-   `/` - Home page (currently sends test email)
-   `/login` - Login page
-   `/register/user` - User registration
-   `/kontak` - Contact page
-   `/visimisi` - Vision & Mission
-   `/potensidesa` - Village potential

### Admin Routes (Protected):

-   `/dashboard` - Main dashboard
-   `/penduduk` - Resident management
-   `/berita` - News management
-   `/surat` - Document management
-   `/agenda` - Event management
-   `/galery` - Gallery management

## 🔨 Development Workflow

### 1. Adding New Features:

1. Create Model: `php artisan make:model ModelName -m`
2. Create Controller: `php artisan make:controller ControllerName`
3. Add routes in `routes/web.php`
4. Create views in `resources/views/`

### 2. Database Changes:

```bash
# Create migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate
```

### 3. Frontend Assets:

```bash
# Compile assets for development
npm run dev

# Watch for changes
npm run watch

# Build for production
npm run build
```

## 🎨 Frontend Framework

The application uses:

-   **Laravel UI** for authentication scaffolding
-   **AdminLTE** template (located in `public/adminlte/`)
-   **Bootstrap** for styling
-   **Vite** for asset compilation

## 📧 Email Configuration

Update `.env` for email functionality:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

## 🔒 Security Considerations

1. **Change Default Passwords**: Update all default user passwords
2. **Environment Variables**: Never commit `.env` file
3. **File Uploads**: Validate file types and sizes
4. **SQL Injection**: Use Eloquent ORM and parameter binding
5. **CSRF Protection**: Enabled by default in Laravel

## 🚀 Production Deployment

1. **Optimize for Production**:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
composer install --optimize-autoloader --no-dev
```

2. **Set Environment**:

```env
APP_ENV=production
APP_DEBUG=false
```

## 💡 Tips for Development

1. **Use Laravel Tinker** for testing:

```bash
php artisan tinker
```

2. **Clear Caches** when needed:

```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

3. **Generate Documentation**:

```bash
php artisan route:list
```

## 🆘 Troubleshooting

### Common Errors:

1. **500 Internal Server Error**:

    - Check `.env` configuration
    - Run `php artisan key:generate`
    - Check file permissions

2. **Database Connection Error**:

    - Verify database credentials in `.env`
    - Ensure MySQL service is running

3. **Class Not Found Error**:

    - Run `composer dump-autoload`
    - Check PSR-4 autoloading compliance

4. **Storage Permission Error**:
    - Set proper permissions: `chmod -R 775 storage bootstrap/cache`

## 📚 Learning Resources

-   [Laravel Documentation](https://laravel.com/docs)
-   [Laravel Eloquent ORM](https://laravel.com/docs/eloquent)
-   [AdminLTE Documentation](https://adminlte.io/docs)

---

**Note**: This application was originally developed with some coding inconsistencies. Follow Laravel best practices when adding new features.
