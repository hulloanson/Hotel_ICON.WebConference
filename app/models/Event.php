<?php

use Phalcon\Mvc\Collection;

class Event extends Collection
{
    /**
     * @var string $name Name of the event
     */
    public $name;

    /**
     * @var \MongoDB\BSON\UTCDateTime $begin_time Start time of the event
     */
    public $begin_time;

    /**
     * @var \MongoDB\BSON\UTCDateTime $end_time End time of the event
     */
    public $end_time;

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

    public static function deleteAll() {
        foreach (Test::find() as $test) {
            $test->delete();
        }
    }
}