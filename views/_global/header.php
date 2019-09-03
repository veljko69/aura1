<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php
        switch ($url) {
            case "home":
                echo "Pocetna stranica";
                break;
            case "muski":
                echo "Muska kolekcija";
                break;

            case "zenski":
                echo "Zenska kolekcija";
                break;

            case "sizeplus":
                echo "Size plus";
                break;
            case "getregister":
                echo "Registracija korisnika";
                break;
            case "getlogin":
                echo "Prijava korisnika";
                break;
            default:
                echo "Pocetna stranica";
        }
        ?></title>
    <link rel="stylesheet" href="http://localhost/aura1/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header class="site-header">
    <div class="banners">
        <a><img src="http://localhost/aura1/assets/img/logo.png" alt="aura logo"></a>
    </div>
    <div class="social-icons">
        <a class="fa fa-facebook" style="font-size: 20px"></a>
        <a class="fa fa-youtube" style="font-size: 20px"></a>
        <i class="fa fa-instagram" style="font-size: 20px"></i>
        <a><i class="fa fa-twitter" style="font-size: 20px"></i></a>

    </div>
    <div class="search-box">
        <form method="post" action="search">
            <input type="text" name="q" placeholder="Unesite kljucne rijeci">
            <button type="submit">Search</button>

        </form>


    </div>
    <nav id="main-menu">
        <ul>
            <li><a href="http://localhost/aura1/home">Pocetna</a></li>
            <li><a href="http://localhost/aura1/muski">Muska kolekcija</a></li>
            <li><a href="http://localhost/aura1/zenski">Zenska kolekcija</a></li>
            <li><a href="http://localhost/aura1/sizeplus">Size plus</a></li>
            <li><a href="http://localhost/aura1/getregister">Registracija</a></li>
            <li><a href="http://localhost/aura1/getlogin">Prijava</a></li>
        </ul>

</header>
</body>
</html>