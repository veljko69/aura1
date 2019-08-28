<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prijava</title>
    <link type="text/css" rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header class="site-header">
    <div class="banners">
        <a><img src="http://localhost/aura1/assets/img/logo.png" alt="aura logo"></a>
    </div>
    <div class="social-icons">
        <a class="fa fa-facebook"></a>
        <a class="fa fa-youtube"></a>
        <i class="fa fa-instagram"></i>
        <a><i class="fa fa-twitter"></i></a>

    </div>
    <div class="search-box">
        <form method="post" action="search">
            <input type="text" name="q" placeholder="Unesite kljucne rijeci">
            <button type="submit">Search</button>

        </form>


    </div>
    <nav id="main-menu">
        <ul>
            <li><a href="http://localhost/aura1/views/Main/home.html">Pocetna</a></li>
            <li><a href="http://localhost/aura1/muski.php">Muska kolekcija</a></li>
            <li><a href="http://localhost/aura1/zenski.php">Zenska kolekcija</a></li>
            <li><a href="http://localhost/aura1/size.php">Size plus</a></li>
            <li><a href="http://localhost/aura1/views/Main/getRegister.html">Registracija</a></li>
            <li><a href="http://localhost/aura1/views/Main/getLogin.html">Prijava</a></li>
        </ul>

    </nav>

</header>

<div class="registracija">

    <form action="../../log.php" method="post">


        <div>

            <label for="input_username" >Username:</label>
            <input type="text" id="input_username" name="log_username" required class="form"
                   placeholder="Unesite korisnicko ime">
        </div>
        <br>

        <div>
            <label for="input_password" >Password:</label>
            <input type="text" id="input_password" name="log_password" required class="form"
                   placeholder="Unesite lozinku">
        </div>

        <br>

        <div>
            <button type="submit" class="form" id="button">
                Login
            </button>
        </div>

    </form>



</div>

</body>
</html>