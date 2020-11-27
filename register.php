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
    <div class="py-5 text-center">
        <h2>Rejestracja</h2>
        <p class="lead">Zarejestruj sie na najlepsze forum o majterkowaniu!</p>
    </div>

    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Podaj dane użytkownika</h4>
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Imię</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Imię" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Nazwisko</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Nazwisko" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Nazwa użytkownika</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Nazwa użtykownka" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="nazwa@example.com" required>
                </div>

                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rodo">
                    <label class="custom-control-label" for="rodo">Akceptuję warunki RODO</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="regulamin">
                    <label class="custom-control-label" for="regulamin">Akceptuje regulamin</label>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Rejestruj</button>
            </form>
        </div>
    </div>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Wszytskie prawa zastrzeżone Orzelski &copy</span>
        </div>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>