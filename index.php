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

        .my-img {
            height: 50vh;
            width: 100%;
            background-attachment: fixed;
            background-position: 50.00% 100.00%;
        }

        .main-title {
            color: #000000;
            text-align: center;
        }

        .main-title h1 {
            font-size: 4rem;
            letter-spacing: 3px;
            text-shadow: 2px 2px #7f7373;
        }

        .card img {
            height: 217.5px;
        }

        body {
            background-image: url("assets/img/patern.jpg");
            background-attachment: fixed;
        }
    </style>
</head>
<body>

<?php include 'nav.php'; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="bd-placeholder-img my-img"
                 style="background-image: url('https://pl.nowystyl.com/media/filer_public/59/b9/59b9a29e-e947-458e-bddb-451ae490a55a/tradycja-i-mezalianse-drewno_10-6-11.jpg');">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Forum Majsterkowicza</h1>
                        <p>Dołącz do naszej społeczności !</p>
                        <p><a class="btn btn-lg btn-primary" href="register.php">Utwórz konto</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bd-placeholder-img my-img"
                 style="background-image: url('https://data.1freewallpapers.com/download/wood-texture.jpg');">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Zaloguj sie</h1>
                        <p>Aby móc dodawać, komentować lub udostepniać projekty</p>
                        <p><a class="btn btn-lg btn-primary" href="login.php">Zaloguj się</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
<br>
<br>
<div class="main-title">
    <h1>Nasze projekty</h1>
</div>
<br>
<div class="container">
    <div class="row">
        <?php
        foreach ($podstrony as $plik => $kafelek) {
        ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="<?php echo $plik ?>" title="<?php echo $kafelek['nazwa'] ?>">
                        <img class="bd-placeholder-img card-img-top"
                             src="<?php echo $kafelek['img']?>"
                             alt="">
                    </a>
                    <div class="card-body">
                        <p class="card-text"><?php echo $kafelek['nazwa'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="<?php echo $plik ?>" class="btn btn-sm btn-outline-secondary">Zobacz</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">Wszytskie prawa zastrzeżone Orzelski &copy</span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>