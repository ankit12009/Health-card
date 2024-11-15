 <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "admin";
    $con = mysqli_connect($server, $user, $password, $db);

    if (isset($_POST['submit'])){
        $username = $_POST['Username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE username='$username' AND pw='$password'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $admin="Admin";
            $apass="admin1209";
            if ($username === $admin && $password === $apass) {
                echo "<script>alert('Hello Admin sir');</script>";
                exit();
            }
             else{
                echo "<script>alert('Login successful!');</script>";
                header('location:index2.html');
             }
        }
         else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
    ?>