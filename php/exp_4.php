<?php
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "user_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM footballers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Footballers</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Arial", sans-serif; }
        body { background: linear-gradient(to right, #8360c3, #2ebf91); display: flex; justify-content: center; align-items: center; height: 100vh; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 500px; text-align: center; }
        h2 { color: #333; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; font-size: 16px; }
        th { background: #2ebf91; color: white; }
        tr:nth-child(even) { background: #f3f3f3; }
    </style>
</head>
<body>
    <div class="container">
        <h2>International Footballers</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Country</th>
                <th>Club</th>
                <th>Position</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['country']}</td>
                            <td>{$row['club']}</td>
                            <td>{$row['position']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No players found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
