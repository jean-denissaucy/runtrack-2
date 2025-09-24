<?php
function leetSpeak($str) {
    return strtr($str,[

    'A'=>'4','a'=>'4',
    'B'=>'8','b'=>'8',
    'E'=>'3','e'=>'8',
    'G'=>'6','e'=>'3',
    'L'=>'1','l'=>'1',
    'S'=>'5','s'=>'5',
    'T'=>'7','t'=>'7'
    ]);
}
//EXEMPLE
echo leetSpeak ("Salut les amis,TEST Gagné !");
?>