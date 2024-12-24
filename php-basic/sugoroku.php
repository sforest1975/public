<?php
const START_POSITION = 0;
const GOAL_POSITION = 10;

$now_pos = START_POSITION;
$roll_count = 0;
$items = [];

for ($i = 1; $i <= GOAL_POSITION - 1; $i++) {
	$items[] = ($i % 3 === 0) ? 'アイテム' : '';
}

echo 'すごろくゲームを開始します!<br>';

while ($now_pos !== GOAL_POSITION) {
	$dice = mt_rand(1, 6);

	$now_pos += $dice;
	$roll_count++;

	echo "{$roll_count}回目:{$dice}が出ました!現在{$now_pos}マス目です。<br>";
	
	if ($now_pos > GOAL_POSITION) {
		$now_pos = START_POSITION;
		echo "コールを超えたため振り出しに戻ります。<br>";
	} elseif ($now_pos === GOAL_POSITION) {
		echo 'ゴールに到達しました!<br>';
	} elseif ($items[$now_pos - 1] !== '') {
		echo 'アイテムを獲得しました!<br>';
	}
}

echo 'おめでとうございます!ゲームクリアです。';
?>