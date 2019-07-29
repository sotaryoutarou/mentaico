<?php

require_once(dirname(__FILE__) . '/../Dashi.php');
require_once(dirname(__FILE__) . '/../Mentaico.php');

trait CookMentaico
{
    // こんぶ1枚5×5
    private $konbu = 1;

    // 鰹節(g)
    private $katsuo = 5;

    // 唐辛子(g)
    private $redPepper = 20;

    // 料理酒(cc)
    private $alcohol = 200;

    // みりん(cc)
    private $mirin = 45;

    // 醤油(cc)
    private $soySauce = 5;

    // 砂糖(cc)
    private $sugar = 3;

    // 魚卵(g)
    private $fishEgg;

    // 漬ける用の容器
    private $tapper;

    public function getMentaico($fish)
    {
        // スケトウダラでなければ例外を投げる
        if (get_class($fish) !== 'AlaskaPollock') {
            throw new Exception('This fish is not AlaskaPollock');
        }

        // スケトウダラを捌いて魚卵を取り出す
        $this->fishEgg = $fish->egg;

        // ケースに出汁を入れる
        $tapper = $this->getDashi($this->konbu, $this->katsuo, $this->alcohol, $this->mirin);
        // だしで卵をつける
        $mentaico = $this->pickleEgg($this->tapper, $this->fishEgg);

        return $mentaico;
    }

    // 明太子を漬ける出汁を作る
    public function getDashi($konbu, $katsuo, $alcohol, $mirin)
    {
        return new Dashi($konbu, $katsuo, $alcohol, $mirin);
    }

    // 出汁で魚卵を漬ける
    public function pickleEgg($tapper, $fishEgg)
    {
        return new Mentaico($tapper, $fishEgg);
    }
}
