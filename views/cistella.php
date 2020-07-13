
    <section>
        <?php
        // suma del preu dels productes comprats
        $total = 0;

        if (isset($_SESSION['cistella'])){ // si està definida la variable de sessió
            $total = 0;
            // guardem la sessió en un array de productes
            $dades = $_SESSION['cistella'];

            for ($i=0; $i < count($dades); $i++) {
                ?>
                <!-- mostrem els productes comprats i les seves respectives quantitats-->
                <div class="producte">
                        <img src="./productes/<?php echo($dades[$i]['imatge']) ?>" alt=""><br>
                        <span><?php echo($dades[$i]['nom']) ?></span><br>
                        <span>Preu:$<?php echo($dades[$i]['preu']) ?></span><br>
                        <span>Quantitat:
                            <!-- posem el data-attribute preu i id -->
                            <!-- posem una classe quantitat perquè iterant i no pot fer servir una id ( per a que jquery la reconegui) -->
                                    <input type="text" value="<?php echo($dades[$i]['quantitat'])?>" size='3' data-preu="<?php echo($dades[$i]['preu']) ?>" data-id="<?php echo($dades[$i]['id']) ?>" class="quantitat" >
                                </span><br>
                        <span class="subtotal">Total Productes:<?php echo($dades[$i]['quantitat']*$dades[$i]['preu'])?></span>
                </div>

                <?php
                // sumem els preus de les unitats comprades
                    $total = $total + $dades[$i]['preu'] * $dades[$i]['quantitat'];
            }

        } // si no està definida la variable de sessió
        else{
            echo "<h2>La cistella està buida</h2>";
        }
        // calculem la suma total de totes les unitats de tots els productes
        echo "<h2 id='total'>Preu total:  " .$total. " €</h2><br>";
        ?>
        <div>
            <input type="submit" name="efectuarCompra" value="Continuar">
        </div>
        <br>

        <!-- tornem a l'index -->
       <a href="/resources/recurs_llistar_productes.php">Tornar al catàleg</a>
    </section>

