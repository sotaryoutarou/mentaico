<?php

require_once(dirname(__FILE__) . '/../Rice.php');

trait CookWhiteRice
{
    // 白米(合)
    private $rice = 1;

    // 水(cc)
    private $water = 200;

    // お米を炊く
    public function getRice()
    {
        return new Rice($this->rice, $this->water);
    }
}
