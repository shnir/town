<?php


class street {
    public $street_name;
    public $length;
    public $coord_start;
    public $coord_end;
    public $houses = [];

    public function __construct($street_name, $length, $coord_start, $coord_end){
        $this->street_name = $street_name;
        $this->length = $length;
        $this->coord_start = $coord_start;
        $this->coord_end = $coord_end;
        echo "<hr><hr>Создана улица $this->street_name.<br>";
    }

    //добавление дома с предварительным созданием
    public function addHouse($number_of_house, $number_of_floors, $number_of_entrances, $adjacent_territory){
        $this->houses[$number_of_house] = new house($number_of_house, $number_of_floors, $number_of_entrances, $adjacent_territory);
        echo "На улице $this->street_name размещен дом №$number_of_house.<br>";
        return $this->houses[$number_of_house];
    }

    //добавление готового дома
    public function addHouseObj(array $arr){
        foreach ($arr as $house) {
            $this->houses[$house->number_of_house] = $house;
            echo "На улице $this->street_name размещен дом ",$house->number_of_house,".<br>";
        }
    }

    //количество дворников для уборки прилегающих территорий всех домов по улице
    public function count_janitor(){
        $area = 0;
        foreach ($this->houses as $house){
            $area += $house->adjacent_territory;
        }
        return ceil($area / 900); //900 м2 - норма на одного дворника
    }

    //объем коммунальных платежей, которые будут получены со всех домов
    public function count_komunalka(){
        $komunalka=0;
        foreach ($this->houses as $house) $komunalka += $house->count_komunalka();
        return $komunalka;
    }

    public function count_population(){
        $population=0;
        foreach ($this->houses as $house) $population += $house->count_population();
        return $population;
    }

    //информация об улице
    public function info(){
        echo '<hr>';
        echo "<b>Улица $this->street_name</b><br>";
        echo "Длина: $this->length м.<br>";
        echo "Координаты начала: $this->coord_start.<br>";
        echo "Координаты конца: $this->coord_end.<br>";
        echo "Домов: ",count($this->houses),".<br>";
        echo "Дворников: ",$this->count_janitor(),".<br>";
        echo "Проживает: ",$this->count_population()," человек.<br>";
        echo "Объем коммунальных платежей: ",$this->count_komunalka()," грн.<br>";
    }
} 