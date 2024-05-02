<?php
ini_set('display_errors', 1);
ini_set('default_charset', 'UTF-8');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş | Watsapp Business</title>
    <meta name="robots" content="noindex, nofollow" />
    <link href="/public/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6  d-flex align-items-center" style="height: 100vh;">
                <div class="card w-100">
                    <div class="card-body">
                        <center>
                            <img class="mb-2" src="/public/mydata.jpg" alt="">
                            <h4 class="card-title">Watsapp Sisteme Giriş</h4>
                        </center>
                        <small id="error" class="text-danger"></small>
                       
                        <form method="post" autocomplete="off" action="<?= "getUserLoginInfo.php" ?>">
                            <div class="form-group mb-3">
                                <label for="usercode" class="mb-1">Kullanıcı Adı</label>
                                <input type="text" class="form-control" id="usercode" name="usercode">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="mb-1">Şifre</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-success float-end">Giriş</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/public/bootstrap.bundle.min.js"></script>
    <script src="/public/jquery.min.js"></script>
    <script src="/public/script.js"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(e) {
                e.preventDefault();
                $("#error").text("");

                const user = {
                    password: $("#password").val(),
                    usercode: $("#usercode").val()
                }

                const url = $(this).attr("action");

                if(user.usercode=="" && user.password==""){
                    $("#error").text("Kullanıcı Kodu ve şifre Giriniz")
                    return;
                }

                if (user.usercode == "") {
                    $("#error").text("Kullanıcı Kodu Giriniz")
                    return;
                }

                if (user.password.length < 3) {
                    $("#error").text('Kullanıcı Şifre Giriniz');
                    return;
                }

                fetchData(url, null, user, {
                    success(data) {
                        const json = JSON.parse(data)??null;

                        if (json?.success) {
                            window.location.replace("index.php");
                        }

                        if (json?.error) {
                            $("#error").text(json.error);
                        }
                    }
                })
            })
        })
    </script>
</body>

</html>