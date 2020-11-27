<?php
$podstrony = [
    'page.php?page=ogrodek' => [
        'nazwa' => 'Domowy ogródek',
        'img' => 'assets/img/ogrodek.jpg'
    ],
    'page.php?page=hamak' => [
        'nazwa' => 'Hamak',
        'img' => 'assets/img/hamak.jpg'
    ],
    'page.php?page=drewutnia' => [
        'nazwa' => 'Drewutnia',
        'img' => 'assets/img/drewutnia.jpeg'
    ],
    'page.php?page=stolik' => [
        'nazwa' => 'Stolik',
        'img' => 'assets/img/stolik.jpg'
    ],
    'page.php?page=basen' => [
        'nazwa' => 'Basen Rozporowy',
        'img' => 'assets/img/basen.jpg'
    ],
    'page.php?page=kanapa' => [
        'nazwa' => 'Kanapa',
        'img' => 'assets/img/kanapa.jpg'
    ],
];
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warsztat Majsterkowicza</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            background-image: url("assets/img/patern.jpg");
            background-attachment: fixed;
        }
    </style>
</head>
<body>

<?php include 'nav.php'; ?>

<div class="container">
    <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Zaloguj sie</h1>
        <label for="inputEmail" class="sr-only">Adres email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Adres email" required autofocus>
        <label for="inputPassword" class="sr-only">Hasło</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Hasło" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Zapamiętaj mnie
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj</button>
    </form>

</div>
<!---->
<!--<footer class="footer mt-auto py-3">-->
<!--    <div class="container">-->
<!--        <span class="text-muted">Wszytskie prawa zastrzeżone Orzelski &copy</span>-->
<!--    </div>-->
<!--</footer>-->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>