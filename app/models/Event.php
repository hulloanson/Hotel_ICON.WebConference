<?php

use Phalcon\Mvc\Collection;

class Event extends Collection
{
    /**
     * @var MongoDB\BSON\ObjectID $_id ObjectID ot the entry
     */
    public $_id;

    /**
     * @var string $name Name of the event
     */
    public $name;

    /**
     * @var string $begin_time Start time of the event
     */
    public $begin_time;

    /**
     * @var string $end_time End time of the event
     */
    public $end_time;

    /**
     * @var string $type The type of the event
     */
    public $type;

    /**
     * @var string Venue of the event
     */
    public $venue;

    public function initialize()
    {
        $this->setSource('event');
    }

    public static function getAll()
    {
        return Event::find([[], 'order' => ['begin_time' => 1]]);
    }

    public static function getEventByDate($date)
    {

    }

    public static function deleteAll()
    {
        foreach (Test::find() as $test) {
            $test->delete();
        }
    }

    public static function initnSave($eventObj)
    {
        $event = new Event();
        $event->_id = new MongoDB\BSON\ObjectID();
        $event->name = $eventObj->name;
        $event->type = $eventObj->type;
        $event->begin_time = $eventObj->begin_time;
        $event->end_time = $eventObj->end_time;
        $event->venue = $eventObj->venue;
        $event->save();
    }

    public static function searchByTitle($title)
    {
        //TODO: find some ways to escape input for regex match
        $events = Event::find([
            [
                'title' => '/.*' . $title . '.*/'
            ]
        ]);

        return $events;
    }

    public static function getByDate($year, $month, $day)
    {
        $date = $year . '-' . $month . '-' . $day;
        //TODO: find some ways to escape input for regex match
        return Event::find(
            [
                'or' => [
                    'begin_time' => '/^' . $date . '.*/',
                    'end_time' => '/^' . $date . '.*/',
                ]
            ]
        );
    }
}