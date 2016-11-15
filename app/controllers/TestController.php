<?php

use Phalcon\Http\Response;

class TestController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
//        $test = new Test();
//        $test->test_name = "hihi";
//
//        $success = $test->save();
//        $this->view->success = $success;
//        if (($success = $test->save()) === false) {
//            $this->view->result = 'Failed to save the instance';
//        } else {
//            $this->view->result = 'Good! Saved. ';
//            $this->view->read_result = json_encode(Test::find());
//        }
        $this->view->result = 'HIhi';
    }

    public function getAction() {
        return new Response($this->request->getQuery('email'));
    }
}

