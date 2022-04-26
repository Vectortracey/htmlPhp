<?php
$fileName = __DIR__ . "/../db/nvm2.sqlite";
$dsn = "sqlite:$fileName";

$db = connectToDatabase($dsn);
$sql = "SELECT * FROM object WHERE id = 5 ";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

$rows = null;
foreach ($res as $row) {
    $rows .= "<tr>";
    $rows .= "<td>{$row['name']}</td>";
    $rows .= "<td>{$row['title']}</td>";
    $rows .= "<td>{$row['data']}</td>";
    $rows .= "<td>{$row['author']}</td>";
    $rows .= "<td>{$row['gps']}</td>";
    $rows .= "<td>{$row['mapImage']}</td>";
    $rows .= "<td>{$row['image1']}</td>";
    $rows .= "<td>{$row['image1Alt']}</td>";
    $rows .= "<td>{$row['image1Text']}</td>";
    $rows .= "<td>{$row['TEXT']}</td>";
    $rows .= "<td>{$row['image2']}</td>";
    $rows .= "<td>{$row['image2Alt']}</td>";
    $rows .= "<td>{$row['image2Text']}</td>";
    $rows .= "</tr>\n";
}

?>

<div class="intro">
    <p><?php echo substr($row['title'], 1) ?></p>
    <p><?php echo $row['gps'] ?></p>
    <p><img src="img/150x150/<?php echo $row['image1'] ?>" alt=""></p>
    <p class="image-text"><?php echo $row['image1Text'] ?></p>
    <p class=" author">Skriven av: <?php echo $row['author'] ?></p>
</div>

<div class="text-data">
    <p><?php echo $row['data'] ?></p>
    <p><img src="img/150x150/<?php echo $row['image2'] ?>" alt=""></p>
    <p class="image-text"><?php echo $row['image2Text'] ?></p>
</div>
