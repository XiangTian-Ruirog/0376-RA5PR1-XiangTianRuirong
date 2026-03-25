<?php
    $num = null;
    if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

    <form method="POST" action="index.php">
    <label>Introdueix un número (1-12): </label>
    <input type="number" name="numero" min="1" max="12" required>
    <button type="submit">Generar taula</button>
    </form>

<?php
    if ($numero !== null) {
        if ($numero < 1 || $numero > 12) {
        echo "<p class='error'>Error: El número ha d'estar entre 1 i 12.</p>";
        } else {
            echo "<table>";
            for ($i = 1; $i <= 10; $i++) {
            $classe = ($i % 2 == 0) ? "parell" : "senar";
            echo "<tr class='$classe'>";
            echo "<td>$numero x $i</td>";
            echo "<td>" . ($numero * $i) . "</td>";
            echo "</tr>";
            }
            echo "</table>";
        }
    }
?>
</body>
</html>