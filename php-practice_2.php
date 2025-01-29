<?php
// Q1 tic-tac問題

echo '1から100までのカウントを開始します。';
echo "\n";

$i = 1;
while ($i <= 100) {

    if ($i % 20 == 0) {
        echo 'tictac';
    } elseif ($i % 4 == 0) {
        echo 'tic';
    } elseif ($i % 5 == 0) {
        echo 'tac';
    } else {
        echo $i;
    }
    $i++;
    echo "\n";
}


// Q2 多次元連想配列

    // 問題１

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

foreach ($personalInfos as $key) {
    if ($key['name'] == 'Bさん') {
        echo $key['name'].'の電話番号は'.$key['tel'].'です。';
        break;
    }
}

    //問題２

    foreach ($personalInfos as $index => $key) {
        echo ($index + 1) . '番目の' . $key['name'] . 'のメールアドレスは' . $key['mail'] . 'で、電話番号は' . $info['tel'] . 'です。' . "\n";
    }

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($kyouka)
    {
        return $kyouka.'の授業に出席しました。学籍番号：';
    }
}

$student = new Student(120, '久保');

echo "学籍番号".$student->studentId."の生徒は".$student->studentName."です。";


// Q4 オブジェクト-2

    //class部分は省略しています

$kubo = new Student(120, '久保');
$kubo->attend('PHP');

echo $kubo->studentName."は".$kubo->attend('PHP').$kubo->studentId;


// Q5 定義済みクラス

    //問題１

$oneMonthAgo = strtotime("-1 month");
echo date("Y-m-d", $oneMonthAgo);

    //問題２

$date1 = new DateTime(); 
$date2 = new DateTime('1992-04-25');

$hikizan = $date2->diff($date1);

echo 'あの日から' . $hikizan->days . '日経過しました。';

?>