
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pocetna</title>
    <link rel="stylesheet" href="http://localhost/aura1/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body >
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
            <li><a href="http://localhost/aura1/views/Main/home.html">Pocetna</a></li>
            <li><a href="http://localhost/aura1/muski.php">Muska kolekcija</a></li>
            <li><a href="http://localhost/aura1/zenski.php">Zenska kolekcija</a></li>
            <li><a href="http://localhost/aura1/size.php">Size plus</a></li>
            <li><a href="http://localhost/aura1/views/Main/getRegister.html">Registracija</a></li>
            <li><a href="http://localhost/aura1/views/Main/getLogin.html">Prijava</a></li>
        </ul>

    </nav>

</header>


<nav>

    <ul class="art">
        <?php
    foreach ($products as $product): ?>

        <li style="font-size: 2em ;background: green">
            <a href="?product=<?php echo $product->proizvod_id; ?>">
                <br><?php echo  $product->pol .". ". $product->naziv ?>
            </a>

            <br><?php echo $product->cijena ." km"?>
            <br><?php echo $product->velicina?>
            <br><?php echo $product->boja?>
            <br><?php echo $product->sifra?>


            <?php endforeach; ?>

    </ul>


</nav>