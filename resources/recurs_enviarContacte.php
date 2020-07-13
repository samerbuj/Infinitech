<?php
    $nom_usuari = $_POST['nom'];
    $email = $_POST['email'];
    $missatge = $_POST['missatge'];

    $desti="laura.navarrolo@e-campus.uab.cat";
    $assumpte="Consulta enviada des de Infinitech";

    $missatgeConsulta="El teu nom és: ".$nom_usuari."\r\n";
    $missatgeConsulta.="El teu email és: ".$email."\r\n";
    $missatgeConsulta.="Consulta: ".$missatge."\r\n";

    $remitent="From: consulta@Infinitech.com";

    mail($desti, $assumpte, $missatgeConsulta, $remitent);

    header("Location: index.php");
?>
