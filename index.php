<?php
include "interface/Comparator.php";
include "class/Circle.php";
include "class/CircleComparator.php";
$circleOne=new Circle('circleOne',3);
$circleTwo=new Circle('circleTwo',4);
$circleComparator=new CircleComparator();
var_dump($circleComparator->compare($circleOne,$circleTwo));
