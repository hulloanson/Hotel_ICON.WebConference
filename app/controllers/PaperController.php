<?php

class PaperController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function apiGetAllAction() {
        return self::getResponseJson(Paper::find());
    }

    public function apiGetPaperSpeakerAction() {
        return self::getResponseJson(Paper::getPaperSpeaker(
            $this->dispatcher->getParam('paperID')
        ));
    }

    public function apiGetByIDAction() {
        return self::getResponseJson(Paper::findById(
            $this->dispatcher->getParam('paperID')
        ));
    }

    public function apiGetAbstractPresentationAction() {
        return self::getResponseJson(Paper::getPresentation(
            $this->dispatcher->getParam('paperID')
        ));
    }

}

