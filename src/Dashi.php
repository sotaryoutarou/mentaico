<?php
/**
 * 出汁を表現するクラス
 */
class Dashi
{
    function __construct($konbu, $katsuo, $alcohol, $mirin)
    {
        // 材料を計り一致していなかったら例外を投げる
        if ($konbu != 1 || $katsuo != 5 || $alcohol != 200 || $mirin != 45)
            throw new Exception('Not appropriate quantity');
    }
}
