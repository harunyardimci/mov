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

    const SUGGESTION_BASE_URL = 'http://sg.media-imdb.com/suggests/';
    const SEARCH_BASE_URL = 'http://www.imdb.com/xml/find?json=1&nr=1';
    //http://www.imdb.com/xml/find?json=1&nr=1&tt=on&q=lost&fb_source=message
    //http://www.imdb.com/xml/find?json=1&nr=1&nm=on&q=jeniffer+garner&fb_source=message

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

        $url = self::SUGGESTION_BASE_URL . substr($keyword,0,1) . '/' . $keyword . '.json';
        return json_decode($this->restClient->get($url),true);
    }
}
