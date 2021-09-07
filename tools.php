<?php

class RedirectUrl
{
    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }

}

class CustomeDateFormat{

    private $format = 'd/m/y';

    public function date($date)
    {
        return new Date($date)->format($this->format);
    }
}

class TokenGenerator{

    private $max = 10;

    public function token(){

        return random_bytes($this->max);
    }
}