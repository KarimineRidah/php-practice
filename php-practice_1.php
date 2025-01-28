<?php

//Question 1

$message = '渡邉';
$newMessage = '私の名前は「' . $message . '」です。';

echo $newMessage; 



//Question 2

$x = 5;
$y = 4;
$num = $x * $y;

echo($num);
echo "\n";
echo($num / 2);



//Question 3 

$time = '現在時刻は、' . date("y年m月d日 H時i分s秒") . 'です。';

echo($time);



//Question 4

$device = 'Linux';
if ($device == 'Windows') {
    echo '使用OSは、windowsです。';
} if ($device == 'Mac') {
    echo '使用OSは、Macです。';
} else {
    echo 'どちらでもありません。';
}




//Quesiton 5

$age = 22; 
if ($age < 18) {
    echo '未成年です。';
} if ($age >= 18 ){
    echo '成人です。';
}


//Question 6

$Kanto = ['東京都', '千葉県', '神奈川県', '埼玉県', '栃木県', '茨城県', '群馬県'];
echo $Kanto[3].'と'.$Kanto[4].'は関東地方の都道府県です。';


//Question 7

$Prefs = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市', 
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    ];

foreach ($Prefs as $value) {
    echo $value . "\n";
}


//Question 8

foreach ($Prefs as $key => $value) {
    if ($key === '埼玉県') {
        echo $key . "の県庁所在地は" . $value . "です。";
    }
}


//Question 9

$Prefs ['北海道'] = '札幌市';
$Prefs ['沖縄県'] = '那覇市';

foreach ($Prefs as $key => $value) {
    if ($key == '北海道' || $key == '沖縄県') {
        echo $key . 'は関東地方ではありません。' ."\n";
    } else {
        echo $key . 'の県庁所在地は、' . $value . 'です。' ."\n";
    }
}


//Question 10

function hello($name)
{
    echo $name . 'さん、こんにちは。'. "\n";
}

hello('渡邉');
hello('久保');


//Question 11

function calcTaxInPrice($price)
{
    $taxInPrice = $price * 1.1;
    return $price . '円の商品の税込み価格は' . $taxInPrice . '円です。';
}

$price = 1000;
echo calcTaxInPrice($price);


//Question 12

function distunguishNum($num)
{
if ($num % 2 == 1) {
    return $num . 'は奇数です。';
} if ($num % 2 == 0) {
    return $num . 'は偶数です。';
}
}
echo distunguishNum(3);
echo distunguishNum(100);


//Question 13

function evaluateGrade($grade)
{
switch ($grade) {
    case 'A':
    case 'B':
        return '合格です。';
        break;

    case 'C':
        return '合格ですが、追加課題があります。';
        break;

    case 'D':
        return '不合格です。';
        break;

    default:
        return '判定不明です。講師に問い合わせてください。';
        break;
}
}

echo evaluateGrade('A');
echo "\n";
echo evaluateGrade('D');