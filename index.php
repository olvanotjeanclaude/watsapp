<?php

require_once "./functions/db.php";

require_once "./functions/classUsers.php";
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watsapp Business App</title>
    <meta name="robots" content="noindex, nofollow" />
    <link href="/public/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/style.css?v=1">
    <script src="/public/bootstrap.bundle.min.js"></script>
    <script src="/public/jquery.min.js"></script>
    <script src="/public/script.js?v=1"></script>
</head>

<body>
    <nav class="container text-white bg-dark d-flex justify-content-between align-items-center py-2">
        <div class="d-flex gap-3">
            <a class="menu nav-link" onclick="fetchData('contacts.php')" href="javascript:void(0)">Anasayfa</a>
            <a class="menu nav-link" onclick="fetchData('template.php')" href="javascript:void(0)">Mesaj Sablonu</a>
        </div>

        <button class="btn  btn-light" onclick="location.href='<?= 'login.php' ?>'">
            Çıkış Yap
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
            </svg>
        </button>
    </nav>


    <main class="container" id="root">

    </main>


    <script>
        $(document).ready(function() {
            fetchData('contacts.php');
        })
    </script>
</body>

</html>