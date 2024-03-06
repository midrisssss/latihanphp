<?php

$datas = array(
    "kategori" => array("Fiksi", "Non Fiksi", "Karya Ilmiah", "Majalah"),
    "date" => array(
        "date" => array(1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31),
        "month" => array(
            1 => "Januari",
            2 => "Februari",
            3 => "Maret",
            4 => "April",
            5 => "Mei",
            6 => "Juni",
            7 => "Juli",
            8 => "Agustus",
            9 => "September",
            10 => "Oktober",
            11 => "November",
            12 => "Desember"
        ),
        "year" => array(2020, 2019, 2018),
    ),
    "petugas" => array("Abbas1", "Abbas2", "Abbas3"),
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penyewaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-5">
    <form action="penyewaanpost.php" method="post" class="container w-3/4 mx-auto">
        <h1 class="font-bold text-center mb-5 text-4xl">Form Penyewaan</h1>
        <div class="mb-3 flex items-center justify-between">
            <label for="judul" class="font-semibold w-1/4">Judul Buku :</label>
            <input class="border-2 border-blue-500 focus:outline-none focus:border-black rounded-xl px-3 py-2 w-3/4"
                type="text" name="judul" id="judul">
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="kategori" class="font-semibold w-1/4">Kategori Buku :</label>
            <select name="kategori" id="kategori"
                class="border-2 border-blue-500 focus:outline-none focus:border-black rounded-xl px-3 py-2 cursor-pointer w-3/4">
                <?php foreach ($datas["kategori"] as $data) { ?>
                    <option value="<?= $data ?>">
                        <?= $data ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="tglpinjam" class="font-semibold w-1/4">Tanggal Pinjam :</label>
            <div class="w-3/4">
                <select name="tglpinjam"
                    class="w-1/4 border-2 border-blue-500 focus:outline-none focus:border-black rounded-xl px-3 py-2 cursor-pointer">
                    <?php foreach ($datas["date"]["date"] as $data) { ?>
                        <option value="<?= $data ?>">
                            <?= $data ?>
                        </option>
                    <?php } ?>
                </select>
                <select name="monthpinjam"
                    class="w-1/4 border-2 border-blue-500 focus:outline-none focus:border-black rounded-xl px-3 py-2 cursor-pointer">
                    <?php foreach ($datas["date"]["month"] as $key => $value) { ?>
                        <option value="<?= $key ?>">
                            <?= $value ?>
                        </option>
                    <?php } ?>
                </select>
                <select name="yearpinjam"
                    class="w-1/4 border-2 border-blue-500 focus:outline-none focus:border-black rounded-xl px-3 py-2 cursor-pointer">
                    <?php foreach ($datas["date"]["year"] as $data) { ?>
                        <option value="<?= $data ?>">
                            <?= $data ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="mb-3 flex items-center justify-start">
            <label for="lamapinjam" class="font-semibold w-1/4">Lama Pinjam :</label>
            <input class="border-2 border-blue-500 focus:outline-none focus:border-black rounded-xl px-3 py-2 w-2/4"
                type="number" name="lamapinjam" id="pinjam">
            <p class="mx-2">Hari</p>
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="anggota" class="font-semibold w-1/4">Nama Anggota :</label>
            <input class="border-2 border-blue-500 focus:outline-none focus:border-black rounded-xl px-3 py-2 w-3/4"
                type="text" name="anggota" id="anggota">
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="petugas" class="font-semibold w-1/4">Nama Petugas :</label>
            <select name="petugas" id="petugas"
                class="border-2 border-blue-500 focus:outline-none focus:border-black rounded-xl px-3 py-2 cursor-pointer w-3/4">
                <?php foreach ($datas["petugas"] as $data) { ?>
                    <option value="<?= $data ?>">
                        <?= $data ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3 flex items-center justify-end gap-3">
            <input class="bg-blue-500 text-white hover:bg-blue-600 rounded-xl px-5 py-2 cursor-pointer" type="submit"
                name="submit" id="submit" value="Simpan">
            <input class="bg-blue-500 text-white hover:bg-blue-600 rounded-xl px-5 py-2 cursor-pointer" type="reset"
                name="reset" id="reset" value="Batal">
        </div>
    </form>
</body>

</html>