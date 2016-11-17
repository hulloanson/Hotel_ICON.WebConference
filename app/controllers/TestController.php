<?php

use Phalcon\Http\Response;

class TestController extends ControllerBase
{

    public function indexAction()
    {
        $test = new Test();
        $test->test_name = "hihi";

        $success = $test->save();
        $this->view->success = $success;
        if (($success = $test->save()) === false) {
            $this->view->result = 'Failed to save the instance';
//            new Response('Failed to save the instance');
        } else {
            $this->view->result = 'Good! Saved.<br><br>';
            $this->view->read_result = json_encode(Test::find());
        }
    }

//    public function getAction() {
//        return new Response($this->request->getQuery('email'));
//    }

    public function postAction()
    {
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email');
            return self::getResponseJson([
                'email' => $email
            ]);
        }
    }

    public function findAllAction()
    {
        return self::getResponseJson(Test::find());
    }

    public function regexTestAction()
    {
        return self::getResponseJson(Test::testRegexSearch());
    }

    public function testRouterGetAction()
    {
        $email = $this->request->get('email');
        return self::getResponseJson([
            'email' => $email
        ]);
    }

    public function testRouterPostAction()
    {
        $email = $this->request->getPost('email');
        return self::getResponseJson([
            'email' => $email
        ]);
    }
}

