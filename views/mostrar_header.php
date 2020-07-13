<link rel="stylesheet" href="style.css">

<header>
    <div class="headerPrincipal">
        <a href="index.php">
            <img id="Logo" src="imatges/LogoBig.png" alt="Logo" >
        </a>

        <form method="get" class="Cercador" action="cerca.php"><input id="Buscador" type="text" name="cerca" placeholder="Buscar..."></form>

        <a href="/index.php?accio=cistella"><img id="Cart" src="imatges/cart.png" alt="Cart"></a>

<!-- menu navegació -->
        <div id="menuOpcions">
            <nav id="opcions">
                <a href="index.php?accio=llistar-categories" class ="aOrange">CATEGORIES</a>
                <a href="index.php?accio=llistar-productes" class ="aOrange">PRODUCTES</a>
                <a href="index.php?accio=llistar-promocions" class ="aOrange">PROMOCIONS</a>
                <a href="index.php?accio=contacte" class ="aOrange">CONTACTE</a>
            </nav>
        </div>

<!-- menú usuari -->
        <img class="MenuIMG" id="MenuBar" src="imatges/menu.png">
        <img class="MenuIMG" id="MenuCross" src="imatges/cross.png">

        <div id="menuUsuari">
            <?php if(isset($_SESSION['user_id'])){?>
                <nav class="menuUser">
                    <ul>
                        <li class="elementMenu"><a href="index.php?accio=perfil-usuari">El meu compte</a></li>
                        <li class="elementMenu"><a href="index.php?accio=llistar-comandes">Les meves compres</a></li>
                        <li class="elementMenu"><a href="index.php?accio=logout">Tancar sessió</a></li>
                    </ul>
                </nav>
            <?php }
            else{ ?>
                <nav class="menuUser">
                    <ul>
                        <li class="elementMenu"><a href="index.php?accio=inici-sessio">Iniciar Sessió</a></li>
                        <li class="elementMenu"><a href="index.php?accio=registre">Registrar-se</a></li>
                    </ul>
                </nav>
            <?php   }  ?>
        </div>
    </div>

</header>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $('.elementMenu').hide(); // .hide() per començar amb el menú tancat
    $('#MenuCross').hide();

    $(document).ready(function() {
        $('.MenuIMG').click(function() {
            $('.elementMenu').toggle(150);  // tancar/obrir el menú quan es clica la imatge
            $('.MenuIMG').toggle(150);
        });
    });
</script>