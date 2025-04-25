```markdown
# Student Registration App

A responsive and secure student registration system built by **burningtonemwatha**, using **HTML**, **CSS**, **JavaScript**, **PHP**, and **MySQL**. The app provides client-side validation and stores user data securely in a MySQL database. Upon successful registration, users are redirected to a dashboard confirming their registration.

🔗 **Live Demo:** [http://studentregistration.42web.io](http://studentregistration.42web.io)

## 🚀 Features

- Form fields: Name, Email, Password, Confirm Password
- JavaScript validation:
  - All fields are required
  - Valid email format
  - Password and Confirm Password must match
  - Password must be at least 8 characters, contain an uppercase letter, and a number
- Passwords are securely hashed before storage
- Translucent styling with a clean UI
- Redirection to a confirmation dashboard after successful registration

## 🛠️ Technologies Used

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP 8
- **Database:** MySQL
- **Hosting:** InfinityFree (Free Hosting)
- **Database Management:** phpMyAdmin (via vPanel)

## 🧪 Running on Localhost (XAMPP)

1. Download and install [XAMPP](https://www.apachefriends.org/index.html)
2. Place project folder in `C:\xampp\htdocs\student_registration`
3. Start Apache and MySQL from the XAMPP Control Panel
4. Open [phpMyAdmin](http://localhost/phpmyadmin)
   - Create a database named `student_registration`
   - Import your SQL file (e.g., `student.sql`)
5. Update your `submit_form.php` credentials:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = ""; // Leave blank on local
   $dbname = "student_registration";
   ```
6. Visit in browser:  
   `http://localhost/student_registration/index.html`

## 🌐 Deploying on InfinityFree

1. Upload all files to your `htdocs` directory using File Manager or FTP
2. Create a database via your vPanel
3. Update `submit_form.php` with your InfinityFree DB credentials:
   ```php
   $servername = "sql201.infinityfree.com";
   $username = "if0_38786324";
   $password = "your_vpanel_password";
   $dbname = "if0_38786324_student_registration";
   ```
4. Visit:  
   [http://studentregistration.42web.io](http://studentregistration.42web.io)

## ✅ Future Enhancements

- Login system
- Admin panel to manage registrations
- Email verification
- Extra security features (CSRF tokens, CAPTCHA)

## 🙏 Credits

Developed by **burningtonemwatha**  
Powered by [InfinityFree](https://infinityfree.net/)
```
