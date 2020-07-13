<?php
require_once __DIR__ . '/../model/connectaBD.php';

$cerca = '';
if (isset($_GET['cerca'])){
    $cerca = $_GET['cerca'];
}
echo $cerca;
?>