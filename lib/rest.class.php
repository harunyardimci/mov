<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hyardimci
 * Date: 7/26/12
 * Time: 3:00 PM
 * To change this template use File | Settings | File Templates.
 */

class rest {

    private static $instance = null;

    private $handle = null;

    private function __construct() {

        $this->handle = curl_init();
        $this->setHeaders();
    }

    public static function getInstance () {
        if (self::$instance == null) {
            self::$instance = new rest();
        }
        return self::$instance;
    }

    public function setOption() {

        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
        );
        curl_setopt($this->handle, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($this->handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($this->handle, CURLOPT_SSL_VERIFYPEER, false);
    }

    public function get($url) {
        $this->request('GET',$url);
    }

    public function post ($url, $data) {

    }

    private function request($method, $url, $data = array()) {

        //set url
        curl_setopt($this->handle, CURLOPT_URL, $url);

        switch($method)
        {
            case 'GET':
                break;

            case 'POST':
                curl_setopt($this->handle, CURLOPT_POST, true);
                curl_setopt($this->handle, CURLOPT_POSTFIELDS, $data);
                break;

            case 'PUT':
                curl_setopt($this->handle, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($this->handle, CURLOPT_POSTFIELDS, $data);
                break;

            case 'DELETE':
                curl_setopt($this->handle, CURLOPT_CUSTOMREQUEST, 'DELETE');
                break;
        }


        $response = curl_exec($this->handle);
        $code = (int)curl_getinfo($this->handle, CURLINFO_HTTP_CODE);
        if ($code < 200 && $code >= 300 ) {
            return false;
        }
        return $response;
    }
}