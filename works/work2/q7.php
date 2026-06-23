<?php

// 各人の得点とその評価を表示するコードを書いてください。評価基準は以下とします:
// 90以上: "優"
// 80以上90未満: "良"
// 70以上80未満: "可"
// 70未満: "不可"

// 出力例 「johnの評価は良です」

$scores = array("John" => 85, "Jane" => 92, "Jim" => 78);
foreach ($scores as $name => $score) {
    // 得点に応じて評価を判定
    $grade = match (true) {
        $score >= 90 => "優",
        $score >= 80 => "良",
        $score >= 70 => "可",
        default      => "不可",
    };

    // 結果を出力
    echo "{$name}の評価は{$grade}です。" . PHP_EOL;
}
