<?php

mb_internal_encoding("UTF-8");

include_once 'apartment.php';
include_once 'house.php';

?>
<?php
include 'head.html';
?>
<title>OOP Task 4. Practice 2.1: classes</title>
<?php
//Создаем ДОМ1
$house1  = new house(1,9,4,1100);

$house1->addApartment(1, 4,80,1,3,2,20,10,150,5);
$house1->addApartment(2, 1,38,1,1,0,20,10,150,5);
$house1->addApartment(3, 2,49,1,2,1,20,10,150,5);
$house1->addApartment(4, 3,62,1,3,1,20,10,150,5);
$house1->addApartment(5, 2,49,1,2,1,20,10,150,5);

//Создаем ДОМ2
$house2  = new house(2,5,2,700);

$house2->addApartment(1, 4,80,1,3,2,20,10,150,5);
$house2->addApartment(2, 1,38,1,1,0,20,10,150,5);
$house2->addApartment(3, 2,49,1,2,1,20,10,150,5);
$house2->addApartment(4, 3,62,1,3,1,20,10,150,5);
$house2->addApartment(5, 3,62,1,3,1,20,10,150,5);

//Создаем ДОМ3
$house3  = new house(3,5,4,1200);

$house3->addApartment(1, 4,80,1,3,2,20,10,150,5);
$house3->addApartment(2, 1,38,1,1,0,20,10,150,5);
$house3->addApartment(3, 2,49,1,2,1,20,10,150,5);
$house3->addApartment(4, 3,62,1,3,1,20,10,150,5);
$house3->addApartment(5, 1,38,1,1,0,20,10,150,5);

//Создаем ДОМ4
$house4  = new house(4,2,5,1500);

$house4->addApartment(1, 4,80,1,3,2,20,10,150,5);
$house4->addApartment(2, 1,38,1,1,0,20,10,150,5);
$house4->addApartment(3, 2,49,1,2,1,20,10,150,5);
$house4->addApartment(4, 3,62,1,3,1,20,10,150,5);
$house4->addApartment(5, 4,80,1,3,2,20,10,150,5);

//Создаем ДОМ5
$house5  = new house(5,2,5,1500);

$house5->addApartment(1, 4,80,1,3,2);
$house5->addApartment(2, 1,38,1,1,0);
$house5->addApartment(3, 2,49,1,2,1);
$house5->addApartment(4, 3,62,1,3,1);
$house5->addApartment(5, 4,80,1,3,2);

//Коммунальные платежи по домам
$house1->cost_all();
$house2->cost_all();
$house3->cost_all();
$house4->cost_all();
$house5->cost_all();

//Информация о домах
$house1->info();
$house2->info();
$house3->info();
$house4->info();
$house5->info();


?>


<?php
include 'foot.html';
?>
