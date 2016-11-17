<?php


use Phalcon\Mvc\Collection;

class Contributor extends Collection
{
    public function initialize() {
        $this->setSource('contributor');
    }
}