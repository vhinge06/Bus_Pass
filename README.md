# Bus Pass Management System

A web-based application for managing bus passes for students and administrators, designed for Jaihind College of Engineering. The system allows students to register, apply for bus passes, and download their passes as PDFs, while administrators can manage categories, passes, and view reports.

## Table of Contents
- [Features](#features)
- [Demo](#demo)
- [Getting Started](#getting-started)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [PDF Generation](#pdf-generation)
- [License](#license)

## Features
- Student registration and login
- Secure password storage (hashed)
- Student bus pass application form
- Admin dashboard for managing categories and passes
- Pass download as PDF (using FPDF library)
- Reports: daily, weekly, and custom date range
- Contact and enquiry management
- Responsive UI with Bootstrap


## Getting Started

### Prerequisites
- PHP 7.x or higher
- MySQL/MariaDB
- Web server (Apache recommended)
- [FPDF library](http://www.fpdf.org/) (already included)

### Installation
1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/bus-pass-management-system.git
   cd bus-pass-management-system/buspassms
   ```
2. **Set up the database:**
   - Import the SQL file located at `../SQL File/buspassdb (1).sql` into your MySQL server:
     - You can use phpMyAdmin or run:
       ```sql
       SOURCE path/to/SQL File/buspassdb (1).sql;
       ```
   - This will create the required tables and some sample data.
3. **Configure database connection:**
   - Edit `includes/dbconnection.php` and update the credentials if needed:
     ```php
     define('DB_HOST','localhost');
     define('DB_USER','root');
     define('DB_PASS','');
     define('DB_NAME','buspassdb');
     ```
4. **Set up your web server:**
   - Point your web server's document root to the `buspassms` directory.
   - Ensure file upload and PDF generation permissions are set.

## Usage
- **Students:**
  - Register via `Student/register.php`
  - Login via `Student/login.php`
  - Apply for a bus pass via `Student/Pass/pass-form.php`
  - Download the generated pass as a PDF
- **Admins:**
  - Login via `admin/index.php`
  - Manage categories, passes, and view reports

## PDF Generation
- The system uses the [FPDF](http://www.fpdf.org/) library (v1.85) to generate bus pass PDFs automatically after a successful application.
- The generated PDF includes student details, source/destination, amount, and a placeholder for a photo and institute seal.

## Database Setup
- The main tables include:
  - `users`: Student login credentials
  - `pass`: Student bus pass applications
  - `tbladmin`: Admin users
  - `tblcategory`: Bus categories
  - `tblpass`: Issued passes
  - `tblcontact`: Contact/enquiry messages
  - `tblpage`: Static page content (About, Contact)
- See the SQL file for full schema and sample data.

## License
This project is licensed under the GNU GPL v3.0. See the [LICENSE](LICENSE) file for details.

---

