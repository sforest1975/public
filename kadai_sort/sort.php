<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way(array $array, bool $order) : array {
			if ($order) {
				sort($array);
			} else {
				rsort($array);
			}

			return $array;
		}

		function echo_result(array $array) : void {
			foreach ($array as $result) {
				echo $result . '<br/>';
			}
		}

		$nums = [ 15, 4, 18, 23, 10 ];

		echo '昇順にソートします。<br/>';
		foreach (sort_2way($nums, TRUE) as $result) {
			echo $result . '<br/>';
		}

		echo '降順にソートします。<br/>';
		foreach (sort_2way($nums, FALSE) as $result) {
			echo $result . '<br/>';
		}
        ?>
    </p>
</body>

</html>