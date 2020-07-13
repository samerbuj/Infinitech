<?php
if(isset($_SESSION['user_id'])) {
    echo "Login Correcte, Benvingut ", $user['nom'];
}
else
{
   echo "Error, credencials incorrectes";
}

?>