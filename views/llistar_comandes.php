<div id="Contingut">
    <ul>
        <?php
            foreach ($llistaComandes as $comanda): ?>

            <li>
               <ul>
                  <?php
                        foreach ($comanda['liniesComanda'] as $prodComanda):
                  ?>
                    <li>
                        <h3> <?php  echo  $prodComanda['nom']  ?></h3>
                        <p><img src="/imatges/<?php  echo $prodComanda['imatge']?>" alt="<?php echo $prodComanda['imatge'] ?>"> </p>
                        <p> Preu: <?php echo $prodComanda['preu']  ?>€ </p>
                        <p> Quantitat: <?php echo $prodComanda['quantitat'] ?> </p>
                    </li><br>
                  <?php
                        endforeach;
                  ?>
                </ul>
                <p><strong>Total: <?php echo $comanda['PreuComanda'] ?>€</strong></p>
            <br>
            <hr>
            </li>
        <?php
            endforeach;
        ?>
    </ul>
</div>