<?php
    if (isset($_SESSION['cistella'])) {
        unset($_SESSION['cistella']);  /*  "unset" --> treu valor a la variable "cistella" de la $_SESSION  */
    }

    header('Location: /../index.php?accio=cistella');  /* et redirigeix a la pàgina de la cistella */
    exit;
?>