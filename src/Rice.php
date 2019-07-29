<?php
/**
 * 白米を示すクラス
 */
class Rice
{
    function __construct($rice, $water)
    {
        if ($rice == 1 && $water != 200)
            throw new Exception('Not appropriate quantity');
    }
}
