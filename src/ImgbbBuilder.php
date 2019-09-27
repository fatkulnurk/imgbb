<?php

class ImgbbBuilder
{

    var $apikey = null;
    var $imageBase64 = null;
    var $name = null;

    public function __construct()
    {
    }

    /**
     * @param null $apikey
     * @return ImgbbBuilder
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;
        return $this;
    }

    /**
     * @param null $imageBase64
     * @return ImgbbBuilder
     */
    public function setImageBase64($imageBase64)
    {
        $this->imageBase64 = $imageBase64;
        return $this;
    }

    /**
     * @param null $name
     * @return ImgbbBuilder
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function save()
    {
        return new Imgbb($this->apikey, $this->imageBase64, $this->name);
    }
}