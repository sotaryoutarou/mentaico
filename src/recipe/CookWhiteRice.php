<?php

require_once(dirname(__FILE__) . '/../Rice.php');

trait CookWhiteRice
{
    // 白米(合)
    private $rice = 1;

    // 水(cc)
    private $water = 200;

    /**
     * 魚を材料に明太子を料理する
     * @param  AlaskaPollock $fish
     * @return Mentaico
     */
    public function getRice()
    {
        return new Rice($this->rice, $this->water);
    }
}
