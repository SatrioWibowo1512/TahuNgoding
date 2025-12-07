<?php

// 1. Daftar barang for each
$brand = ["samsung", "oppo", "apple"];
foreach ($brand as $item) {
    echo $item ."<br>";
}


// 2. Sorting
$nama = ["Brody", "Cici", "Aamon"];
echo "sebelum sort a-z: <br>";
print_r($nama);
echo "<br>";

sort($nama);
echo "sesudah sort a-z: <br>";
print_r($nama);
echo "<br>";


// 3. Array asosiatif
$mahasiswa = [
    "Nama" => "Alok",
    "NIM" => "123456",
    "Jurusan" => "Informatika"
];
echo "Nama: " . $mahasiswa["Nama"] . "<br>";
echo "NIM: " . $mahasiswa["NIM"] . "<br>";
echo "Jurusan: " . $mahasiswa["Jurusan"] . "<br>";

?>



<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk Multidimensi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$produk = [
    [
        "nama" => "Laptop",
        "harga" => 15000000,
        "stok" => 50
    ],
    [
        "nama" => "HP",
        "harga" => 4500000,
        "stok" => 120
    ],
    [
        "nama" => "Keyboard",
        "harga" => 1200000,
        "stok" => 75
    ],
    [
        "nama" => "Mouse",
        "harga" => 350000,
        "stok" => 200
    ]
];

?>

<h4>TUGAS 4</h4>

<table>
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($produk as $produks) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($produks['nama']) . "</td>";
            $formatharga = "Rp " . number_format($produks['harga'], 0, ',', '.');
            echo "<td>" . htmlspecialchars($formatharga) . "</td>";
            echo "<td>" . htmlspecialchars($produks['stok']) . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>