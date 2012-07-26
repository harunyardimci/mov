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

    function suggest($keyword) {

        $url = 'http://sg.media-imdb.com/suggests/' . substr($keyword,0,1) . '/' . $keyword . '.json';
        $x = json_decode($this->restClient->get($url));
        var_dump($x);

        return $x;
    }
}
