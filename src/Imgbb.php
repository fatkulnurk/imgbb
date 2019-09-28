<?php

namespace FatkulNurk\Imgbb;

class Imgbb
{
    var $endPoint = "https://api.imgbb.com/1/upload";
    var $curl;

    public function __construct($apiKey, $imageBase64, $name)
    {

        return $this->curl($apiKey, $imageBase64, $name);
    }

    private function curl($apiKey, $image, $name)
    {
        if (!empty($name) && $name != null) {
            $fields = [
                'key' => $apiKey,
                'image' => $image,
                'name' => $name
            ];
        } else {
            $fields = [
                'key' => $apiKey,
                'image' => $image,
            ];
        }

        //open connection
        $this->curl = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($this->curl,CURLOPT_URL, $this->endPoint);
        curl_setopt($this->curl,CURLOPT_POST, count($fields));

        $result = curl_exec($this->curl);

        return $result;
    }

    public function __destruct()
    {
        curl_close($this->curl);
    }

}