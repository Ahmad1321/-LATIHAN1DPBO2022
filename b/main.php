<?php

include "TimSepakbola.php";

// menggunakan contruct
$tim1 = new data("Real Madrid", "Spanyol", 1902, 25);

$tim1->output();
echo "<br/>";

// menggunakan set
$tim2 = new data();
$tim2->settim("Liverpool");
$tim2->setnegara("England");
$tim2->settahun(1892);
$tim2->setjumlah(34);

$tim2->output();

?>