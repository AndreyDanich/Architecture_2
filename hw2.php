<?php

class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal**2)/2;
        return $area;
    }
}

class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal**2)/4;
        return $area;
    }
}


class SquareLib implements ISquare {
    protected $diagonal;


    public function __construct()
    {
        $this->diagonal = $diagonal;    
    }

    function squareArea(int $sideSquare)
    {

    }

}



interface ISquare
{
    function squareArea(int $sideSquare);
}

interface ICircle
{
    function circleArea(int $circumference);
}
