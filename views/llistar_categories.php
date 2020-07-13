<img class="BackArrow" src="imatges/backArrow.png">
<div id="Contingut" style="margin: 20px;">
    <h2>Selecciona una categoria:</h2>
    <br><br>
    <div class="gridProd" id="category" style="top:50%;">
        <?php foreach ($categories as $categoria): ?>
            <a class="categories estilProds" idcat="<?php echo $categoria['id']?>"><?php echo $categoria['nom']?></a>
        <?php endforeach; ?>
    </div>

</div>

<!--Hacer un script de recargar la página yendo por index.php con el valor  de la categoría a mostrar-->
<script type="text/javascript">
    var contPrevi = document.getElementById('Contingut').innerHTML; //Guardem el contingut inicial del div
    $('.BackArrow').hide();

    $('.categories').click(function(){ //Funció al fer click en un element de la classe .categories
        idCat = this.getAttribute('idcat'); //Li diem que retorni l'atribut anomenat idcat de l'element clicat
        //window.alert(idCat);

        $('#Contingut').load('index.php?accio=categoria_id&category='+idCat, function () { //No sé si esa forma está bien escrita.
            console.log('Load completed!');
        });
        document.getElementById('LlistarCat').style.gridTemplateRows = "100px auto 100px"; //Està posat per actualitzar el grid
        $('.BackArrow').toggle(100);
    });

    $('.BackArrow').click(function(){
        //window.alert(contPrevi);
        document.getElementById('Contingut').innerHTML = contPrevi;
        $('.BackArrow').toggle(100);

        /*AIXÒ RECARREGA LA FUNCIONALITAT D'AJAX*/
        $('.categories').click(function(){ //Funció al fer click en un element de la classe .categories
            idCat = this.getAttribute('idcat'); //Li diem que retorni l'atribut anomenat idcat de l'element clicat
            //window.alert(idCat);

            $('#Contingut').load('index.php?accio=categoria_id&category='+idCat, function () { //No sé si esa forma está bien escrita.
                console.log('Load completed!');
            });
            document.getElementById('LlistarCat').style.gridTemplateRows = "100px auto 100px"; //Està posat per actualitzar el grid
            $('.BackArrow').toggle(100);
        });
    });
</script>
<br>
