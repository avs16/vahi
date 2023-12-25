<?php
// Include the database connection file
$servername = "localhost";
$username = "u550041025_Vahi123";
$password = "KOU4=V3@oZ3";
$dbname = "u550041025_vahi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Check if the user is already logged in, if yes, redirect to dashboard
session_start();
if(isset($_SESSION["user_id"])) {
    header("Location: dashboard.php"); // Redirect to dashboard page
    exit;
}

// Define variables to hold error messages
$error = '';

// Login process
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = sanitizeInput($_POST["email"]);
    $password = sanitizeInput($_POST["password"]);

    // Fetch user details from the database based on the provided email
    $login_query = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $login_query->bind_param("s", $email);
    $login_query->execute();
    $login_result = $login_query->get_result();

    if ($login_result->num_rows == 1) {
        $row = $login_result->fetch_assoc();
        $hashed_password = $row["password"];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Set user session and redirect to dashboard
            $_SESSION["user_id"] = $row["id"];
            header("Location: dashboard.php"); // Redirect to dashboard page
            exit;
        } else {
            $error = "Invalid password. Please try again.";
        }
    } else {
        $error = "User not found. Please register or check your credentials.";
    }

    $login_query->close();
}
?>
<!-- HTML form for user login -->
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <script>
        // Display error message as an alert using JavaScript
        <?php if (!empty($error)) : ?>
            alert("<?php echo $error; ?>");
        <?php endif; ?>
    </script>
</head>
<body>
    <h2>User Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
