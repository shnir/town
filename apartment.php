<?php

class apartment{
    public $number_apartment=10;
    public $number_of_rooms;
    public $area;
    public $floor;
    public $number_of_residents;
    public $number_of_balcons;
    public $heating;
    public $cold_water;
    public $hot_water;
    public $electricity;
    public $gas;

//цена на комунальные услуги
private $price = array(
    'gas'=> 7.19,
    'electricity'=> 0.366,
    'cold_water'=> 7.46,
    'hot_water'=> 23.48,
    'heating'=> 9.22,
    'kvarplata'=>1.99
    );

//нормы на человека при отсутствии счетчиков
private $norm = array(
    'gas'=>6,
    'cold_water'=>5.5,
    'hot_water'=>2.5,
    'electricity'=>30
    );

//конструктор
    function __construct($number_apartment, $number_of_rooms, $area, $floor, $number_of_residents, $number_of_balcons, $cold_water=0, $hot_water=0, $electricity=0, $gas=0){
        $this->number_apartment = $number_apartment;
        $this->number_of_rooms = $number_of_rooms;
        $this->area = $area;
        $this->floor = $floor;
        $this->number_of_residents = $number_of_residents;
        $this->number_of_balcons = $number_of_balcons;
        //$this->heating = $heating;
        $this->cold_water = $cold_water;
        $this->hot_water = $hot_water;
        $this->electricity = $electricity;
        $this->gas = $gas;
        echo "Создана квартира №$this->number_apartment.<br>";
    }

/*расчет стоимости коммунальных услуг*/
    public function count_cold_water(){
        if ($this->cold_water) return round($this->cold_water*$this->price['cold_water'], 2);
        else return round($this->number_of_residents*$this->norm['cold_water']*$this->price['cold_water'], 2);
    }
    public function count_hot_water(){
        if ($this->hot_water) return round($this->hot_water*$this->price['hot_water'], 2);
        else return round($this->number_of_residents*$this->norm['hot_water']*$this->price['hot_water'], 2);
    }
    public function count_gas(){
        if ($this->gas) return round($this->gas*$this->price['gas'], 2);
        else return round($this->number_of_residents*$this->norm['gas']*$this->price['gas'], 2);
    }
    public function count_electricity(){
        if ($this->electricity) return round($this->electricity*$this->price['electricity'], 2);
        else return round(($this->number_of_residents*$this->norm['electricity']+130)*$this->price['electricity'], 2);
    }
    public function count_heating(){
        return round($this->area*$this->price['heating'], 2);
    }
    public function count_kvarplata(){
        return round($this->area*$this->price['kvarplata'], 2);
    }
    public function count_summ(){
        return $this->count_cold_water()+$this->count_electricity()+$this->count_hot_water()+$this->count_gas()+$this->count_heating();
    }

/*добавление жильцов*/
    public function add_residents($num=1){
        $this->number_of_residents = $this->number_of_residents+$num;
        echo "<hr>В квартире №$this->number_apartment поселили $num жильцов, теперь в ней проживает $this->number_of_residents жильцов.<br>";
    }

/*уменьшение жильцов*/
    public function del_residents($num=1){
        $this->number_of_residents = $this->number_of_residents-$num;
        if ($this->number_of_residents<0) $this->number_of_residents=0;
        echo "<hr>В квартире №$this->number_apartment выселили $num жильцов, теперь в ней проживает $this->number_of_residents жильцов.<br>";

    }

/*подсчет жильцов */
    public function count_residents(){
        return $this->number_of_residents;
    }

/*вывод информации о квартире*/
    public function info(){
        echo '<hr>';
        echo "Квартира № $this->number_apartment.<br>";
        echo "Расположена на $this->floor этаже.<br>";
        echo "Площадью $this->area м2.<br>";
        echo "Комнат: $this->number_of_rooms.<br>";
        if ($this->number_of_balcons) echo "Балконов: $this->number_of_balcons.<br>";
        else echo "Без балконов.<br>";
        echo "Жильцов: $this->number_of_residents.<br>";
    }

/*Вывод стоимости коомунальных услуг*/
    public function cost_cold_water(){
        echo "<hr>Стоимость холодной воды для квартиры №$this->number_apartment составляет: ",$this->count_cold_water();
    }
    public function cost_hot_water(){
        echo "<hr>Стоимость горячей воды для квартиры №$this->number_apartment составляет: ",$this->count_hot_water();
    }
    public function cost_gas(){
        echo "<hr>Стоимость газа для квартиры №$this->number_apartment составляет: ",$this->count_gas();
    }
    public function cost_electricity(){
        echo "<hr>Стоимость электроэнергии для квартиры №$this->number_apartment составляет: ",$this->count_electricity();
    }
    public function cost_heating(){
        echo "<hr>Стоимость отопления для квартиры №$this->number_apartment составляет: ",$this->count_heating();
    }
    public function cost_kvarplata(){
        echo "<hr>Стоимость отопления для квартиры №$this->number_apartment составляет: ",$this->count_kvarplata();
    }
    public function cost_all(){
        echo "<hr>Сумма всех комунальных платежей в квартире №$this->number_apartment составляет: ",$this->count_summ(),' грн<br>';
    }

}
