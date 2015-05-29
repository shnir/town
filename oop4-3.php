
<?php

mb_internal_encoding("UTF-8");

include_once 'apartment.php';
include_once 'house.php';
include_once 'street.php';
include_once 'town.php';

?>
<?php
include 'head.html';
?>
<title>OOP Task 4. Practice 3: classes</title>
<?php

//создаем город Х
$town1 = new town('Х', '1465', '159,753');

//Создаем улицу Баварскую
$street1 = $town1->addStreet('Баварская',155,'123,99','178,154');

//Создаем ДОМ1
$house1 = $street1->addHouse(1,9,4,1100);

$house1->addApartment(1, 4,80,1,3,2,20,10,150,5);
$house1->addApartment(2, 1,38,1,1,0,20,10,150,5);
$house1->addApartment(3, 2,49,1,2,1,20,10,150,5);
$house1->addApartment(4, 3,62,1,3,1,20,10,150,5);
$house1->addApartment(5, 2,49,1,2,1,20,10,150,5);

//Создаем ДОМ2
$house2 = $street1->addHouse(2,5,2,700);

$house2->addApartment(1, 4,80,1,3,2,20,10,150,5);
$house2->addApartment(2, 1,38,1,1,0,20,10,150,5);
$house2->addApartment(3, 2,49,1,2,1,20,10,150,5);
$house2->addApartment(4, 3,62,1,3,1,20,10,150,5);
$house2->addApartment(5, 3,62,1,3,1,20,10,150,5);

//Создаем ДОМ3
$house3 = new house(3,5,4,1200);

$house3->addApartment(1, 4,80,1,3,2,20,10,150,5);
$house3->addApartment(2, 1,38,1,1,0,20,10,150,5);
$house3->addApartment(3, 2,49,1,2,1,20,10,150,5);
$house3->addApartment(4, 3,62,1,3,1,20,10,150,5);
$house3->addApartment(5, 1,38,1,1,0,20,10,150,5);

//Создаем ДОМ4
$house4 = new house(4,2,5,1500);

$house4->addApartment(1, 4,80,1,3,2,20,10,150,5);
$house4->addApartment(2, 1,38,1,1,0,20,10,150,5);
$house4->addApartment(3, 2,49,1,2,1,20,10,150,5);
$house4->addApartment(4, 3,62,1,3,1,20,10,150,5);
$house4->addApartment(5, 4,80,1,3,2,20,10,150,5);

//Создаем ДОМ5
$house5 = new house(5,2,5,1500);

$house5->addApartment(1, 4,80,1,3,2);
$house5->addApartment(2, 1,38,1,1,0);
$house5->addApartment(3, 2,49,1,2,1);
$house5->addApartment(4, 3,62,1,3,1);
$house5->addApartment(5, 4,80,1,3,2);

//Создаем улицу Сумскую
$street2  = new street('Сумская',94,'5,54','78,113');

//размещаем дома 3-5 на улице Сумской
$street2->addHouseObj(array($house3));
$street2->addHouseObj(array($house4,$house5));

//размещаем улицу Сумскую в городе
$town1->addStreetObj(array($street2));

//Информация о улицах
$street1->info();
$street2->info();

//Информация о городе
$town1->info();



?>


<?php
include 'foot.html';
?>
