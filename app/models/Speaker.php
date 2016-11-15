<?php

use \Phalcon\Mvc\Collection;

class Speaker extends Collection
{
    public function initialize() {
        $this->setSource('event');
    }
}