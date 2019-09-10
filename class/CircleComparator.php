<?php


class CircleComparator implements Comparator
{
public function compare($circleOne,$circleTwo)
{
    // TODO: Implement compare() method.
    $radiusOne=$circleOne->getRadius();
    $radiusTwo=$circleTwo->getRadius();
    if($radiusOne>$radiusTwo){
        return 1;
    }elseif ($radiusOne<$radiusTwo){
        return -1;
    }
    else {
        return 0;
    }
}
}