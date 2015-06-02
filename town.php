<?php


class town {
    public $town_name;
    public $foundation;
    public $coordinates;
    public $streets = [];

    public function __construct($town_name, $foundation, $coordinates){
        $this->town_name = $town_name;
        $this->foundation = $foundation;
        $this->coordinates = $coordinates;
        echo "<hr><hr><hr>Создан город $this->town_name.<br>";
    }

    //добавление улицы c предварительным созданием
    public function addStreet($street_name, $length, $coord_start, $coord_end){
        $this->streets[$street_name] = new street($street_name, $length, $coord_start, $coord_end);
        echo "В городе $this->town_name размещена улица $street_name.<br>";
        return $this->streets[$street_name];
        
    }

    //добавление готовой улицы
    public function addStreetObj(array $arr){
        foreach ($arr as $street) {
            $this->streets[$street->street_name] = $street;
            echo "В городе $this->town_name размещена улица ",$street->street_name,".<br>";
        }
    }

    //вычисление количества домов на улице
    public function count_houses(){
        $houses = 0;
        foreach ($this->streets as $street){
            $houses += count($street->houses);
        }
        return $houses;
    }

    //расчет бюджета по улице
    public function count_budget(){
        $budget = 0;
        foreach ($this->streets as $street)$budget += $street->count_komunalka();
        return $budget;
    }

    //вычисление количества жильцов на улице
    public function count_population(){
        $population = 0;
        foreach ($this->streets as $street) $population += $street->count_population();
        return $population;
    }

    //информация о городе
    public function info(){
        echo '<hr>';
        echo "<b>Город $this->town_name</b><br>";
        echo "Основан в $this->foundation году.<br>";
        echo "Расположен по координатам: $this->coordinates.<br>";
        echo "Улиц: ",count($this->streets),".<br>";
        echo "Домов: ",$this->count_houses(),".<br>";
        echo "Бюджет: ",$this->count_budget()," грн.<br>";
        echo "Население: ",$this->count_population()," человек.<br>";
    }

} 