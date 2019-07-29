# mentaico

![明太子ご飯！！！](img/mentaicoRice.jpg)

## プロジェクト概要

美味しい明太子ご飯を作る

## 実行方法

```sh
 $ php MentaicoRice.php
```

## クラス説明

### Fish

生物学的分類としての魚を表すクラス
gadidae の親クラス

### Gadidae

生物学的分類としてのタラを表すクラス
alaskaPollock の親クラス

### AlaskaPollock

生物学的分類としてのスケトウダラを表すクラス

### Mentaico

スケトウダラの卵巣を唐辛子などで漬け込んだもの。

### Rice

正義の味方白米

日本人たるもの白米を食べなければ元気が出ない

### Dashi

明太子を漬ける出汁

鰹節をしっかりと効かせること

### Mentaico

調理ずみの明太子を表す
炭水化物との相性が抜群

### Kitchen

調理の処理を実行する

## trait

### recipe

レシピディレクトリ、traitでレシピを記述しておく

#### CookMentaico

明太子の作り方を表すtrait
[参照](https://www.orangepage.net/daily/284)

#### CookWhiteRice

お米の炊き方を表すtrait
[参照](https://cookpad.com/cooking_basics/13326)
