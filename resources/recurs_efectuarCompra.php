<?php
    if(isset($_SESSION['user_id'])){  //Si l'usuari ha fet login
        if (isset($_SESSION['cistella'])) {    //Comprovem que hi hagi productes a la cistella

              require_once __DIR__ . '/../controller/efectuar_compra.php';
              if($afegirCompraBD == 1){
                  unset($_SESSION['cistella']);  /*  "unset" --> treu valor a la variable "cistella" de la $_SESSION  */
                  header('Location: /../index.php?accio=confirmacio-compra');  /* et redirigeix a la pàgina de Login */
              }
        } else{
            $_SESSION['cistellaError'] = "Error, la cistella està buida.";
            header('Location: /../index.php?accio=cistella');
        }
    } else{
        $_SESSION['cistellaError'] = "Error, no s'ha iniciat sessió.";
        header('Location: /../index.php?accio=cistella');
    }
?>