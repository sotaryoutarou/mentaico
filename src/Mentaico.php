<?php
/**
 * 明太子を表現するクラス
 */
class Mentaico
{
    function __construct($tapper, $fishEgg)
    {
        // タッパーの中に出汁が入っていて、魚卵が150gあることを確認
        if ($fishEgg != 150 && get_class($tapper) === 'Dashi') {
            throw new Exception('Egg weight is different');
        }
    }
}
