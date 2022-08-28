<?php
//あいさつ(greeting)関数
    function greeting($hour) { //受け取る値の変数名
        $result = '';
        if (6 <= $hour && $hour < 12) {
            $result = 'おはよう';
        } elseif ( 12 <= $hour && $hour < 18 ) {
            $result = 'こんにちは';
        } else {
            $result = 'こんばんわ';
        }
        return $result;
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <form action="index1.php" method ="POST">
            <label for="target_name">
                名前: <input type="text" name="target_name">
            </label>
            <input type="submit" value="送信">
        </form>
<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("H");
?>
        <p>今は<?php echo $now_hour; ?>時です。</p>
        <p><?php echo greeting($now_hour);//渡す値の変数名  ?>、<?php echo $_POST['target_name']; ?></p>

    </body>
</html>