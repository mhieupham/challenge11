<?php
function getnumberofstring($string){
    $str ='';
    $array = str_split($string);
    $array = array_count_values($array);
    foreach ($array as $value => $key){
        $str .= $key.$value;
    }
    var_dump($str);
}
getnumberofstring('aaaaaabbbbc');