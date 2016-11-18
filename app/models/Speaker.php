<?php

use Phalcon\Mvc\Collection;

class Speaker extends Collection
{
    public function initialize()
    {
        $this->setSource('event');
    }

    public static function searchByName($name)
    {
        // Split $name by comma and blank space
        $names = [];
        $nocommas = explode(',', $name);
        foreach ($nocommas as $nocomma) {
            $nospaces = explode(' ', $nocomma);
            foreach ($nospaces as $nospace) {
                //TODO: find some ways to escape input for regex match
                array_push($names, [
                    'first_name' => '/.*' . $nospace . '.*/'
                ]);
                array_push($names, [
                    'last_name' => '/.*' . $nospace . '.*/'
                ]);
            }
        }
        return Speaker::find(
            [
                '$or' => $names
            ]
        );
    }


}