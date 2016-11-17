<?php


use Phalcon\Mvc\Collection;

class Attraction extends Collection
{
    public function initialize() {
        $this->setSource('attraction');
    }
}