
<?php
$neme = "SHOHEI";
if ($neme = "SHOHEI") {
    echo "私は あなたの名前 です";
} else {
    echo "あなたの名前ではありません";
}

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

$fruits = array("apple", "orange", "grape", "pineapple", "peach");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

$start = 1;
$end = 100;
for ($i = 1; $i <= 100; $i++) {
    if( ($i % 5) == 0){
        echo $i;
    }
}