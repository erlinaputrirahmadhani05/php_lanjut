<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Array</title>
</head>
<?php
// Buat array dengan index nama dan umur
$data = array(
    array("nama" => "Erlina", "umur" => 18),
    array("nama" => "Suci", "umur" => 16),
    array("nama" => "Alice", "umur" =>15),
    array("nama" => "Alen", "umur" => 19),
    array("nama" => "Siti", "umur" => 20),
    array("nama" => "Diana", "umur" => 21),
    array("nama" => "Evo", "umur" => 23),
    array("nama" => "Rais", "umur" => 19),
    array("nama" => "Gralind", "umur" => 18),
    array("nama" => "Joo", "umur" => 18),
    array("nama" => "Irana", "umur" => 14),
    array("nama" => "Alifa", "umur" => 17),
    array("nama" => "Kirana", "umur" => 20),
    array("nama" => "Leya", "umur" => 15),
    array("nama" => "Zia", "umur" => 18)
);

// Konversi array menjadi format JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON data
echo nl2br($json_data);
?>
</html>