<?php

use Phalcon\Mvc\Collection;
use Phalcon\Validation;

/**
 * Class Survey
 * Represent a answered survey
 * Contains both schema of Survey and static functions that involves surveys
 */
class Survey extends Collection
{
    /**
     * @var string $email Email of the surveyee
     */
    public $email;

    /**
     * @var array $answers An array of answers to the questions
     * @var mixed $answers [] Value of the question
     */
    public $answers;

    public function initialize()
    {
        $this->setSource('event');
    }

    
}