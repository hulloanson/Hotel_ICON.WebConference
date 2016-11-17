<?php

use \Phalcon\Mvc\Collection;

class Paper extends Collection
{
    public $_id;

    public $title;

    public $author;

    public $abstract;

    public function initialize() {
        $this->setSource('event');
    }


}