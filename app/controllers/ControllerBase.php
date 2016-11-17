<?php


class ControllerBase extends Phalcon\Mvc\Controller
{
    public static function getResponseJson($obj) {
        return new \Phalcon\Http\Response(json_encode($obj));
    }
}