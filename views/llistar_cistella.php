<?php
    // suma del preu dels productes comprats
    $total = 0;

    if (isset($_SESSION['cistella'])){ // si està definida la variable de sessió
        $total = 0;
        $dades = $_SESSION['cistella']; // guardem la sessió en un array de productes (llista)

        foreach ($dades as $producte):
            ?>
            <!-- mostrem els productes comprats i les seves respectives quantitats-->
            <div class="producte">
                <img src="./imatges/<?php echo($producte['imatge']) ?>" alt=""><br>
                <span>Nom: <?php echo($producte['nom']) ?></span><br>
                <span>Preu: <?php echo($producte['preu']) ?>€</span><br>
                <span>Quantitat:
                    <!-- posem el data-attribute preu i id -->
                    <!-- posem una classe quantitat perquè iterant i no pot fer servir una id ( per a que jquery la reconegui) -->
                    <form method="post" action="index.php?accio=modificar-producte">
                        <input type="text" name="quantitat" value="<?php echo($producte['quantitat'])?>" size='3'>
                        <input type="hidden" name="idProd" value="<?php echo($producte['id']) ?>" />
                    </form>
                </span><br>
                <span class="subtotal">Total Productes: <?php echo($producte['quantitat']*$producte['preu'])?></span>

                <form method="post" action="index.php?accio=eliminar-producte&idProd=<?php echo $producte['id']?>">
                    <input type="submit" name="eliminarProducte" value="Eliminar Producte">
                </form>
            </div>

            <?php
            // sumem els preus de les unitats comprades
            $total = $total + $producte['preu'] * $producte['quantitat'];
        endforeach;

    } // si no està definida la variable de sessió
    else{
        echo "<h2>La cistella està buida</h2>";
    }
    // calculem la suma total de totes les unitats de tots els productes
    echo "<h2 id='total'>Preu total:  " .$total. " €</h2><br>";
?>