<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Totaalne Pseudovärk</title>
</head>
<body>

<form action="index.php?" method="get">
    <input name="page">
    <input type="submit">
</form>

<?php

if (isset($_GET['page'])) {
    require $_GET['page'] . '.php';
}
?>

</body>
</html>
