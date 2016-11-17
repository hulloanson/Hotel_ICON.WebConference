<?php


use Phalcon\Mvc\Collection;

class Sponsor extends Collection
{
    public function initialize() {
        $this->setSource('sponsor');
    }


}