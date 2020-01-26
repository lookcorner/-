<?php
//解密QQ算法
//有一个女神OR男神你想要QQ号，但是美女or男神不想那么轻易给你给你一串数字需要你计算得出QQ号，63175824
//规则为删除第一个数字，将第二个数放到末尾、在将第三个数删除，第四个数放到末尾。
$arr = [0,6,3,1,7,5,8,2,4];
//我们记录一下头部弹出的值和尾部值
$head = 0; //头部
$tail = 0; //尾部
function queue ($arr){
    $head = 1;
    $tail = count($arr);
    while($head < $tail){
        echo $arr[$head];
        //初始化的时候
        $head ++;
        $arr[$tail+1] = $arr[$head];
        $head++;
        $tail++;
    }
}

queue($arr);

