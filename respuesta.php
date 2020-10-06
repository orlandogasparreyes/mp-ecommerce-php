<?php
require __DIR__  . '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken("APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181");
$data=$_GET;
switch($data['id']){
	case "failure":
		echo "<h2>El pago fue rechazado</h2>";
		break;
	case "pending":
		echo "<h2>El pago está siendo procesado</h2>";
		break;
    case "success":
        var_dump(json_decode($data, true));
		break;
}