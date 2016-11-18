<?php

use \Phalcon\Mvc\Collection;

class Paper extends Collection
{
    public $_id;

    public $title;

    public $author;

    public $abstract;

    public $speaker_id;


    public function initialize() {
        $this->setSource('event');
    }

    public static function getBySpeaker($speakerID) {
        $objectID = new MongoDB\BSON\ObjectID($speakerID);
        return self::find(
            [
                'speaker_id' => $objectID
            ]
        );
    }

    public static function getPaperSpeaker($paperID) {
        $speakerID = self::findById($paperID)->speaker_id;
        return Speaker::findById($speakerID);
    }

    public static function getPresentation($paperID)
    {
        $objectID = new MongoDB\BSON\ObjectID($paperID);
        return Presentation::findFirst([
            'paper_id' => $objectID
        ]);
    }

}