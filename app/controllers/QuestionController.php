<?php

class QuestionController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function apiAddQuestionsAction() {
        $questions = json_decode($this->request->getPost('questions'));
        return self::getResponseJson(Question::addQuestions($questions));
    }

    public function apiGetAllAction() {
        return self::getResponseJson(Question::find());
    }
}

