<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $tgllahir = $_POST["tgllahir"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];
    $phone = $_POST["phone"];
    $kelamin = $_POST["kelamin"];
} else {
    header("location: index.php");
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
        <h1 class="font-bold text-xl">Data anda sebagai berikut</h1>
        <p>Nama :
            <?= $name ?>
        </p>
        <p>Email :
            <?= $email ?>
        </p>
        <p>Password :
            <?= $password ?>
        </p>
        <p>tanggal Lahir :
            <?= $tgllahir ?>
        </p>
        <p>Program Studi :
            <?= $prodi ?>
        </p>
        <p>Alamat :
            <?= $alamat ?>
        </p>
        <p>Handphone :
            <?= $phone ?>
        </p>
        <p>Jenis Kelamin :
            <?= $kelamin ?>
        </p>
    </div>
    <script>
        alert("Login berhasil!");
        window.location.href = "login.php";
    </script>
</body>

</html>