<?php
$num = 7;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer codi en PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
            margin-top: 20px;
        }
        td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        .parell {
            background-color: #f2f2f2;
        }
        .senar {
            background-color: #ffffff;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Taula de multiplicar</h2>
    <?php
    if ($num <1 || $num > 12){
        echo "<pclass='error'>Error: El número ha d'estar entre 1 i 12</p>";
    } else {
        echo "<table>";
        for ($i = 1;$i <= 10; $i++) {
            if ($i % 2 == 0) {
                $classe = "parell";
            } else {
                $classe = "senar";
            }
            echo "<tr class='$classe'>";
            echo "<td>$num x $i</td>";
            echo "<td>" . ($num * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>