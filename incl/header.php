<!doctype html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $pagetitle; ?></title>
</head>

<body>



    <header class="site-header">
        <img src="img/250/05_milstolparna.jpg" alt="bild" width="100" height="94">
        <span class="site-title">Nättraby Vägmuseum</span>
        <span class="site-slogan">Ett Friluftsmuseum! </span>
    </header>

    <nav class="navbar">
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "index.php" ? "selected" : ""; ?>" href="index.php">Hem</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : ""; ?>" href="about.php">Om</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "article.php" ? "selected" : ""; ?>" href="article.php">Artiklar</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "object.php" ? "selected" : ""; ?>" href="object.php">Objekt</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "gallery.php" ? "selected" : ""; ?>" href="gallery.php">Galleri</a>
    </nav>
