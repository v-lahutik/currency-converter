<?php

class Converter{
    
}

class CryptoConverter{
    //properties
   // public string $currencyCode;

   function __construct(public string $currencyCode){
   // $this->currencyCode= $currencyCode;

   }

    //methods
    public function convert(float $value=1): float {
        $code= $this->currencyCode;
        $url= "https://cex.io/api/ticker/$code/USD";
        $json = file_get_contents($url); 
         if ($json){
             $data = json_decode($json);
             $last = $data->last;
             return $value * $last;
         }else{
             return false;
         }
    }

}