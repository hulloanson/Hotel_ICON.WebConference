<?php


class EventController extends ControllerBase
{
    public function indexAction()
    {

    }

    public function apiAllAction()
    {
        $this->view->haha = 'hehe';
    }

    public function apiIDGetAction() {
        return self::getResponseJson(Event::findById(
            $this->dispatcher->getParam('id')
        ));
    }

    public function apiSearchTitleAction() {
        return self::getResponseJson(Event::searchByTitle(
            $this->dispatcher->getParam('title')
        ));
    }

    public function apiGetByDateAction() {
        return self::getResponseJson(Event::getByDate(
            $this->dispatcher->getParam('year'),
            $this->dispatcher->getParam('month'),
            $this->dispatcher->getParam('day')
        ));
    }
}