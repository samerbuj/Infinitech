
<!DOCTYPE html>
<html>
	<head>
		<title>Conctacte</title>
        <link rel="stylesheet" href="style.css">
    </head>
	<body>

		<section id="contacte">
			<?php
			      if(@$_GET['i']=='ok') {  ?>
				<!--	<h3>La consulta s'ha enviat correctament.</h3> -->
			
			    <?php
			      } else{
			    ?>

					<div class="contenedor">
						<h2>Contacte</h2>
						<form class="formulari" action="enviar-contacte.php" method="post" enctype="multipart/form-data">
							<input type="text" placeholder="Nom" name="nom" required>
							<input type="email" placeholder="Email" name="email" required=>

							<textarea placeholder="Missatge" name="missatge"></textarea>
							<input type="submit" value="ENVIAR MISSATGE" >
						</form>		
					</div>
				<?php } ?>

					<div class="contacte-info">
					    <div class="mail"><img src="imatges/mail-icon.png" alt="">info@infinitoys.com</div>
					    <div class="whatsapp"><img src="imatges/whatsapp-icon.png" alt="">935555555</div>
				    </div>


				
			</section>

	</body>
</html>