<?php
require_once 'views/_global/header.php';
?>


<nav>

    <ul class="art">
        <?php
        $products=[];
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
<div class="z-pocetna">


    <img src="http://localhost/aura1/assets/img/people-2563491_1280.jpg" height="850" width="1200"/>
    </div>
<div class="m-pocetna">

    <img src="http://localhost/aura1/assets/img/black-and-white-1283231_1280.jpg" height="850" width="1200"/></div>
</body>
</html>
