<?php


class SearchController extends ControllerBase
{
    public function apiSearchAction() {
        $searchString = $this->dispatcher->getParam('searchString');
        // TODO: implement a general search function
    }
}