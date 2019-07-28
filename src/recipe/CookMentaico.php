<?php

trait CookMentaico
{

    // こんぶ1枚5×5
    $konbu = 1;

    // 鰹節(g)
    $katsuo = 5;

    // 唐辛子(g)
    $redPepper = 20;

    // 料理酒(cc)
    $alcohol = 200;

    // みりん(cc)
    $mirin = 45;

    // 醤油(cc)
    $soySauce = 5;

    // 砂糖(cc)
    $sugar = 3;

    // 魚卵(g)
    $fishEgg;

    // 漬ける用の容器
    $case

    /**
     * 魚を材料に明太子を料理する
     * @param  AlaskaPollock $fish
     * @return Mentaico
     */
    public function getMentaico($fish)
    {
        // スケトウダラでなければ例外を投げる
        if (get_class($fish) !== 'AlaskaPollock') {
            throw new Exception('This fish is not AlaskaPollock');
        }

        $fishEgg = $fish->egg;

        // ケースに出汁を入れる
        $case = getDashi;
        // だしで卵をつける
        $mentaico = pickleEgg($case, $fishEgg);

        return mentaico;
    }

    public function getDashi($konbu, $katsuo, $alcohol, $mirin)
    {
        return new Dashi($konbu, $katsuo, $alcohol, $mirin);
    }

    public function pickleEgg($case, $fishEgg)
    {
        if (get_class($fish) !== 'AlaskaPollock') {
            throw new Exception('This case expect Dashi');
        } elseif($fishEgg != 150) {
            throw new Exception('Egg weight is different');
        }

        return new Mentaico();
    }
}

class Mentaico
{

}

class Dashi
{
    function __construct($konbu, $katsuo, $alcohol, $mirin)
    {
        if ($konbu != 1 || $katsuo != 5 || $alcohol != 200 || $mirin != 45)
            throw new Exception('Not appropriate quantity');
    }
}
