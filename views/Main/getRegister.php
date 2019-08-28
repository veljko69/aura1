<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registracija</title>
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


<div class="reg">
<div class="registracija">

    <form action="../../reg.php" method="post">

    <div>
        <label for="input_email" >E-mail:</label>
        <input type="email" id="input_email" name="reg_email" required class="form"
        placeholder="Unesite svoju E-mail adresu o ovo polje">
    </div>
<br>
        <div>

            <label for="input_forename" >Forename:</label>
            <input type="text" id="input_forename" name="reg_forename" required class="form"
                   placeholder="Unesite svoje ime">
        </div>
        <br>

        <div>

            <label for="input_surname" >Surname:</label>
            <input type="text" id="input_surname" name="reg_surname" required class="form"
                   placeholder="Unesite svoje prezime ">
        </div>
        <br>

        <div>

        <label for="input_username" >Username:</label>
        <input type="text" id="input_username" name="reg_username" required class="form"
               placeholder="Unesite zeljeno korisnicko ime">
    </div>
        <br>

    <div>
        <label for="input_password_1" >Password:</label>
        <input type="text" id="input_password_1" name="reg_password1" required class="form"
               placeholder="Unesite zeljenu lozinku">
    </div>
        <br>

    <div>

        <label for="input_password_2" >Repeat your password:</label>
        <input type="text" id="input_password_2" name="reg_password2" required class="form"
               placeholder="Unesite zeljenu lozinku jos jednom">

    </div>
        <br>

        <div>
         <button type="submit" class="form" id="button">
             Register
         </button>
     </div>

    </form>



</div>
</div>
</body>
</html>