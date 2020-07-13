
<form method="post" action="index.php?accio=actualitzar-perfil" enctype="multipart/form-data"> <!-- "multipart/form-data" -> Per especificar el tipus de codificació que permeti la pujada de fitxers  -->
    <label>Nom:</label><br>
    <input type="text" name="nom" chars="latin" value="<?php echo $nom ?>" /><br>

    <label>Sexe:</label><br>
    <input type="text" name="sexe" value="<?php echo $sexe ?>" required/><br>

    <label>Email:</label><br>
    <input type="email" name="email" chars="email" value="<?php echo $email ?>" required/><br>

    <label>Adreça:</label><br>
    <input type="text" name="adreça" chars="address" maxlength="30" value="<?php echo $adreça ?>" required/><br>

    <label>Població:</label><br>
    <input type="text" name="poblacio" maxlength="30" chars="latin" value="<?php echo $poblacio ?>" required/><br>

    <label>Codi Postal:</label><br>
    <input type="text" name="CP" maxlength="5" value="<?php echo $CP ?>" required/><br>

    <label for="image">Imatge:</label><br>
    <?php if(isset($_SESSION['imgError'])) { ?>
        <h3 id="error"><?php echo $_SESSION['imgError']; ?></h3><br>
    <?php } ?>
    <input type="file" name="imatgePerfil"> <!-- Pujada de fitxer al formulari -->
    <br>
    <input type="submit" name="actualitzarPerfil" value="Actualitzar" />
</form>