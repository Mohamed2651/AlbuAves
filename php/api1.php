<?php
// Conectamos a la base de datos
$db = new SQLite3('../db/albuaves.db');

// Obtenemos todas las aves
$result = $db->query("SELECT * FROM birds");
$aves = [];
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $aves[] = $row;
}

$db->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Aves</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 250px;
            transition: transform 0.2s;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .card-content {
            padding: 15px;
            text-align: center;
        }
        .card-content h2 {
            margin: 10px 0 5px;
            color: #2c3e50;
        }
        .card-content h3 {
            margin: 5px 0;
            color: #555;
            font-weight: normal;
            font-size: 0.9em;
            font-style: italic;
        }
        .card-content p {
            color: #666;
            font-size: 0.9em;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Listado de Aves</h1>
    <div class="cards-container">
        <?php foreach($aves as $ave): ?>
            <div class="card">
                <img src="<?= htmlspecialchars($ave['img_url']) ?>" alt="<?= htmlspecialchars($ave['common_name']) ?>">
                <div class="card-content">
                    <h2><?= htmlspecialchars($ave['common_name']) ?></h2>
                    <h3><?= htmlspecialchars($ave['scientific_name']) ?></h3>
                    <p><?= htmlspecialchars($ave['description']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
