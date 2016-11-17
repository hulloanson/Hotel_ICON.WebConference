<?php

use Phalcon\Mvc\Collection;

class Question extends Collection
{
    public $_id;

    public $question;

    public $type;

    public $choices;

    public function initialize() {
        $this->setSource('question');
    }


}