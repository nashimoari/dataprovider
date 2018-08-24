<?php


namespace nashimoari\data_provider;

/**
 *
 * @author nashimoari
 */
interface dataprovider_proto {
//    private $timeout_connection;
    
    public function initialize($data);
    public function data_get($data);
    public function data_send($data);
}
