<img class="BackArrow" src="imatges/backArrow.png">
<div id="Contingut">
    <div class="gridProd">
        <?php foreach ($productes as $producte): ?>
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
</div>





<!--Hacer un script de recargar la página yendo por index.php con el valor  de la categoría a mostrar-->
<script type="text/javascript">
    var contPrevi = document.getElementById('Contingut').innerHTML; //Guardem el contingut inicial del div
    $('.BackArrow').hide();

    /*$('.productes').hover(function(){
        $('.infoProd').show();});*/

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
<br>
