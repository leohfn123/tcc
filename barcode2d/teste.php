<?php
require("barcodes.php");
$d2 = new DNS2DBarcode();
$d2->save_path = "";
echo $d2->getBarcodePNGPath("teste", 'qrcode', 2, 2, "black");

?>