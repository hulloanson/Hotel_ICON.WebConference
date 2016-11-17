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

    public function apiIDGetAction($id) {
        return self::getResponseJson(Event::findById($id));
    }

    public function searchTitleAction($title) {
        return self::getResponseJson(Event::searchByTitle($title));
    }

    public function getByDateAction($year, $month, $day) {
        return self::getResponseJson(Event::getByDate($year, $month, $day));
    }
}