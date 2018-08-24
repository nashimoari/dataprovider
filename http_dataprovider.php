<?php

namespace nashimoari\data_provider;

/**
 * Description of http_dataprovider
 *
 * @author nashimoari
 */
class http_dataprovider {
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
