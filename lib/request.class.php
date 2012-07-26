<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hyardimci
 * Date: 7/26/12
 * Time: 4:39 PM
 * To change this template use File | Settings | File Templates.
 */
class request
{

    private $restClient = null;

    function __construct() {

        require_once APPLICATION_PATH . 'lib/rest.class.php';

        $this->restClient = rest::getInstance();
    }

    function getByTitle($title) {
        $url = $title;
        return $this->restClient->get($url);
    }

    function freeSearch($search) {
        $url = $search;
        return $this->restClient->get($url);
    }
}
