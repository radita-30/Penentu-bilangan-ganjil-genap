<!DOCTYPE html>
<html>
<head>
    <title>Penentuan Bilangan</title>
</head>
<body>

<h2>Penentuan Bilangan 0/Ganjil/Bulat</h2>

<form action="" method="GET">
    <label for="bil">Masukkan Bilangan</label>
    <input type="number" id="bil" name="bil" required>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET["bil"])) { 
    $bil = $_GET["bil"];

    if (0) {
        echo "<p>$bil adalah 0</p>";
    } elseif ($bil % 2 == 0) {
        echo "<p>$bil adalah bilangan genap</p>";
    } else {
        echo "<p>$bil adalah bilangan ganjil</p>";
    }
}
?>

</body>
</html>