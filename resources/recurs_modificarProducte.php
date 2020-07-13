<?php
if (isset($_SESSION['cistella'])) {
    if (isset($_REQUEST['idProd'], $_REQUEST['quantitat'])){
        $producteID =$_REQUEST['idProd'];
        $quantitat = $_REQUEST['quantitat'];
        $cistella = $_SESSION['cistella'];
        if ($quantitat != 0 ) {
            foreach ($cistella as $index => $producte) {
                if ($producte['id'] == $producteID) {
                    $_SESSION['cistella'][$index]['quantitat'] = $quantitat;

                }
            }
        }
    }
}

header('Location: /../index.php?accio=cistella');  /* et redirigeix a la pàgina de la cistella */
exit;
?>