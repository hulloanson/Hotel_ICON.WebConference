<?php


class SpeakerController extends ControllerBase
{

    public function apiGetAllAction()
    {
        return self::getResponseJson(Speaker::find());
    }

    public function apiGetByIDAction()
    {
        return self::getResponseJson(Speaker::findById(
            $this->dispatcher->getParam('id')
        ));
    }

    public function apiGetSpeakerAbstractAction()
    {
        return self::getResponseJson(Paper::getBySpeaker(
            $this->dispatcher->getParam('id')
        ));
    }

    public function apiSearchSpeakerByNameAction()
    {
        return self::getResponseJson(Speaker::searchByName(
            $this->dispatcher->getParam('name')
        ));
    }

}