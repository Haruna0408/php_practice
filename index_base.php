<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p><?php echo '<p>ここにPHPコードを埋め込む。</p>'; ?></p>


<?php
    date_default_timezone_set('Asia/Tokyo');//時刻をその地域に合わせる関数 最初からPHPが定義している
    $now = date("Y/m/d H:i:s");
?>
        <p><?php echo $now; ?></p>

<!-- if文 -->
<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("H");//現在の時間を取得
    echo $now_hour;
?>
        <p>今は<?php echo $now_hour; ?>時です。</p>
<?php if ( 6 <= $now_hour && $now_hour < 12) {
?>
        <p>おはよう、太郎さん。</p>
<?php } elseif (12 <= $now_hour && $now_hour < 18) { ?>
        <p>こんにちは、太郎さん。</p>
<?php } else { ?>
        <p>こんばんは、太郎さん。</p>
<?php }?>


<!-- //for文 -->
        <ul>
<?php for($i = 1; $i < 10; $i++) { ?>
            <li>
    <?php echo '3 x' . $i . '=' . (3 * $i); ?>
            </li>
<?php } ?>
        </ul>


    </body>
</html>