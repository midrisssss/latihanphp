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
    <form action="data.php" method="post" class="container mx-auto w-3/4">
        <h2 class="font-bold mb-3 text-2xl">Login</h2>
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
        <div class="mt-5 flex items-center justify-end gap-3">
            <input type="submit" value="Save" name="submit"
                class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 rounded-xl px-8 py-2 text-white cursor-pointer font-semibold">
            <input type="reset" value="Reset"
                class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 rounded-xl px-8 py-2 text-white cursor-pointer font-semibold">
        </div>
    </form>
</body>

</html>