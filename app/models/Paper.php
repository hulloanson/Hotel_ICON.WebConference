<?php

use \Phalcon\Mvc\Collection;

class Paper extends Collection
{
    public function initialize() {
        $this->setSource('event');
    }
}