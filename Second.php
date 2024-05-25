<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "college_admission";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Sanitize inputs
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password);

        // Fetch user data
        $sql = "SELECT firstname, lastname, email, phoneno, gender, password FROM students WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Fetch the result row
            $row = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Display user details
                echo "<h2>Student Details</h2>";
                echo "First Name: " . htmlspecialchars($row['firstname']) . "<br>";
                echo "Last Name: " . htmlspecialchars($row['lastname']) . "<br>";
                echo "Email: " . htmlspecialchars($row['email']) . "<br>";
                echo "Phone Number: " . htmlspecialchars($row['phoneno']) . "<br>";
                echo "Gender: " . htmlspecialchars($row['gender']) . "<br>";

                // Get second and third characters of email
                $second_char = substr($email, 1, 1);
                $third_char = substr($email, 2, 1);

                // Determine the year based on the second and third characters of the email
                if (is_numeric($second_char) && is_numeric($third_char)) {
                    $year = "20" . $second_char . $third_char;
                    echo "Year: " . htmlspecialchars($year) . "<br>";
                } else {
                    echo "Invalid email format for determining year.<br>";
                }
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "Invalid email.";
        }
    }

    $conn->close();
    ?>
</body>
</html>
