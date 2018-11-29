<?php
$str = "<p>Hello,world</p>gdsfg<br/> dsfasdg<p>Hello,<i>dfsasdgf</i> people</p><p>Hi</p>";
$strDiv = "<div class='class'><i>Blah Blah</i><div class = 'class2'><p>Hello,world</p>Lorem ipsum <div>lorem</div> ispud</div>Bla</div>";

function getPCount($str){
    preg_match_all('/(?<=\<p\>).+?(?=(\<\/p\>))/',$str,$arr);
    return $arr[0];
}

function getDivFromText($strDiv){
    $pattern = '/(?<=(\<div(\>|\s))).+(?=(\<\/div\>))/';
    $res = [];
    $i=0;
    while (preg_match($pattern,$strDiv,$arr)){
            $strDiv = $arr[0];
            $res[$i]=$arr[0];
            $i++;
    }
    return $res;
}
print_r(getDivFromText($strDiv));