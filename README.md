# College Admission Portal

The College Admission Portal is a web application developed using XAMPP with Apache Tomcat. It allows users to register for the new academic year and log in to view their details.

## Features

- User Registration: New users can register by providing their details.
- User Login: Registered users can log in to view their details.
- Data Storage: User data is stored in a MySQL database.
- Year Determination: The application extracts and displays the year based on the second and third characters of the email ID.

## Setup Instructions

1. **Clone the Repository:**

2. **Configure XAMPP:**
- Download and install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
- Start Apache and MySQL servers in XAMPP Control Panel.

3. **Configure Apache Tomcat:**
- Download Apache Tomcat from [https://tomcat.apache.org/download-90.cgi](https://tomcat.apache.org/download-90.cgi).
- Extract the Tomcat archive to XAMPP's installation directory.
- Integrate Tomcat with XAMPP by configuring Apache's `httpd.conf` file.
- Start Tomcat in XAMPP Control Panel.

4. **Database Setup:**
- Access phpMyAdmin (http://localhost/phpmyadmin).
- Create a new database named `college_admission`.
- Run the SQL script provided in `database.sql` to create the `students` table.

5. **Deploy the Application:**
- Place the project files (HTML, PHP, etc.) in XAMPP's `htdocs` directory.
- Access the application through the browser at `http://localhost/`.

## Usage

- Open `registration.html` to register as a new user.
- Open `login.html` to log in and view user details.

## Security Considerations

- Always use prepared statements to prevent SQL injection attacks.
- Hash passwords using strong hashing algorithms like bcrypt.
- Avoid storing sensitive data in plain text.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
