<?php
/**
 * キッチンを示すクラス
 * 材料を使って料理する
 */

require_once 'AlaskaPollock.php';
require_once(dirname(__FILE__) . '/recipe/CookMentaico.php');

class Kitchen
{
    use CookMentaico;

    public function getMentaicoRice()
    {
        $tara = new AlaskaPollock();
        $mentaico = $this->getMentaico($tara);

        if(get_class($mentaico) == 'Mentaico') {
            print ('明太子の出来上がり！');
        }
    }
}
