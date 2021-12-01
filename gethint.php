<?php
$a[] = "Gaseosa";
$a[] = "Galletas";
$a[] = "Mermelada";
$a[] = "Refrescos";
$a[] = "Leche";
$a[] = "Fideos";
$a[] = "Detergente";
$a[] = "Aceite";
$a[] = "Azucar";
$a[] = "Arroz";
$a[] = "Conservas";
$a[] = "Yogurt";


$q = $_REQUEST["q"];
$hint = "";
if ($q !== "") {
	$q = strtolower($q);
	$len=strlen($q);
 	foreach($a as $name) {
 		if (stristr($q, substr($name, 0, $len))) {
 			if ($hint === "") {
 				$hint = $name;
 			} else {
 				$hint .= ", $name";
 			}
		}
 	}
}
echo $hint === "" ? "sin sugerencias" : $hint;
?>
