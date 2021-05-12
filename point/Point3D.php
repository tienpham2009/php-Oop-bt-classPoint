<?php

namespace point;
class Point3D extends Point2D
{
    protected float $z;

    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return float
     */
    public function getZ(): float
    {
        return $this->z;
    }

    public function getXYZ(): array
    {
        return [$this->x, $this->y, $this->z];
    }

    public function __toString():string
    {
        return "x la: ".$this->x."<br>"."y la: ".$this->y."<br/>"."z la: ".$this->z;
    }


}