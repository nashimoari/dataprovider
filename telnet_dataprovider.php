<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace nashimoari\data_provider;

/**
 * Description of telnet_dataprovider
 *
 * @author nashimoari
 */
class telnet_dataprovider implements dataprovider_proto {
    public function initialize($data) {
        // initialize
    }
    
    public function data_get($data) {
      // get data
    }
 
    public function data_send($data) {
        // send data
    }

    private function __wakeup() {
        // restore connection
    }
}
