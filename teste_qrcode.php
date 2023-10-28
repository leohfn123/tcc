<?php
include_once("phpqrcode/qrlib.php");

$data = 'https://imasters.com.br'; //inserindo a URL do iMasters

$options = new QROptions([
'version' => 5, //versao do QRCode
'eccLevel' => QRCode::ECC_L, //Error Correction Feature Level L
]);

echo '<img src="'.(new QRCode($options))->render($data).'" />'; //gerando o QRCode em uma tag img
?>