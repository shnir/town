<?php

mb_internal_encoding("UTF-8");

include_once 'apartment.php';

?>
<?php
include 'head.html';
?>
<title>OOP Task 4. Practice 1: classes</title>
<?php

$apart1  = new apartment(1, 4,80,1,3,2,20,10,150,5);
$apart2  = new apartment(2, 1,38,1,1,0,20,10,150,5);
$apart3  = new apartment(3, 2,49,1,2,1,20,10,150,5);
$apart4  = new apartment(4, 3,62,1,3,1,20,10,150,5);
$apart5  = new apartment(5, 4,80,2,3,2,20,10,150,5);
$apart6  = new apartment(6, 1,38,2,1,0,20,10,150,5);
$apart7  = new apartment(7, 2,49,2,2,1,20,10,150,5);
$apart8  = new apartment(8, 3,62,2,3,1,20,10,150,5);
$apart9  = new apartment(9, 4,80,3,3,2,20,10,150,5);
$apart10 = new apartment(10,1,38,3,1,0,20,10,150,5);
$apart11 = new apartment(11,2,49,3,2,1,20,10,150,5);
$apart12 = new apartment(12,3,62,3,3,1,20,10,150,5);

$apart1->info();
$apart6->info();

$apart1->add_residents(3);

$apart1->info();

$apart1->del_residents(2);

$apart1->cost_all();

$apart2->cost_cold_water();

$apart3->cost_electricity();

$apart4->cost_hot_water();

$apart5->cost_gas();

$apart6->cost_heating();
?>


<?php
include 'foot.html';
?>
