<?php
if (isset($_POST["submit"])) {
    $judul = $_POST["judul"];
    $kategori = $_POST["kategori"];
    $date = date_create($_POST["tglpinjam"] . "-" . $_POST["monthpinjam"] . "-" . $_POST["yearpinjam"]);
    $lamaPinjam = $_POST["lamapinjam"];
    $namaAnggota = $_POST["anggota"];
    $namaPetugas = $_POST["petugas"];
    $biayaSewa = biayaSewa($lamaPinjam, $kategori);
} else {
    header("location : penyewaan.php");
}

function biayaSewa($lamaPinjam, $kategori)
{
    $harga = 5000;
    if ($kategori === "Karya Ilmiah") {
        $harga = 10000;
    }
    return $lamaPinjam * $harga;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full p-5">
    <div class="container">
        <h1 class="font-bold text-xl">Resume Penyewaan</h1>
        <p><span class="font-semibold">Judul Buku :</span>
            <?= $judul ?>
        </p>
        <p><span class="font-semibold">Kategori Buku :</span>
            <?= $kategori ?>
        </p>
        <p><span class="font-semibold">Tanggal Pinjam :</span>
            <?= date_format($date, "d F Y") ?>
        </p>
        <p><span class="font-semibold">Lama Pinjam :</span>
            <?= $lamaPinjam ?>
        </p>
        <p><span class="font-semibold">Biaya Sewa :</span>
            Rp. <?= $biayaSewa ?>
        </p>
        <p><span class="font-semibold">Nama Anggota :</span>
            <?= $namaAnggota ?>
        </p>
        <p><span class="font-semibold">Nama Petugas :</span>
            <?= $namaPetugas ?>
        </p>
        <a href="penyewaan.php" class="underline decoration-solid">kembali</a>
    </div>
</body>

</html>