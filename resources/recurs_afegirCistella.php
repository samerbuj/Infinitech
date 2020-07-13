<?php

if(isset($_REQUEST['quantitat_producte'],$_GET['producteID'])) //Comprovem que s'han enviat dades en el formulari.
{
    $quantitat = $_REQUEST['quantitat_producte'];
    $producteID = $_GET['producteID'];

    require_once __DIR__ . '/../controller/buscar_infoProductes.php';

    foreach ($producteInfo as $producte):
        $nom = $producte['nom'];
        $preu = $producte['preu'];
        $imatge = $producte['imatge'];
    endforeach;

    if (isset($_SESSION['cistella'])) {   //Si esta creada la cistella
        $cistella = $_SESSION['cistella'];
        $existeix = 0;
        foreach ($cistella as $index => $producte):
            if($producte['id'] == $producteID){
                $cistella[$index]['quantitat'] = $quantitat;
                $existeix = 1;
            }
        endforeach;

        if ($existeix == 0){

            $nouProducte =  array(  'id'       => $producteID,
                                    'preu'     => $preu,
                                    'quantitat'=> $quantitat,
                                    'nom'      => $nom,
                                    'imatge'   => $imatge);

            array_push($cistella, $nouProducte); // posem el nou producte dins de la llista d'arrays "cistella"
        }

    } else {            //Si no està creada la cistella

        $cistella[] = array('id'       => $producteID,
                            'preu'     => $preu,
                            'quantitat'=> $quantitat,
                            'nom'      => $nom,
                            'imatge'   => $imatge);
    }

    $_SESSION['cistella'] = $cistella;
    unset($_SESSION['cistellaError']);
}

header('Location: /../index.php?accio=cistella');  /* et redirigeix a la pàgina de la vista de la cistella */

?>