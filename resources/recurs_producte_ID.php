<?php
    require_once __DIR__ . '/../model/connectaBD.php';

    $product = '';
    if (isset($_GET['product'])){
        $product = $_GET['product'];
        //echo $product;
    }

    //$sql = $bd_connexio->prepare("SELECT * FROM `producte` WHERE categoria_id = '$(\"#category\")'");
    $sql = $bd_connexio->prepare("SELECT * FROM `producte` WHERE id =" . $product);
    $sql->execute();
    $prod_id = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="gridProd">
    <?php foreach ($prod_id as $producte): ?>
        <div class="productes estilProds unicProd" idprod="<?php echo $producte['id']?>">
            <h3><?php echo  $producte['nom'] ?></h3>
            <?php echo $producte['descripcio'] ?>
            <br>
            <?php echo $producte['preu'] ?>€
            <br>
            <img src="/imatges/<?php echo $producte['imatge']?>" alt="<?php echo $producte['imatge']?>">
            <div>
                <form method="post" action="index.php?accio=afegir-cistella&producteID=<?php echo $producte['id']?>" class="form-productes">

                    <div class="item-box">
                        <div>
                            Quantitat:
                            <input type="number" min="1" style="width: 50px" value="1" name="quantitat_producte">
                        </div>

                        <input type="submit" name="cistella" value="Afegir a la cistella">
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    $(document).ready(function () {
       $('.gridProd').style.gridTemplateColumns = "auto";
    });
</script>