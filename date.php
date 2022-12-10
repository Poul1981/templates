<?php

echo $tm = time();
echo "<br>";
echo date("Y-m-d H:i:s", $tm);
echo "<br>". date('n');
$daetime = "<input type=date>";
echo $daetime;

$wheather = "<body>
    <div class='container'>
        <div class='result'></div>
        <div class='button'>
            <button>Нажми</button>
        </div>
        <input type='checkbox'>
        <input type='range' min='0' max='100' step='1' class='progress-bar'>
            <div class='ranger'>
                <span>Дата начала</span>
                <input type='date' class='inputdate'>
                <span>Дата завершения</span>
                <input type='date' class='inputdate1'>
            </div>
        <button class='btn'>Кнопка</button>
    </div>
</body>";

echo $wheather;
$data = ['tom', 'bob', 'mary', 'lin', 'juli', 'iren'];
$num = 1;
foreach ($data as $d){
    echo "<p>$num  $d  <button class='mybtn' id=$num>Добавить</button></p>";
    $num++;
}

echo "<link rel='stylesheet' href='style.css'>";
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>";
echo "<script src='weathr.js'></script>";