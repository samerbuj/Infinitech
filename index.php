<?php
    $accio = '';
    if (isset($_GET['accio'])){
         $accio = $_GET['accio'];
    }
    error_reporting(E_ALL);
    session_start();
    $filesAbsolutePath = '/home/TDIW/tdiw-f8/public_html/imatges/usuaris/';

    switch ($accio) {
        case 'editar-perfil':
            include __DIR__ . '/resources/recurs_editarPerfil.php';
            break;

        case 'actualitzar-perfil':
            include __DIR__ . '/resources/recurs_helperEditarPerfil.php';
            break;

        case 'perfil-usuari':
            include __DIR__ . '/resources/recurs_perfilUsuari.php';
            break;

        case 'llistar-comandes':
            include __DIR__ . '/resources/recurs_llistarComandes.php';
            break;

        case 'efectuar-compra':
            include __DIR__ . '/resources/recurs_efectuarCompra.php';
            break;

        case 'confirmacio-compra':
            include __DIR__ . '/resources/recurs_confirmarCompra.php';
            break;

        case 'cistella':
            include __DIR__ . '/resources/recurs_cistella.php';
            break;

        case 'afegir-cistella':
            include __DIR__ . '/resources/recurs_afegirCistella.php';
            break;

        case 'buidar-cistella':
            include __DIR__ . '/resources/recurs_buidarCistella.php';
            break;

        case 'eliminar-producte':
            include __DIR__ . '/resources/recurs_eliminarProducte.php';
            break;

        case 'modificar-producte':
            include __DIR__ . '/resources/recurs_modificarProducte.php';
            break;

        case 'logout':
            include __DIR__ . '/resources/recurs_logout.php';
            break;

        case 'llistar-categories':
            include __DIR__ . '/resources/recurs_llistar_categories.php';
            break;

        case 'categoria_id':
            include __DIR__ . '/resources/recurs_categoria_ID.php';
            break;

        case 'producte_id':
            include __DIR__ . '/resources/recurs_producte_ID.php';
            break;

        case 'llistar-productes':
            include __DIR__ . '/resources/recurs_llistar_productes.php';
            break;

        case 'llistar-promocions':
            include __DIR__ . '/resources/recurs_llistar_promocions.php';
            break;

        case 'enviar-contacte':
            include __DIR__ . '/resources/recurs_enviarContacte.php';
            break;

        case 'contacte':
            include __DIR__ . '/resources/recurs_contacte.php';
            break;

        case 'inici-sessio':
            include __DIR__ . '/views/inici-sessio.php';
            break;

        case 'registre':
            include __DIR__ . '/registre.php';
            break;

        default:
            include __DIR__ . '/resources/recurs_home.php';
            break;

    }

?>