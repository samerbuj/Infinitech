<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Información personal</title>
    <link href="imatges/nubeLogo.png" rel="shortcut icon" type="image/x-icon">
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="threeElem">
    <header>
        <?php include __DIR__ . "/views/mostrar_header.php" ?>
    </header>

    <div class="cercat">
        <img class="BackArrow" src="imatges/backArrow.png">
        <?php
        require_once __DIR__ . '/model/connectaBD.php';

        $cerca = '';
        if (isset($_GET['cerca'])){
            $cerca = $_GET['cerca'];
            //echo $cerca;
        }

        $sql = $bd_connexio->prepare('SELECT * FROM `producte` WHERE nom LIKE "%'.$cerca.'%"');
        $sql->execute();
        $cercaProd = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div id="Contingut">
            <?php if($cercaProd != null) {?>
                <div class="gridProd">
                    <?php foreach ($cercaProd as $producte): ?>
                        <div class="productes estilProds" idprod="<?php echo $producte['id']?>">
                            <div class="dataProd"><h3><?php echo  $producte['nom'] ?></h3>
                                <br>
                                <img src="/imatges/<?php echo $producte['imatge']?>" alt="<?php echo $producte['imatge']?>"></div>
                            <div class="infoProd"><?php echo $producte['descripcio'] ?>
                                <br>
                                <?php echo $producte['preu'] ?>€</div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php
            } else { ?>
                <div style="margin-left: 25px">
                    <h2>NO HEM TROBAT RES</h2><br>
                    <h4 style="cursor: pointer;" onclick="window.history.back()">Tornar enrere.</h4>
                </div>
            <?php }
            ?>
        </div>
    </div>

    <footer>
        <?php include __DIR__ . "/views/mostrar_footer.php" ?>
    </footer>
</div>

<?php include __DIR__ . '/views/mostrar_cartBar.php'; ?>

<script type="text/javascript">
    var contPrevi = document.getElementById('Contingut').innerHTML; //Guardem el contingut inicial del div


    $('.productes').click(function(){ //Funció al fer click en un element de la classe productes
        idProd = this.getAttribute('idprod'); //Li diem que retorni l'atribut anomenat idcat de l'element clicat
        //window.alert(idProd);

        $('#Contingut').load('index.php?accio=producte_id&product='+idProd, function () { //No sé si esa forma está bien escrita.
            //window.alert(idProd);
            console.log('Load completed!');
        });
        $('.BackArrow').toggle(100);
    });

    $('.BackArrow').click(function(){
        //window.alert(contPrevi);
        document.getElementById('Contingut').innerHTML = contPrevi;
        $('.BackArrow').toggle(100);

        /*AIXÒ RECARREGA LA FUNCIONALITAT D'AJAX*/
        $('.productes').click(function(){ //Funció al fer click en un element de la classe productes
            idProd = this.getAttribute('idprod'); //Li diem que retorni l'atribut anomenat idcat de l'element clicat
            //window.alert(idProd);

            $('#Contingut').load('index.php?accio=producte_id&product='+idProd, function () {
                console.log('Load completed!');
            });
            $('.BackArrow').toggle(100);
        });
    });
</script>