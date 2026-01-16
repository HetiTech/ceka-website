<?php

$fileurl = "{$_SERVER['DOCUMENT_ROOT']}/Files/CekaProductCatalogue.pdf";
$pdf = file_get_contents($fileurl);
header('Content-Type: application/pdf');
header('Cache-Control: public, must-revalidate, max-age=0'); // HTTP/1.1
header('Pragma: public');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Content-Length: ' . strlen($pdf));
header('Content-Disposition: inline; filename="' . basename($fileurl) . '";');
ob_clean();
flush();
echo $pdf;
?>