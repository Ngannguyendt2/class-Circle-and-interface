<?php


class Circle
{
protected $radius;
protected $name;
function __construct($name,$radius)
{
    $this->radius=$radius;
    $this->name=$name;
}

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
function getArea(){
    return (pi()*pow($this->radius,2));
}
function getPerimeter(){
    return pi()*$this->radius*2;
}
}