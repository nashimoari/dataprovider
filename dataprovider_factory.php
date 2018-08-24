<?php

namespace nashimoari\data_provider;

use Exception;

Class dataprovider_factory {
  Public static function create_dataprovider($type) {
        if ($type=='SOAP') {
            return new soap_dataprovider();
        }
        
        if ($type=='TELNET') {
            return new telnet_dataprovider();
        }

        if($type='TCP') {
            return new tcp_dataprovider();
        }
        
        if ($type=='HTTP') {
            return new http_dataprovider();
        }
        
        throw new Exception('No data provider for this type');
  }
}
