<?php
$players = ["sewag", "sachin", "sunil gavaskar", "DDG", "irfan pathan", "ganguly", "saheer khan"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Arial", sans-serif; }
        body { background: linear-gradient(to right, #8360c3, #2ebf91); display: flex; justify-content: center; align-items: center; height: 100vh; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 400px; text-align: center; }
        h2 { color: #333; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; font-size: 16px; }
        th { background: #2ebf91; color: white; }
        tr:nth-child(even) { background: #f3f3f3; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Indian Cricket Players</h2>
        <table>
            <tr>
                <th>Sr. No.</th>
                <th>Player Name</th>
            </tr>
            <?php
            $count = 1;
            foreach ($players as $player) {
                echo "<tr><td>$count</td><td>$player</td></tr>";
                $count++;
            }
            ?>
        </table>
    </div>
</body>
</html>
