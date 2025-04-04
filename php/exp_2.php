<?php
$students = ["aman", "pranav", "naazir", "shanil", "nandana", "khadeeja", "fabi"];

$originalStudents = $students;

$ascendingStudents = $students;
asort($ascendingStudents);

$descendingStudents = $students;
arsort($descendingStudents);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List Sorting</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Arial", sans-serif; }
        body { background: linear-gradient(to right, #8360c3, #2ebf91); display: flex; justify-content: center; align-items: center; height: 100vh; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 400px; text-align: center; }
        h2 { color: #333; margin-bottom: 20px; }
        .box { background: #f3f3f3; padding: 10px; margin: 10px 0; border-radius: 5px; text-align: left; }
        pre { font-size: 16px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student List</h2>

        <div class="box">
            <h3>Original Array:</h3>
            <pre><?php print_r($originalStudents); ?></pre>
        </div>

        <div class="box">
            <h3>Sorted in Ascending Order:</h3>
            <pre><?php print_r($ascendingStudents); ?></pre>
        </div>

        <div class="box">
            <h3>Sorted in Descending Order:</h3>
            <pre><?php print_r($descendingStudents); ?></pre>
        </div>
    </div>
</body>
</html>
