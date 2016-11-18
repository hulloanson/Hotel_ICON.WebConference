<?php


use Phalcon\Mvc\Collection;

class Presentation extends Collection
{
    public function initialize() {
        $this->setSource('presentation');
    }

    public static function getByPaper($paperID) {
    }

    public static function getEvent($presentID)
    {
        $eventID = self::findById($presentID)->event_id;
        return Event::findById($eventID);
    }

    public static function getSpeaker($presentID) {
        $speakerID = self::findById($presentID)->speaker_id;
        return Speaker::findById($speakerID);
    }

    public static function getPaper($presentID) {
        $paperID = self::findById($presentID)->paper_id;
        return Paper::findById($paperID);
    }


}