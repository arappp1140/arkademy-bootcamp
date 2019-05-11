<?php
function create_random($length)
{
    $data = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $string = '';
    for($i = 0; $i < $length; $i++) {
        $pos = rand(0, strlen($data)-1);
        $string .= $data{$pos};
    }
    return $string;
}

echo create_random(32);
print("<br>");
echo create_random(32);
?>