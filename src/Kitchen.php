<?php
/**
 * キッチンを示すクラス
 * 材料を使って料理する
 */

require_once 'Gadidae.php';
require_once 'recipe/CookMentaico.php';

class Kitchen
{
    use CookMentaico;

    function getMentaicoRice(){
        $mentaico = getMentaico();

        if(get_class($mentaico) == 'mentaico') {
            print ('明太子の出来上がり！');
        }
    }
}
