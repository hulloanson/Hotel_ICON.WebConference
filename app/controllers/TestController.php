<?php

class TestController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        // Test whether the mongo manager can be obtained
//        $this->view->setVar('mongo', json_encode($this->di['mongo']));

        // Now for the test model
        $test = new Test();
        $test->test_name = "hihi";

        $success = $test->save();
        $this->view->success = $success;
        if (($success = $test->save()) === false) {
            $this->view->result = 'Failed to save the instance';
        } else {
            $this->view->result = 'Good! Saved. ';
            $this->view->read_result = json_encode(Test::find());
        }


    }

}

