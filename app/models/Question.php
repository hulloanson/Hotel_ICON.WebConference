<?php

use Phalcon\Mvc\Collection;

class Question extends Collection
{
    public $_id;

    public $question;

    public $type;

    public $choices;

    public function initialize()
    {
        $this->setSource('question');
    }

    public static function addQuestions($questions)
    {
        $success = true;
        foreach ($questions as $question) {
            $questionIns = new Question();
            $questionIns->type = $question->type;
            $questionIns->question = $question->question;
            if ($question->type == 'MC') {
                $questionIns->choices = $question->choices;
            }
            if (($success = $questionIns->save()) == false) {
                break;
            }
        }
        return $success;
    }
}