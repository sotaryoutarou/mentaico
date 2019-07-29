<?php
/**
 * 白米を表現するクラス
 */
class Rice
{
    function __construct($rice, $water)
    {
        // 1合の時は200cc以外でExceptinを投げる
        if ($rice == 1 && $water != 200)
            throw new Exception('Not appropriate quantity');
    }
}
