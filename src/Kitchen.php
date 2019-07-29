<?php
require_once 'AlaskaPollock.php';
require_once(dirname(__FILE__) . '/recipe/CookMentaico.php');
require_once(dirname(__FILE__) . '/recipe/CookWhiteRice.php');
/**
 * キッチンを表現するクラス
 * 材料を使って料理する
 */
class Kitchen
{
    use CookMentaico;
    use CookWhiteRice;

    // 明太子ごはんを調理する
    public function getMentaicoRice()
    {
        $tara = new AlaskaPollock();
        $mentaico = $this->getMentaico($tara);

        $rice = $this->getRice();

        if (get_class($mentaico) === 'Mentaico' && get_class($rice) === 'Rice') {
            print('明太子ご飯の出来上がり！');
        }
    }
}
