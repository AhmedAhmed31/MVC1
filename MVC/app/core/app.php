<?php
class app
{
    protected $controller ='home';
    protected $method ='index';
    protected $prams=[];

public function __construct()
{
        $url=($this->parseUrl());
}
    public function parseUrl()
    {
        if (isset($_GET['url']))
        {
            return $url =explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}