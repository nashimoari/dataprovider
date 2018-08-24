<?php

namespace nashimoari\data_provider;

/**
 * Description of soap_dataprovider
 *
 * @author nashimoari
 */
class soap_dataprovider implements dataprovider_proto {
    public function initialize($data) {
        // initialize
    }
    
    public function data_get($data) {
      // get data
    }
    
    public function data_send($data) {
        return $this->data_get($data);
    }
 
}

