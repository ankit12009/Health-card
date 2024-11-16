<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Admin Page</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body >
    <?php 
     $con = mysqli_connect("localhost","root","","admin") or die("Connection Failed");
     ?>
    <header>
        <nav>
            <ul>
                <li><a href="#">Policy Management</a></li>
                <li><a href="#">Claims Processing</a></li>
                <li><a href="#">Customer Management</a></li>
                <li><a href="#">Reporting Tools</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Policy Management</h2>
            <table>
                <thead>
                    <tr>
                        <th>Policy ID</th>
                        <th>Policy Name</th>
                        <th>Policy Type</th>
                        <th>Policy Status</th>
                        <th>View Details</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- policy data would be displayed here -->
                     <tr>
                     <td><?php echo $_GET['id'] ?></td>
                     <td><?php echo $_GET['name'] ?></td>
                     <td><?php echo $_GET['status'] ?></td>
                     <td><?php echo $_GET['details'] ?></td>
                     </tr>
                </tbody>
            </table>
        </section>
        <section>
            <h2>Claims Processing</h2>
            <table>
                <thead>
                    <tr>
                        <th>Claim ID</th>
                        <th>Claim Date</th>
                        <th>Claim Status</th>
                        <th>View Details</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- claim data would be displayed here -->
                </tbody>
            </table>
        </section>
        <section>
            <h2>Customer Management</h2>
            <table>
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>View Details</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- customer data would be displayed here -->
                </tbody>
            </table>
        </section>
        <section>
            <h2>Reporting Tools</h2>
            <div>
                <!-- reporting tools would be displayed here -->
            </div>
        </section>
    </main>
</body>
</html>