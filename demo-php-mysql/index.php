<?php
$servername = "localhost";  // Change if hosted elsewhere
$username = "root";         // Replace with your MySQL username
$password = "";             // Replace with your MySQL password
$dbname = "qlsinhvien";     // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select data from the 'sinhvien' table
$sql = "SELECT * FROM sinhviens";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="my-4">Student List (Sinh Viên)</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name (Tên)</th>
                    <th>Average Score (Điểm Trung Bình)</th>
                    <th>Image (Hình Ảnh)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['ten']}</td>
                            <td>{$row['dtb']}</td>
                            <td><img src=" . htmlspecialchars($row['hinhanh']) . " alt='Student Image' class='img-thumbnail' style='max-width: 100px;'></td>
                          </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Close connection
$conn->close();
?>