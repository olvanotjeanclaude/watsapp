<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watsapp Business App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/public/script.js"></script>
</head>

<body>
    <nav class="container text-white bg-dark">
        <ul class="d-flex p-3 gap-3">
            <li class="menu">
                <a class="nav-link" onclick="fetchData('contacts.php')" href="javascript:void(0)">Anasayfa</a>
            </li>
            <li class="menu">
                <a class="nav-link" onclick="fetchData('template.php')" href="javascript:void(0)">Mesaj Şablonu</a>
            </li>

        </ul>
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