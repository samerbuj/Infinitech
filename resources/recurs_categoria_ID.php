<?php
    require_once __DIR__ . '/../model/connectaBD.php';

    $category = '';
    if (isset($_GET['category'])){
        $category = $_GET['category'];
        //echo $category;
    }

    //$sql = $bd_connexio->prepare("SELECT * FROM `producte` WHERE categoria_id = '$(\"#category\")'");
    $sql = $bd_connexio->prepare("SELECT * FROM `producte` WHERE categoria_id =" . $category);
    $sql->execute();
    $cat_id = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="gridProd">
    <?php foreach ($cat_id as $producte): ?>
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

<!--Hacer un script de recargar la página yendo por index.php con el valor  de la categoría a mostrar-->
<script type="text/javascript">

        $('.productes').click(function(){ //Funció al fer click en un element de la classe productes
            idProd = this.getAttribute('idprod'); //Li diem que retorni l'atribut anomenat idcat de l'element clicat
            //window.alert(idProd);

            $('#Contingut').load('index.php?accio=producte_id&product='+idProd, function () { //No sé si esa forma está bien escrita.
                console.log('Load completed!');
            });
            document.getElementById('LlistarCat').style.gridTemplateRows = "100px auto 150px"; //Està posat per actualitzar el grid
        });
</script>