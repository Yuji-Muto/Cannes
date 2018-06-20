

<?php
require_once(PATH_MODELS.'VIPDAO.php');

$VIP= new VIPDAO;

$tableau = $VIP->getAllVIP();



require_once(PATH_VIEWS.'Consultation.php');