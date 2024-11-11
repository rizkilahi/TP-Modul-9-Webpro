<?php
$tanggal = $_POST['tanggal'];
$hobi = isset($_POST['hobi']) ? $_POST['hobi'] : [];

$tanggal_format = date("j F Y", strtotime($tanggal));

$hobi_str = !empty($hobi) ? implode(", ", $hobi) : "-";

echo "<h2>Hasil Output</h2>";
echo "Tanggal lahir : $tanggal_format<br>";
echo "Hobi : $hobi_str";
?>
