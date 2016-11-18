<?php

class SurveyController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function apiSubmitAction()
    {
        $survey = json_decode($this->request->getPost('survey'));
        return self::getResponseJson([
            'success' => Survey::initSave($survey)
        ]);
    }

    public function apiGetAllAction() {
        return self::getResponseJson(Survey::find());
    }

    public function apiGetByEmailAction() {
        return self::getResponseJson(Survey::getByEmail(
            $this->dispatcher->getParam('email')
        ));
    }
}

