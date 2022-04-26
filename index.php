<?php
$pagetitle = "Hem";
include("incl/header.php");
require __DIR__ . "/config.php";
$fileName = __DIR__ . "/db/nvm2.sqlite";
$dsn = "sqlite:$fileName";

$db = connectToDatabase($dsn);
$sql = "SELECT * FROM article WHERE id = 2 ";
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
    $rows .= "<td>{$row['image1']}</td>";
    $rows .= "<td>{$row['image1Alt']}</td>";
    $rows .= "<td>{$row['image1Text']}</td>";
    $rows .= "</tr>\n";
}

?>


<div class="wrap-main">
    <div class="intro">

        <img src="img/250/skylt-vagmuseum.jpg" height="250" width="250" alt="kustbana">

    </div>
    <div class="text-data">
        <p><?php echo $row['data'] ?></p>
        <p><img src="img/150x150/<?php echo $row['image2'] ?>" alt=""></p>
        <p class="image-text"><?php echo $row['image2Text'] ?></p>
    </div>
</div>

<?php include("incl/footer.php"); ?>
