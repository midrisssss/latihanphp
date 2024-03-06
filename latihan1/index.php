<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Form Data Diri</title>
    <style>
        label:not(.radio-label):after {
            content: ":";
            width: 300px;
        }
    </style>
</head>

<body class="p-5">
    <h1 class="text-center font-bold mb-4 text-4xl">Form Data Diri</h1>
    <form action="data.php" method="post" class="container mx-auto w-3/4">
        <h2 class="font-bold mb-3 text-2xl">Sign Up</h2>
        <div class="mb-3 flex items-center justify-between">
            <label for="name" class="font-semibold">Name </label>
            <input class="border-4 border-blue-500 focus:outline-none focus:border-black rounded-xl px-2 py-1 w-3/4"
                type="text" name="name" id="name">
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="email" class="font-semibold">Email </label>
            <input class="border-4 border-blue-500  focus:outline-none focus:border-black rounded-xl px-2 py-1 w-3/4"
                type="email" name="email" id="email">
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="password" class="font-semibold">Password </label>
            <input class="border-4 border-blue-500  focus:outline-none focus:border-black  rounded-xl px-2 py-1 w-3/4"
                type="password" id="password" name="password">
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="tgllahir" class="font-semibold">Tanggal Lahir </label>
            <input class="border-4 border-blue-500  focus:outline-none focus:border-black  rounded-xl px-2 py-1 w-3/4"
                type="date" name="tgllahir" id="tgllahir">
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="prodi" class="font-semibold">Program Studi </label>
            <select name="prodi" id="prodi"
                class="border-4 border-blue-500   focus:outline-none focus:border-black rounded-xl px-2 py-1 cursor-pointer w-3/4">
                <option value="" selected>Select Prodi</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Ilmu Komputer">Ilmu Komputer</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Psikologi">Psikologi</option>
                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                <option value="Sastra Inggris">Sastra Inggris</option>
            </select>
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="alamat" class="font-semibold">Alamat </label>
            <textarea
                class="border-4 border-blue-500   focus:outline-none focus:border-black rounded-xl px-2 py-1 w-3/4"
                name="alamat" id="alamat" cols="30" rows="3"></textarea>
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="phone" class="font-semibold">Handphone </label>
            <input class="border-4 border-blue-500  focus:outline-none focus:border-black  rounded-xl px-2 py-1 w-3/4"
                type="text" name="phone" id="phone">
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="" class="font-semibold">Jenis Kelamin </label>
            <div class=" w-3/4">
                <label for="laki" class="radio-label cursor-pointer mr-3"><input type="radio" name="kelamin" id="laki"
                        value="Laki-laki" checked> Laki-laki</label>
                <label for="cewe" class="radio-label cursor-pointer"><input type="radio" name="kelamin" id="cewe"
                        value="Perempuan"> Perempuan</label>
            </div>
        </div>
        <div class="mt-5 flex items-center justify-end gap-3">
            <input type="submit" value="Save" name="submit"
                class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 rounded-xl px-8 py-2 text-white cursor-pointer font-semibold">
            <input type="reset" value="Reset"
                class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 rounded-xl px-8 py-2 text-white cursor-pointer font-semibold">
        </div>
    </form>
</body>

</html>