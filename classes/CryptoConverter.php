<?php

class Converter{
    
}

class CryptoConverter{
    //properties
    public $currencyCode;

   function __construct(string $currencyCode){
    $this->currencyCode= $currencyCode;

   }

    //methods
    public function convert(float $value) {
        $code= $this->currencyCode;
        $api= "https://cex.io/api/ticker/$crypto/USD";
        $json = file_get_contents($url);
        echo $json;

    }
}