<nav>

<!--<ul style="flex-grow:1;text-align: center">-->
    <?php
    foreach ($products as $product): ?>

    <li style="font-size: 2em ;background: gainsboro ;  ;
    ">
        <a href="?product=<?php echo $product->proizvod_id; ?>">
        <br><?php echo  $product->pol.". ". $product->naziv?>
        </a>

        <br><?php echo $product->cijena ." km"?>
        <br><?php echo $product->velicina?>
        <br><?php echo $product->boja?>
        <br><?php echo $product->sifra?>


<?php endforeach; ?>

<!--</ul>-->


</nav>