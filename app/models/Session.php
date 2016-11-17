<?php

use \Phalcon\Mvc\Collection;

class Session extends Collection
{
    public function initialize() {
        $this->setSource('event');
    }

    public static function getByEventID($eventID) {

    }

    public static function getBySpeakerID($speakerID) {

    }

    public static function getByTime($time_range_start, $time_range_end) {

    }
}