<link rel="stylesheet" href="style.css">

<div class="cartBar" onclick="location.href='/index.php?accio=cistella'">
    <div class="cartBarCont">
        <?php
        // suma del preu dels productes comprats
        $total = 0;
        $numProd = 0;

        if (isset($_SESSION['cistella'])){ // si està definida la variable de sessió
            $total = 0;
            $dades = $_SESSION['cistella']; // guardem la sessió en un array de productes (llista)

            foreach ($dades as $producte):
                $total = $total + $producte['preu'] * $producte['quantitat'];
                $numProd += $producte['quantitat'];
            endforeach;

            echo "<div id='numProdCist'><h2>Número de productes: ".$numProd. "</h2></div> <div id='lastProdCist'><h2>Últim producte seleccionat: ".$producte['nom']."</h2></div> <div id='totalCist'><h2>Preu total: " .$total. " €</h2></div>";
        } // si no està definida la variable de sessió
        else{
            echo "<h2>La cistella està buida</h2>";
        }
        // calculem la suma total de totes les unitats de tots els productes

        ?>
    </div>
</div>