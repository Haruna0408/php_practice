<?php
// Your code here!
//Tech Academy PHP

    print 'こんにちは';

    $ichinichi_no_byousuu = 24 * 60 * 60;
    print $ichinichi_no_byousuu; //printで出力してデータを確認

    $ichinichi_no_zikan = 24;
    $ichinichi_no_hun = 60;
    $ichinichi_no_byou = 60;

    $ichinichi_no_byousuu = $ichinichi_no_zikan * $ichinichi_no_hun * $ichinichi_no_byou;
    print $ichinichi_no_byousuu;

    $num = 1.2;
    print $num;

    $str1 = 'テキスト1';
    $str2 = 'テキスト2';
    print $str1 . PHP_EOL;// . PHP_EOL 改行ができる
    print $str2 . PHP_EOL;

    //配列
    $fruits = array('リンゴ', 'バナナ', 'オレンジ');
    print $fruits[2] . PHP_EOL;
    var_dump($fruits);

    //連想配列
    $fruits = array(
        'apple' => 'リンゴ',
        'banana' => 'バナナ',
        'orange' => 'オレンジ',
    );
    var_dump($fruits);


    $str1 = "文字列1";
    $str2 = " + 文字列2";
    $str = $str1 . $str2 . PHP_EOL; // $strは "文字列1 + 文字列2" となる
    print $str;

    //改行ver.
    $str1 = "文字列1";
    $str2 = " + 文字列2";
    $str = $str1 . PHP_EOL . $str2 . PHP_EOL; // $strは "文字列1 + 文字列2" となる
    print $str;

    //暗黙の型変換
    $num = 10 + "20";
    $str = 10 . "です";
    print $num . PHP_EOL;
    print $str . PHP_EOL;


    //条件分岐
    if (10 > 5) {
        print 'ここだけ表示される' . PHP_EOL;
    } else {
        print 'ここだけ表示されない' . PHP_EOL;
    }

    if (10 <= 5) {
        print 'ここには絶対来ない' . PHP_EOL;
    }

    $number = mt_rand() % 10;
    if ($number < 3) {
        print $number . 'は3より小さい数' . PHP_EOL;
    } elseif ($number < 6) {
        print $number . "は3以上で6より小さい数" . PHP_EOL;
    } elseif ($number < 8){
        print $number . 'は6以上で8より小さい数' . PHP_EOL;
    } else {
         print $number . 'は8か9しか来ません' . PHP_EOL;
    }


    //繰り返し(ループ) while文
    //ランダムな数値（0 〜 9）で、9が出るまで繰り返す
    $number = 0; //変数の初期化

    while ($number != 9) { // 9まで繰り返す
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
    }

    //9が出るまで何回かかったかカウントする
    //初期値を設定
    $count = 0;
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
        $count++; //1だけ繰り上がる演算子
    }
    print '9が出るまで' . $count . '回かかった。' . PHP_EOL;


    //回数を指定して繰り返す。 for文
    for ($i = 0; $i <10; $i++) { //(繰り返し変数の初期化; 繰り返し変数の条件; 繰り返し変数の増加) | 0から9回目まで（計10回）繰り返す
        print $i . '回目' . PHP_EOL;
    }

    //for文は配列と相性が良い
    $fruits = array('りんご', 'バナナ', 'オレンジ', 'ブドウ', '桃');
    $count = count($fruits); //配列(配列・連想配列)の要素の数をカウントする関数
    for ($i = 0; $i < $count; $i++) {
        echo $i , "回目:" , $fruits[$i] , PHP_EOL;
    }

    //関数を定義
    function sum() {
        $result = 0;
        for ($i = 1; $i <= 9; $i++) {
            $result = $result + $i;
        }
        echo $result , PHP_EOL;
    }
    //関数を呼び出す
    sum(); // ここで関数が実行され1~9の足し算結果が表示される
    sum();
    sum();

    //関数に引数（ひきすう）を渡す
    function sum1($a, $b) { //$aから$bまでの不特定な数の足し算を行う
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result = $result + $i;
        }
        echo $result , PHP_EOL;
    }
    sum1(1, 9);
    sum1(1, 1000);
    sum1(1000, 9999);

    //関数を呼び出す度に表示させるのではなく、結果($result)の値を変数として持ちたいとき
    function sum2($a, $b) {
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result = $result + $i;
        }
        return $result;
    }
    //関数を呼び出す
    $sum1 = sum2(1, 9);
    $sum2 = sum2(1, 1000);
    $sum3 = sum2(1000, 9999);

?>
