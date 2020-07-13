<?php
    if (isset($_SESSION['cistella'])) {
        if (isset($_GET['idProd'])){
            $producteID = $_GET['idProd'];
            $cistella = $_SESSION['cistella'];
            $index = 0;
            foreach ($cistella as $producte) {
                if ($producte['id'] == $producteID) {
                    unset($_SESSION['cistella'][$index]);
                }
                $index++;
            }

            if ($index == 1){ // Només hem passat un cop pel foreach, vol dir que només hi havia un producte i s'ha d'eliminar la cistella
                unset($_SESSION['cistella']);
            }

        }
    }

    header('Location: /../index.php?accio=cistella');  /* et redirigeix a la pàgina de la cistella */
    exit;
?>