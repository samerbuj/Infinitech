<?php
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/comandes.php';
    require_once __DIR__ . '/../model/liniaComanda.php';
    require_once __DIR__ . '/../model/infoProducte.php';

    $usuari_id = $_SESSION['user_id'];
    $comandes = getComandes($bd_connexio,$usuari_id); // Aquesta crida és al model

    foreach ($comandes as $comanda):
        $comandaID = $comanda['id'];
        $PreuComanda = $comanda['preu_total'];
        $liniesComanda = getLiniesComanda($bd_connexio,$comandaID); // Aquesta crida és al model



        foreach ($liniesComanda as $liniaComanda): //passar d'array a string
            $producteID  = ($liniaComanda['producte_id']);
            $quantitat  = ($liniaComanda['quantitat']);
            $preuTotal  = ($liniaComanda['preu_total']);

            $producteInfo = getInfoProducte($bd_connexio, $producteID); // Aquesta crida és al model

            foreach ($producteInfo as $producte):
                $nom = $producte['nom'];
                $preu = $producte['preu'];
                $imatge = $producte['imatge'];
            endforeach;


            if(isset($llistaProductes))
            {
                $nouProducte =  array(  'nom'        => $nom,
                                        'quantitat'  => $quantitat,
                                        'preuTotal'  => $preuTotal,
                                        'preu'       => $preu,
                                        'imatge'     => $imatge);

                array_push($llistaProductes, $nouProducte); // posem el nou producte dins de la llista de productes


            }else{
                $llistaProductes[]= array('nom'        => $nom,
                                          'quantitat'  => $quantitat,
                                          'preuTotal'  => $preuTotal,
                                          'preu'       => $preu,
                                          'imatge'     => $imatge) ;
            }


        endforeach;

        if(isset($llistaComandes))
        {
            $nouProducte =  array(  'PreuComanda'    => $PreuComanda,
                                    'liniesComanda'  => $llistaProductes);

            array_push($llistaComandes, $nouProducte); // posem el nou producte dins de la llista de productes

        }else{
            $llistaComandes[]= array('PreuComanda'    => $PreuComanda,
                                     'liniesComanda'  => $llistaProductes) ;
        }
        unset($llistaProductes);

    endforeach;

    include __DIR__ . '/../views/llistar_comandes.php';

?>