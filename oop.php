<?php

/*/ 1. Инкапсуляция - это основной принцип ООП, который позволяет
объединить в группы что либо определенного типа, благодаря чему,
задать свойтво чего либо нужно всего 1 раз, это значительно уменьшает
количество кода и облегчает читабельность.

    2.Плюсы объектов состоят в том, что сразу понятно, какие свойста у него,
нету грамоздкого кода. Из минусов, если у объекта есть дополнительное свойство,
его нужно впистать в класс, хотя нужно это всего для одного объекта./**/

//машина

class Car
{
    public $mark;
    public $model;
    public $color;
    public $price;

    public function getCar()
    {
        echo $this->mark . ' ' . $this->model . ' ' . $this->color . ' ' . $this->price;
    }
}
$carChevrolet = new Car();
$carChevrolet->mark = 'Chevrolet';
$carChevrolet->model = 'Comaro';
$carChevrolet->color = 'yellow';
$carChevrolet->price = '30000';

$carFord = new Car();
$carFord->mark = 'Ford';
$carFord->model = 'Mustang gt';
$carFord->color = 'grey';
$carFord->price = '295000';

//телевизор

class TV
{
    public $mark;
    public $ScreenSize;
    public $display;
    public $resolution;

    public function getTV()
    {
        echo $this->mark . ' ' . $this->ScreenSize . ' ' . $this->resolution . ' ' . $this->display;
    }
}

$TvSamsung = new TV();
$TvSamsung->mark = 'Samsung';
$TvSamsung->ScreenSize = '40"';
$TvSamsung->display = 'LED';
$TvSamsung->resolution = 'Full HD';

$TvSony = new TV();
$TvSony->mark = 'Sony';
$TvSony->ScreenSize = '49"';
$TvSony->display = 'LED';
$TvSony->resolution = '4K ULTRA HD';


//ручка

class BallpointPen
{
    public $mark;
    public $color;

    public function getPen()
    {
        echo $this->mark . ' ' . $this->color;
    }
}

$PenBenu = new BallpointPen();
$PenBenu->mark = 'Benu';
$PenBenu->color = 'black';

$PenEtra = new BallpointPen();
$PenEtra->mark = 'Etra';
$PenEtra->color = 'blue';

//утка

class Duck
{
    public $breed;
    public $dwelling;

    public function getDuck()
    {
        echo $this->breed . ' ' . $this->dwelling;
    }
}

$duckPekin = new Duck();
$duckPekin->breed = 'Пекинская утка';
$duckPekin->dwelling = 'Китай';

$duckRussia = new Duck();
$duckRussia->breed = 'Русская утка';
$duckRussia->dwelling = 'Россия';


// Товар
class Goods
{
    public $name;
    public $category;
    public $price;

    public function getGoods()
    {
        echo $this->name . ' ' . $this->category . ' ' . $this->price;
    }

}

$goodsApple = new Goods();
$goodsApple->name = 'iPhone';
$goodsApple->category = 'Телефон';
$goodsApple->price = 38000;

$goodsSamsyng = new Goods();
$goodsSamsyng->name = 'Samsung S8';
$goodsSamsyng->category = 'Телефон';
$goodsSamsyng->price = 28000;