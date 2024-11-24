<?php
// Definicija osnovnih dijelova varijabli
$baseTitle = "Da Vincijev";
$suffixTitle = " kod";
$title = $baseTitle . $suffixTitle;

$baseLink = "https://hr.wikipedia.org/wiki/";
$link = $baseLink . str_replace(" ", "_", $title); // Zamjena razmaka podvlakom
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Informacije o knjizi Da Vincijev kod, kriminalističkom trileru američkog pisca Dana Browna.">
    <meta name="keywords" content="Da Vincijev kod, Dan Brown, knjiga, kriminalistički triler">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $title; ?> je kriminalistički triler američkog pisca Dana Browna.</p>
    <a href="<?php echo $link; ?>" target="_blank">Pročitajte više o knjizi</a>
</body>
<!-- Dokument: php-html-davincijev-kod-konkatenacija.php -->
</html>
