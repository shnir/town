<?php

class house{
    public $number_of_house;
    public $number_of_floors;
    public $number_of_entrances;
    public $adjacent_territory;
    public $apartments = [];

    //Создание дома
    public function __construct($number_of_house, $number_of_floors, $number_of_entrances, $adjacent_territory){
        $this->number_of_house = $number_of_house;
        $this->number_of_floors = $number_of_floors;
        $this->number_of_entrances = $number_of_entrances;
        $this->adjacent_territory = $adjacent_territory;
        echo "<hr>Создан дом №$this->number_of_house.<br>";
    }

    //Добавление квартиры в дом
    public function addApartment($number_apartment, $number_of_rooms, $area, $floor, $number_of_residents, $number_of_balcons, $cold_water=0, $hot_water=0, $electricity=0, $gas=0){
        $this->apartments[$number_apartment] = new apartment($number_apartment, $number_of_rooms, $area, $floor, $number_of_residents, $number_of_balcons, $cold_water, $hot_water, $electricity, $gas);
        echo "В дом №$this->number_of_house добавлена квартира №$number_apartment.<br>";
    }

    //Расчет суммы коммунальных платежей по дому
    public function count_komunalka(){
        $komunalka=0;
        foreach ($this->apartments as $apartment) $komunalka += $apartment->count_summ();
        return $komunalka;
    }

    //вывод суммы коммунальных платежей по дому
    public function cost_all(){
        echo "<hr>Сумма всех комунальных платежей по дому №<b>$this->number_of_house</b> составляет: <b>",$this->count_komunalka(),' грн</b><br>';
    }

    //электроэнергия для освещения этажных площадок
    public function count_lightingPorches(){
        //мощность ламп 0,06 кВт
        //среднее время освещения 12 часов
        return $this->number_of_entrances*$this->number_of_floors*0.06*12;
    }

    //Налог на землю
    public function count_landTax(){
        //ставка 3,66 грн/м2
        return round($this->adjacent_territory*3.66, 2);
    }

    public function count_population(){
        $population=0;
        foreach ($this->apartments as $apart) $population += $apart->count_residents();
        return $population;
    }


    /*вывод информации о квартире*/
    public function info(){
        echo '<hr>';
        echo "<b>Дом №$this->number_of_house</b><br>";
        echo "Подъездов: $this->number_of_entrances.<br>";
        echo "Этажей: $this->number_of_floors.<br>";
        echo "Занимаемая площадь: $this->adjacent_territory.<br>";
        echo "Квартир: ",count($this->apartments),".<br>";
        echo "Проживает: ",$this->count_population()," человек.<br>";
        echo "Расходы на освещение подъездов: ",$this->count_lightingPorches(),".<br>";
        echo "Плата за землю: ",$this->count_landTax()," грн.<br>";
    }
} 