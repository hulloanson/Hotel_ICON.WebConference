<?php


class PresentationController extends ControllerBase
{
    public function apiGetAllAction() {
        return self::getResponseJson(Presentation::find());
    }

    public function apiGetEventAction() {
        return self::getResponseJson(Presentation::getEvent(
            $this->dispatcher->getParam('presentID')
        ));
    }

    public function apiGetSpeakerAction() {
        return self::getResponseJson(Presentation::getSpeaker(
            $this->dispatcher->getParam('presentID')
        ));
    }

    public function apiGetAbstractAction() {
        return self::getResponseJson(Presentation::getPaper(
            $this->dispatcher->getParam('presentID')
        ));
    }
}