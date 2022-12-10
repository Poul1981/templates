<?php
echo "<style>
        body{
            background-color: rgba(76,228,242,0.68);
        }  
      </style>";
$array = [
    "key_1" => 1,
    "key_2" => 2,
    "key_3" => 3,
    "key_4" => 5,
    "key_5" => 6,
];
$my_array = [3=>5, 6,7,8,9,12];
print_r($my_array);echo "<br>";
//var_dump($array);
$mas = [];
foreach ($array as $key => $value){
    echo "$value<br>";
    $mas[$key] = $mas[$key] + 1;
}
print_r($mas);
$keys = array_keys($array);
print_r($keys);

echo date('l');echo "<br>";

$kitten = ['table'=>2, 'knives'=>6, 'spoons'=>7];
echo $kitten['table']; echo '<br>';
foreach ($kitten as $key=>$value){
    echo "$key - $value<br>";
}

$anymass = ['on', 'off', 'on', 'off', 'on', 'on', 'on', 'on', 'oops', 'oops'];
$res = [];
foreach ($anymass as $item){
    $res[$item] = $res[$item] + 1;
}
print_r($res);echo "<br>";
print("cecfece");
echo '
<form action="foo.php" method="post">
  <label for="username">Имя:</label>
  <input type="text" name="username" id="username"><br>

  <label for="email">Email:</label>
  <input type="text" name="email" id="email"><br>

  <label for="feedback">Отзыв</label>
  <textarea name="feedback" id="feedback" placeholder="feedback"></textarea><br>

  <input type="submit" name="submit" value="Отправь меня!">
</form>
';
