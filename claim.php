<?php
session_start();

if (isset($_POST['submit'])) {
    // Collect form data
    $phone = $_POST['phone'];
    $id = $_POST['id']; // ensure that 'id' is the correct form input name

    // Database connection
    $host = 'localhost'; // Database server
    $dbname = 'admin'; // Database name
    $username = 'root'; // Your DB username
    $password = ''; // Your DB password

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL query to check if phone and id match
        $stmt = $pdo->prepare("SELECT * FROM buyer WHERE phone = :phone AND id = :id");
        // Bind parameters correctly
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':id', $id);

        // Execute the query
        $stmt->execute();

        // Check if any row is returned (meaning credentials are correct)
        if ($stmt->rowCount() > 0) {
            // Fetch user details
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Store user details in session variables (you can use them later in the claim process)
            $_SESSION['user_id'] = $user['uid'];
            $_SESSION['fname'] = $user['fname'];
            $_SESSION['lname'] = $user['lname'];
            $_SESSION['phone'] = $user['phone'];

            // Redirect to claim page or a page showing the quote
            header("Location: claimS.html");
            exit;

        } else {
            // Show an error message if no matching record is found
            echo "<script>alert('Invalid Phone or Claim ID. Please try again.');</script>";
        }
    } catch (PDOException $e) {
        // Show the error message if the query fails
        echo "Database error: " . $e->getMessage();
    }
}
?>
