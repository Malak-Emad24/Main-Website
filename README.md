# Restaurant Management Project - Setup Guide

## Project Overview
This is a full-stack web application for a fictional restaurant, featuring a dynamic landing page, a secure authentication system, and a comprehensive admin dashboard for content management.

## Features
- **Dynamic Landing Page**: Fetches "About Us" and "Services" directly from the database.
- **Fancy UI**: Modern design with glassmorphism, premium typography (Playfair Display & Inter), and responsive layout.
- **Secure Admin Panel**: Protected routes with role-based access control.
- **Content Management (CRUD)**:
  - Edit "About Us" text.
  - Manage "Services" (Name and Icons).
  - View and manage reservations.
  - View contact messages.
- **Authentication**: Secure login/logout system.
- **Contact Form**: Functional form that stores inquiries in the database.

## Technical Stack
- **Frontend**: HTML5, CSS3 (Vanilla), JavaScript (ES6).
- **Backend**: PHP.
- **Database**: MySQL.

## Setup Instructions

### 1. Prerequisites
- XAMPP/WAMP or any local PHP/MySQL server.

### 2. Database Configuration
1. Open your MySQL management tool (e.g., phpMyAdmin).
2. Create a new database named `restaurant_data` (or the name specified in `db.php`).
3. Import the SQL file if provided, or simply run the application.

> [!NOTE]
> The application is designed to **auto-create** and **seed** the necessary tables (`site_content`, `services`, `reservation`, `user`, `contact_messages`) upon the first visit to the homepage or reservation page.

### 3. Running the Project
1. Copy the project folder to your server's root directory (e.g., `C:\xampp\htdocs\website-main`).
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Open your browser and navigate to `http://localhost/website-main/index2.php`.

### 4. Admin Access
- To access the dashboard, you must register a user and ensure they have the `admin` role in the database.
- **Default Login**: You can register your own account via `index2.php`.

## Project Structure
- `homepage.php`: The main public landing page.
- `index.php`: The menu page with category filtering.
- `index2.php`: Login and Registration page.
- `admin_dashboard.php`: The main entry point for administrators.
- `admin_content.php`: Manage landing page content (About Us, Services).
- `admin_reservations.php`: View and manage table reservations.
- `admin_messages.php`: View customer inquiries.
- `admin_users.php`: Manage your admin profile.
- `db.php`: Database connection settings.

---
Developed by Rodina Salih Elbargathy and Malak Emad Alenaizi
