<?php
//我们在生活当中吃一包薯片想吃最后一片薯片那么我们必须先把前面的薯片吃完。
//栈的作用？ 看一个列子"xyzyx"是一个回文字符串，什么是回文呢？就是正读和反读都是一样的，席主席，计中计等
//但ahah不是回文。那么我们如何去判断他不是回文呢？回文特性是他有一个中间点两边都是对称的
$string = 'ahah';
function stack($arg){
    $cnt = strlen($arg);
    if($cnt % 2 != 0){
        $cnt --;
    }
    $mid = $cnt / 2;
    // echo $mid;die;
    $char = str_split($arg);
    
    for($i=0;$i<$mid;$i++){
       if($char[$i] !== $char[$cnt]){
           echo 'NO';
           echo PHP_EOL;
           die;
       }
       $cnt --;
    }
    
    echo 'YES';
    echo PHP_EOL;
    die;
}
stack($string);