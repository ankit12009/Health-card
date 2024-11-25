<?php
if (isset($_POST['submitClaim'])) {
    // Collecting form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $policyNumber = $_POST['policyNumber'];
    $claimAmount = $_POST['claimAmount'];
    $incidentDate = $_POST['incidentDate'];
    $incidentDescription = $_POST['incidentDescription'];

    // Processing uploaded files
    $uploadDirectory = 'uploads/';
    $uploadedFiles = [];

    if (isset($_FILES['document'])) {
        $totalFiles = count($_FILES['document']['name']);
        for ($i = 0; $i < $totalFiles; $i++) {
            $fileTmpName = $_FILES['document']['tmp_name'][$i];
            $fileName = basename($_FILES['document']['name'][$i]);
            $fileSize = $_FILES['document']['size'][$i];
            $fileType = $_FILES['document']['type'][$i];

            // Define the target file path
            $targetFile = $uploadDirectory . uniqid() . "-" . $fileName;

            // Check file size (limit to 5MB)
            if ($fileSize > 5 * 1024 * 1024) {
                echo "File size should not exceed 5MB.";
                exit;
            }

            // Move uploaded file to the desired directory
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                $uploadedFiles[] = $targetFile;
            } else {
                echo "Error uploading file: $fileName.";
                exit;
            }
        }
    }

    // Save the claim details to a database or send them via email (for simplicity, we'll just display the data here)
    echo "<h2>Claim Submitted Successfully</h2>";
    echo "<strong>Claimant Details:</strong><br>";
    echo "Full Name: $fullName<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Address: $address<br><br>";

    echo "<strong>Policy Details:</strong><br>";
    echo "Policy Number: $policyNumber<br>";
    echo "Claim Amount: $$claimAmount<br>";
    echo "Incident Date: $incidentDate<br>";
    echo "Incident Description: $incidentDescription<br><br>";

    echo "<strong>Uploaded Documents:</strong><br>";
    foreach ($uploadedFiles as $file) {
        echo "<a href='$file' target='_blank'>$file</a><br>";
    }
} else {
    echo "No claim submitted.";
}
?>
