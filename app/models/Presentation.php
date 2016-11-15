<?php

use \Phalcon\Mvc\Collection;

class Presentation extends Collection
{
    public function initialize() {
        $this->setSource('event');
    }
}