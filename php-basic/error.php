<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
         error_log( 'エラー' . "\n", 3, 'C:\Users\sfore\Local Sites\samurai-sample\logs\php\error.log' );

        error_reporting(0);
        echo '全エラー無効' . '<br>';

        // すべて無効のため警告が出ない
        echo $dummy1;

        error_reporting(E_ALL);
        echo '全エラー有効';

        // すべて有効のため警告が出る
        echo $dummy2;
        ?>
    </p>
</body>

</html>