 <?php
ob_start();
if (isset($_POST['submit'])) {
    // Collecting POST data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $ptype = $_POST['ptype'];
    $cstart = $_POST['cstart'];
    $cend = $_POST['cend'];
    $dname = $_POST['dname'];
    $ddob = $_POST['ddob'];
    $drelation = $_POST['drelation'];
    $dnameA = $_POST['dnameA'];
    $ddobA = $_POST['ddobA'];
    $drelationA = $_POST['drelationA'];
    $pmethod = $_POST['pmethod'];
    $pfrequency = $_POST['pfrequency'];

    // Handle file uploads
    $uploadDir = "upload/";
    $uploadedFiles = [];

    // Validate and upload files
    if (isset($_FILES['id']) && $_FILES['id']['error'] == 0) {
        $idTmpName = $_FILES['id']['tmp_name'];
        $idName = basename($_FILES['id']['name']);
        $idTargetFile = $uploadDir . uniqid() . "-" . $idName;
        if (move_uploaded_file($idTmpName, $idTargetFile)) {
            $uploadedFiles['id'] = $idTargetFile;
        } else {
            echo "Error uploading ID file.<br>";
        }
    }

    if (isset($_FILES['income']) && $_FILES['income']['error'] == 0) {
        $incomeTmpName = $_FILES['income']['tmp_name'];
        $incomeName = basename($_FILES['income']['name']);
        $incomeTargetFile = $uploadDir . uniqid() . "-" . $incomeName;
        if (move_uploaded_file($incomeTmpName, $incomeTargetFile)) {
            $uploadedFiles['income'] = $incomeTargetFile;
        } else {
            echo "Error uploading income file.<br>";
        }
    }

    if (isset($_FILES['mupload']) && $_FILES['mupload']['error'] == 0) {
        $medicalTmpName = $_FILES['mupload']['tmp_name'];
        $medicalName = basename($_FILES['mupload']['name']);
        $medicalTargetFile = $uploadDir . uniqid() . "-" . $medicalName;
        if (move_uploaded_file($medicalTmpName, $medicalTargetFile)) {
            $uploadedFiles['mupload'] = $medicalTargetFile;
        } else {
            echo "Error uploading medical records file.<br>";
        }
    }

    // Now you can save the data into a database (optional)
    // Database connection (replace with actual DB credentials)
    $host = 'localhost'; // Database server
    $dbname = 'admin'; // Database name
    $username = 'root'; // Your DB username
    $password = ''; // Your DB password

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the query with placeholders
        $stmt = $pdo->prepare("INSERT INTO buyer (
                fname, lname, dob, email, phone, saddress, city, states, pin, ptype, cstart, cend,
                dname, ddob, drelation, dnameA, ddobA, drelationA, pmethod, pfrequency,
                gid, pincome, mrecord
            ) 
            VALUES (
                :fname, :lname, :dob, :email, :phone, :street, :city, :state, :zip, :ptype, :cstart, :cend,
                :dname, :ddob, :drelation, :dnameA, :ddobA, :drelationA, :pmethod, :pfrequency,
                :gid, :pincome, :mrecord
            )");

        // Execute the query with the parameters
        $stmt->execute([
            ':fname' => $fname, 
            ':lname' => $lname, 
            ':dob' => $dob, 
            ':email' => $email, 
            ':phone' => $phone, 
            ':street' => $street, 
            ':city' => $city, 
            ':state' => $state, 
            ':zip' => $zip, 
            ':ptype' => $ptype, 
            ':cstart' => $cstart, 
            ':cend' => $cend, 
            ':dname' => $dname, 
            ':ddob' => $ddob, 
            ':drelation' => $drelation, 
            ':dnameA' => $dnameA, 
            ':ddobA' => $ddobA, 
            ':drelationA' => $drelationA, 
            ':pmethod' => $pmethod, 
            ':pfrequency' => $pfrequency, 
            ':gid' => $uploadedFiles['id'] ?? null, 
            ':pincome' => $uploadedFiles['income'] ?? null, 
            ':mrecord' => $uploadedFiles['mupload'] ?? null
        ]);

        // After successful insertion, fetch the latest ID of the inserted row
        $lastInsertId = $pdo->lastInsertId();

        if ($lastInsertId) {
            // Show an alert with the inserted ID (Claim ID) using JavaScript
            echo "<script>alert('Registration Successful! Your Claim ID is: $lastInsertId');</script>";  
        }

        // Redirect to index2.html after the alert
    //  header('Location: index2.html');
        exit;

    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
} else {
    echo "No form submitted.";
}

// End output buffering
ob_end_flush();
?> 