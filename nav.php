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


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">mały-majsterkowicz.pl</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Strona gówna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Zaloguj się</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Zarejestruj się</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Zrób to sam!
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    foreach ($podstrony as $plik => $kafelek) {
                        ?>
                        <a class="dropdown-item" href="<?php echo $plik?>"><?php echo $kafelek['nazwa']?></a>
                    <?php } ?>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Znajdź" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Szukaj</button>
        </form>
    </div>
</nav>