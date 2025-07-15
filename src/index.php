<?php
require_once "./database/connection.php";
session_start();

function getAll($tableName) {
    global $conn;
    $sql = "SELECT * FROM $tableName";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$countries = getAll("countries");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>European Countries</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>European Countries</h1>

<ul class="country-list">
<?php foreach ($countries as $country) { ?>
    <li class="country-card">
        <img src="https://flagcdn.com/w80/<?= $country['country_code'] ?>.png" alt="Flag of <?= $country['country_name'] ?>">
        <div>
            <h2><?= $country['country_name'] ?></h2>
            <p><?= $country['about'] ?></p>
        </div>
    </li>
<?php } ?>
</ul>

</body>
</html>
