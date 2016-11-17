<?php

use \Phalcon\Mvc\Collection;

class Test extends Collection
{
    public $test_name;

    public function initialize()
    {
        $this->setSource('test');
    }

    public static function testRegexSearch() {
        return self::find(
            [
                'test_name' => '/.*hi.*/'
            ]
        );
    }
}