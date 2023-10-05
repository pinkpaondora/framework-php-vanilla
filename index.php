<?php 

ob_start();

?>

<?php

require_once './configs/bootstrap.php';
fromInc("menu");
debugMode($globalConfigs);

dd($_GET);
fromInc( $_GET["page"]);


?>

<?php

$pageContent = ob_get_clean();

?>